<?php

return array (

  'name' => 'Безвозвратное удаление заказов',
  'description' => 'Безвозвратное удаление заказов из системы и всех связанных с ними данных',
  'vendor' => 942086,  
  'version' => '1.1.1',
  'img' => 'img/easydroporder.png',
  'shop_settings' => false,
  'frontend' => false,  
  'handlers' => array (
    'backend_orders' => 'backendOrders',
    'backend_order' => 'backendOrder',
  ),
  
);
