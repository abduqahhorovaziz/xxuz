<?php

class shopEasydroporderPluginBackendActions extends waJsonActions
{
	public function deleteAction()
	{
		if (waRequest::isXMLHttpRequest())
		{
			$id = waRequest::get('id', 0, 'int');
			$model = new waModel();
			
			self::updatePlugins($id);
			
			try { $model->query("DELETE FROM shop_order_items WHERE order_id = {$id}"); } catch (Exception $ex) {};
			try { $model->query("DELETE FROM shop_order_log WHERE order_id = {$id}"); } catch (Exception $ex) {};
			try { $model->query("DELETE FROM shop_order_log_params WHERE order_id = {$id}"); } catch (Exception $ex) {};
			try { $model->query("DELETE FROM shop_order_params WHERE order_id = {$id}"); } catch (Exception $ex) {};
			try { $model->query("DELETE FROM shop_legalentity_order WHERE order_id = {$id}"); } catch (Exception $ex) {};
			try { $model->query("DELETE FROM shop_discountcards_order WHERE order_id = {$id}"); } catch (Exception $ex) {};
			try { $model->query("DELETE FROM shop_affiliate_transaction WHERE order_id = {$id}"); } catch (Exception $ex) {};
			try { $model->query("DELETE FROM shop_order WHERE id = {$id}"); } catch (Exception $ex) {};
			try { $model->query("DELETE FROM shop_sales"); } catch (Exception $ex) {};

			self::updateStatistic();
		}
	}

	public function deleteAllAction()
	{
		$orders = waRequest::post('orders');
		$model = new waModel();

		if (isset($orders['count']) && $orders['count'] > 0)
		{
			if (isset($orders['order_id']))
			{
				$ids = implode(',', $orders['order_id']);
//			    waLog::dump($ids, 'shop/easydroporder/ids.log');
    			self::updatePlugins($ids);

				try { $model->query("DELETE FROM shop_order_items WHERE order_id IN (".$model->escape($ids).")"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order_log WHERE order_id IN (".$model->escape($ids).")"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order_log_params WHERE order_id IN (".$model->escape($ids).")"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order_params WHERE order_id IN (".$model->escape($ids).")"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_legalentity_order WHERE order_id IN (".$model->escape($ids).")"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_discountcards_order WHERE order_id IN (".$model->escape($ids).")"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_affiliate_transaction WHERE order_id IN (".$model->escape($ids).")"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order WHERE id IN (".$model->escape($ids).")"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_sales"); } catch (Exception $ex) {};
			}
			elseif (isset($orders['filter_params']['state_id']))
			{
				if (!is_array($orders['filter_params']['state_id']))
					$orders['filter_params']['state_id'] = array($orders['filter_params']['state_id']);

				foreach ($orders['filter_params']['state_id'] as $key => $state) {
					$states.= '"' . $model->escape($state) . '", ';
				}
				$states = substr($states, 0, -2);
				
				// получаем список заказов 
				$orders = $model->query("SELECT id FROM shop_order WHERE state_id IN(".$states.")")->fetchAll();
				if ($orders) {
    				$ids = array();
				    foreach ($orders as $i => $orders) {
				        $ids[] = $orders['id']; 
				    }
				    $order_ids = implode(',', $ids);
				    self::updatePlugins($order_ids);
//				    waLog::dump($ids, 'shop/easydroporder/states.log');
//				    waLog::dump($order_ids, 'shop/easydroporder/states.log');
				}

				try { $model->query("DELETE FROM shop_order_items WHERE order_id IN (SELECT id FROM shop_order WHERE state_id IN(".$states."))"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order_log WHERE order_id IN (SELECT id FROM shop_order WHERE state_id IN(".$states."))"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order_log_params WHERE order_id IN (SELECT id FROM shop_order WHERE state_id IN(".$states."))"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order_params WHERE order_id IN (SELECT id FROM shop_order WHERE state_id IN(".$states."))"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_legalentity_order WHERE order_id IN (SELECT id FROM shop_order WHERE state_id IN(".$states."))"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_discountcards_order WHERE order_id IN (SELECT id FROM shop_order WHERE state_id IN(".$states."))"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_affiliate_transaction WHERE order_id IN (SELECT id FROM shop_order WHERE state_id IN(".$states."))"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order WHERE state_id IN(".$states.")"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_sales"); } catch (Exception $ex) {};
			}
			else
			{
				// получаем список всех заказов 
				$orders = $model->query("SELECT id FROM shop_order")->fetchAll();
				if ($orders) {
    				$ids = array();
				    foreach ($orders as $i => $orders) {
				        $ids[] = $orders['id']; 
				    }
				    $order_ids = implode(',', $ids);
				    self::updatePlugins($order_ids);
//				    waLog::dump($ids, 'shop/easydroporder/all.log');
//				    waLog::dump($order_ids, 'shop/easydroporder/all.log');
				}			    

				try { $model->query("DELETE FROM shop_order_items WHERE order_id"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order_log WHERE order_id"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order_log_params WHERE order_id"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order_params WHERE order_id"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_legalentity_order WHERE order_id"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_discountcards_order WHERE order_id"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_affiliate_transaction WHERE order_id"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_order WHERE id"); } catch (Exception $ex) {};
				try { $model->query("DELETE FROM shop_sales"); } catch (Exception $ex) {};
			}
			
			self::updateStatistic();
			
		}
	}

	public static function updateStatistic()
	{
		$model = new waModel();
		$model->query("UPDATE shop_customer c SET `number_of_orders` = (SELECT count(*) FROM shop_order WHERE contact_id = c.contact_id)");
	}
	
	public static function updatePlugins($order_ids = '')
	{
//	    waLog::dump($order_ids, 'shop/easydroporder/updatePlugins.log');
		if ($order_ids) {

		    ////////////////////////////////////
		    // ДИСКОНТНЫЕ КАРТЫ
		    try {
		        
    		    $arr_orders = array();
    		    $arr_orders = explode( ',', $order_ids );
		        $plugin = wa('shop')->getPlugin('discountcards');
		        if ($plugin) {
        		    foreach ($arr_orders as $i => $order_id) {
        		       $plugin->orderActionRefund( array('order_id' => trim($order_id)), true);
        		    } 
		        }       
		    } 
		    catch (Exception $ex) {};

		    
		    ////////////////////////////////////
		    // ПАРТНЕРСКАЯ ПРОГРАММА
		    try {
    		    $arr_orders = array();
    		    $arr_orders = explode( ',', $order_ids );
		        $shopAffiliate = new shopAffiliate();
		        if ($plugin) {
        		    foreach ($arr_orders as $i => $order_id) {
        		       $shopAffiliate->refundDiscount( $order_id );
        		       $shopAffiliate->cancelBonus( $order_id );
        		    } 
		        }       
		    } 
		    catch (Exception $ex) {};

		}    
	}
}