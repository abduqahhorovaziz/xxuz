<?php

class shopEasydroporderPlugin extends shopPlugin
{

	public function backendOrders()
	{
		return array(
		  'sidebar_section' => '<script src="'.$this->getPluginStaticUrl().'js/easydroporder.js"></script>'
		);
	}
	
	public function backendOrder($data){
	
		$ord_id = ($data['id']) ? $data['id'] : 0;
		$url = wa()->getAppUrl('shop'). "?plugin=easydroporder&action=delete&id=" . $ord_id;
		
		$script = "
		<script>
		
		    $(function() {
		        $('#easydroporder_delete').click( function() {
		        
    		        if (confirm('Удалить заказ и всю историю о нем?'))
    				{
                        $.getJSON('".$url."', function(json) {
    					    
    						if (json.status == 'ok')
    						{
    							$('#s-order .s-order').html('<center><br><p>Заказ <b>#{$ord_id}</b> был полностью удален из системы!</p><br></center>');
    							$('li[data-order-id=\"{$ord_id}\"]').remove();
    							setTimeout( function(){ location.reload() } , 2000);
    						}
    						else
    						{
    							alert('Ошибка удаления заказа!');
    						}
    					});
    				}          
		        });      
		    });
		    
		</script>
		";

		return array(
		   'action_link' => $script.'<a id="easydroporder_delete" href="#">'.
		        '<i class="icon16 broom"></i>Удалить безвозвратно</a>'
		);
	}

}