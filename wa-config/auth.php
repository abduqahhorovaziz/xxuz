<?php
return array (
  'xx.uz' => 
  array (
    'verification_channel_ids' => 
    array (
      0 => '1',
    ),
    'auth' => true,
    'fields' => 
    array (
      'firstname' => 
      array (
        'caption' => 'First name',
        'placeholder' => '',
      ),
      'lastname' => 
      array (
        'caption' => 'Last name',
        'placeholder' => '',
      ),
      'password' => 
      array (
        'caption' => 'Password',
        'placeholder' => '',
        'required' => true,
      ),
      'email' => 
      array (
        'caption' => 'Email',
        'placeholder' => '',
        'required' => true,
      ),
      'phone' => 
      array (
        'required' => 'true',
        'caption' => 'Телефон',
        'placeholder' => '',
      ),
    ),
    'params' => 
    array (
      'service_agreement' => '',
      'service_agreement_text' => '',
      'button_caption' => 'Sign up',
      'confirm_email' => true,
    ),
    'route_url' => '*',
    'app' => 'shop',
    'auth_type' => 'user_password',
    'signup_confirm' => true,
    'signup_notify' => true,
    'onetime_password_timeout' => '60',
    'confirmation_code_timeout' => '60',
    'recovery_password_timeout' => '60',
    'can_login_by_contact_login' => true,
    'used_auth_methods' => 
    array (
      0 => 'email',
      1 => 'social',
    ),
    'priority_auth_method' => '',
    'adapters' => 
    array (
      'google' => 
      array (
        'app_id' => '277191651742-5e2fvgaqbqrhit4u255be2jlu3qmp9su.apps.googleusercontent.com',
        'app_secret' => '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',
      ),
    ),
    'signup_captcha' => false,
    'login_captcha' => '',
    'rememberme' => true,
    'login_caption' => 'Email',
    'login_placeholder' => 'Email',
    'password_placeholder' => '',
  ),
);
