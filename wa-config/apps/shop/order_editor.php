<?php
return array (
  'use_custom_config' => true,
  'name_format' => 'one_field',
  'source' => NULL,
  'fixed_delivery_area' => 
  array (
    'country' => 'uzb',
    'region' => 'TAS',
    'city' => '',
  ),
  'fields' => 
  array (
    'person' => 
    array (
      'title' => 
      array (
        'used' => true,
        'required' => false,
      ),
      'name' => 
      array (
        'used' => true,
        'required' => false,
      ),
    ),
    'company' => 
    array (
      'email' => 
      array (
        'used' => true,
        'required' => false,
      ),
    ),
    'address' => 
    array (
    ),
  ),
  'billing_address' => 
  array (
    'person' => false,
    'company' => false,
  ),
);
