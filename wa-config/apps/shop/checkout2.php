<?php
return array (
  'aee0361eab084d4411a8509e05feabf3' => 
  array (
    'design' => 
    array (
      'logo' => '',
      'business_scope' => '',
      'phone' => '',
      'phone_hint' => '',
      'address' => '',
      'working_hours' => '',
      'order_background' => '#e3e3e3',
      'layout_background' => '#ffffff',
      'custom_css' => '',
    ),
    'cart' => 
    array (
      'block_name' => 'Shopping cart',
      'empty_text' => 'Your shopping cart is empty',
      'discount_item' => 'strikeout',
      'discount_general' => 'total_amount',
      'show_weight' => false,
    ),
    'recommendations' => 
    array (
      'block_name' => 'Recommended',
    ),
    'schedule' => 
    array (
      'timezone' => 'America/Adak',
      'week' => 
      array (
        1 => 
        array (
          'name' => 'Понедельник',
          'work' => true,
          'start_work' => '08:00',
          'end_work' => '17:00',
          'end_processing' => '14:00',
        ),
        2 => 
        array (
          'name' => 'Вторник',
          'work' => true,
          'start_work' => '08:00',
          'end_work' => '17:00',
          'end_processing' => '14:00',
        ),
        3 => 
        array (
          'name' => 'Среда',
          'work' => true,
          'start_work' => '08:00',
          'end_work' => '17:00',
          'end_processing' => '14:00',
        ),
        4 => 
        array (
          'name' => 'Четверг',
          'work' => true,
          'start_work' => '08:00',
          'end_work' => '17:00',
          'end_processing' => '14:00',
        ),
        5 => 
        array (
          'name' => 'Пятница',
          'work' => true,
          'start_work' => '08:00',
          'end_work' => '17:00',
          'end_processing' => '14:00',
        ),
        6 => 
        array (
          'name' => 'Суббота',
          'work' => false,
          'start_work' => '00:00',
          'end_work' => '23:59',
          'end_processing' => '14:00',
        ),
        7 => 
        array (
          'name' => 'Воскресенье',
          'work' => false,
          'start_work' => '00:00',
          'end_work' => '23:59',
          'end_processing' => '14:00',
        ),
      ),
      'processing_time' => '0',
      'extra_workdays' => 
      array (
      ),
      'extra_weekends' => 
      array (
      ),
    ),
    'order' => 
    array (
      'block_name' => 'Checkout',
    ),
    'customer' => 
    array (
      'block_name' => 'Customer',
      'offer_login' => 'Logging in makes ordering simple because all your orders are saved in your account history and you do not need to enter contact details for every new order.',
      'offer_logout' => 'Log out if you want to check out as another customer',
      'type' => 'person',
      'fields_person' => 
      array (
        'firstname' => 
        array (
          'used' => true,
          'required' => true,
          'width' => 'medium',
        ),
        'lastname' => 
        array (
          'used' => true,
          'required' => true,
          'width' => 'medium',
        ),
        'phone' => 
        array (
          'used' => true,
          'width' => 'medium',
          'required' => false,
        ),
        'email' => 
        array (
          'used' => true,
          'required' => true,
          'width' => 'medium',
        ),
        'name' => 
        array (
          'width' => 'medium',
          'used' => false,
          'required' => false,
        ),
        'title' => 
        array (
          'width' => 'medium',
          'used' => false,
          'required' => false,
        ),
        'middlename' => 
        array (
          'width' => 'medium',
          'used' => false,
          'required' => false,
        ),
        'jobtitle' => 
        array (
          'width' => 'medium',
          'used' => false,
          'required' => false,
        ),
        'company' => 
        array (
          'width' => 'medium',
          'used' => false,
          'required' => false,
        ),
        'company_contact_id' => 
        array (
          'used' => false,
          'required' => false,
          'width' => 'medium',
        ),
        'about' => 
        array (
          'used' => false,
          'required' => false,
          'width' => 'medium',
        ),
      ),
      'fields_company' => 
      array (
        'phone' => 
        array (
          'used' => true,
          'required' => false,
          'width' => 'medium',
        ),
        'email' => 
        array (
          'used' => true,
          'required' => false,
          'width' => 'medium',
        ),
        'company' => 
        array (
          'used' => false,
          'required' => false,
          'width' => 'medium',
        ),
        'company_contact_id' => 
        array (
          'used' => false,
          'required' => false,
          'width' => 'medium',
        ),
        'about' => 
        array (
          'used' => false,
          'required' => false,
          'width' => 'medium',
        ),
      ),
      'person_mode_name' => 'Person',
      'company_mode_name' => 'Company',
      'company_hint' => '',
      'company_terms' => '',
      'service_agreement' => '',
      'service_agreement_hint' => '',
    ),
    'shipping' => 
    array (
      'used' => false,
      'block_name' => 'Shipping',
      'mode' => 'default',
      'fixed_delivery_area' => 
      array (
        'country' => NULL,
        'region' => NULL,
        'city' => NULL,
      ),
      'show_pickuppoint_map' => 'never',
      'locations_list' => 
      array (
        0 => 
        array (
          'enabled' => 'on',
          'name' => '',
          'country' => '',
        ),
      ),
      'courier_name' => 'Courier',
      'pickuppoint_name' => 'Pickup',
      'post_name' => 'Post',
      'address_fields' => 
      array (
        'street' => 
        array (
          'width' => 'medium',
          'used' => false,
          'required' => false,
        ),
        'zip' => 
        array (
          'width' => 'medium',
          'used' => false,
          'required' => false,
        ),
      ),
      'service_agreement_hint' => 'By placing an order you confirm that you are of adult age and agree to our <a href="">personal data processing terms</a>',
      'plugin_timeout' => '10',
      'auto_use_timeout' => 3,
    ),
    'payment' => 
    array (
      'used' => false,
      'block_name' => 'Payment',
    ),
    'confirmation' => 
    array (
      'order_comment' => true,
      'terms_text' => 'Your order will be processed within a one hour',
      'order_without_auth' => 'existing_contact',
      'recode_timeout' => '60',
      'thankyou_header' => 'We have received your order. Thank you!',
      'thankyou_content' => 'We will contact you soon. Your order No. is $order_id.',
    ),
  ),
);
