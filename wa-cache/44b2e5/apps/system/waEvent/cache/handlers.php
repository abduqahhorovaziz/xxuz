<?php
return array (
  'plugins' => 
  array (
    'shop' => 
    array (
      'redirect' => 
      array (
        'name' => '301 Redirect',
        'description' => 'Helps you migrate to Shop-Script from third-party ecommerce platforms keeping all your product and storefront pages redirected and indexed properly.',
        'vendor' => 'webasyst',
        'version' => '1.1',
        'img' => 'wa-apps/shop/plugins/redirect/img/redirect.png',
        'icons' => 
        array (
          16 => 'img/redirect.png',
        ),
        'shop_settings' => true,
        'handlers' => 
        array (
          'frontend_error' => 'frontendError',
          'frontend_search' => 'frontendSearch',
        ),
        'id' => 'redirect',
        'app_id' => 'shop',
        'custom_settings' => true,
      ),
      'cml1c' => 
      array (
        'name' => '1С (CommerceML)',
        'description' => 'Обмен данными с системами товарного учета («1С», «МойСклад», «Бизнес.ру» и подобные).',
        'img' => 'wa-apps/shop/plugins/cml1c/img/1c.png',
        'vendor' => 'webasyst',
        'version' => '2.5.16',
        'importexport' => true,
        'frontend' => true,
        'handlers' => 
        array (
          'backend_product' => 'productHandler',
          'backend_product_sku_settings' => 'skuHandler',
          'routing' => 'routing',
        ),
        'locale' => 
        array (
          0 => 'ru_RU',
        ),
        'id' => 'cml1c',
        'app_id' => 'shop',
      ),
      'easydroporder' => 
      array (
        'name' => 'Безвозвратное удаление заказов',
        'description' => 'Безвозвратное удаление заказов из системы и всех связанных с ними данных',
        'vendor' => 942086,
        'version' => '1.1.1',
        'img' => 'wa-apps/shop/plugins/easydroporder/img/easydroporder.png',
        'shop_settings' => false,
        'frontend' => false,
        'handlers' => 
        array (
          'backend_orders' => 'backendOrders',
          'backend_order' => 'backendOrder',
        ),
        'id' => 'easydroporder',
        'app_id' => 'shop',
      ),
    ),
  ),
  'handlers' => 
  array (
    'webasyst' => 
    array (
      'backend_header' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/backend_header/',
          'file' => 'webasyst.backend_header.handler.php',
          'class' => 'installerWebasystBackend_headerHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'waid_auth' => 
      array (
        0 => 
        array (
          'app_id' => 'installer',
          'regex' => '/waid_auth/',
          'file' => 'webasyst.waid_auth.handler.php',
          'class' => 'installerWebasystWaid_authHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_dispatch_miss' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_dispatch_miss/',
          'file' => 'webasyst.backend_dispatch_miss.handler.php',
          'class' => 'teamWebasystBackend_dispatch_missHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_personal_profile' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/backend_personal_profile/',
          'file' => 'webasyst.backend_personal_profile.handler.php',
          'class' => 'teamWebasystBackend_personal_profileHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'backend_push' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/backend_push/',
          'file' => 'webasyst.backend_push.handler.php',
          'class' => 'shopWebasystBackend_pushHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'contacts' => 
    array (
      'profile.tab' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'teamContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/profile\\.tab/',
          'file' => 'contacts.profile.tab.handler.php',
          'class' => 'shopContactsProfileTabHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'contacts_collection' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'teamContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/contacts_collection/',
          'file' => 'contacts.contacts_collection.handler.php',
          'class' => 'shopContactsContacts_collectionHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'delete' => 
      array (
        0 => 
        array (
          'app_id' => 'team',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'teamContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        1 => 
        array (
          'app_id' => 'shop',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'shopContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
        2 => 
        array (
          'app_id' => 'webasyst',
          'regex' => '/delete/',
          'file' => 'contacts.delete.handler.php',
          'class' => 'webasystContactsDeleteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'explore' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/explore/',
          'file' => 'contacts.explore.handler.php',
          'class' => 'shopContactsExploreHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'merge' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/merge/',
          'file' => 'contacts.merge.handler.php',
          'class' => 'shopContactsMergeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'links' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/links/',
          'file' => 'contacts.links.handler.php',
          'class' => 'shopContactsLinksHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'site' => 
    array (
      'route_delete.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_delete\\.after/',
          'file' => 'site.route_delete.after.handler.php',
          'class' => 'shopSiteRoute_deleteAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'update.route' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/update\\.route/',
          'file' => 'site.update.route.handler.php',
          'class' => 'shopSiteUpdateRouteHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.before' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.before/',
          'file' => 'site.route_save.before.handler.php',
          'class' => 'shopSiteRoute_saveBeforeHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
      'route_save.after' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/route_save\\.after/',
          'file' => 'site.route_save.after.handler.php',
          'class' => 'shopSiteRoute_saveAfterHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'installer' => 
    array (
      'end_installation' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'regex' => '/end_installation/',
          'file' => 'installer.end_installation.handler.php',
          'class' => 'shopInstallerEnd_installationHandler',
          'method' => 
          array (
            0 => 'execute',
          ),
        ),
      ),
    ),
    'shop' => 
    array (
      'frontend_error' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'redirect',
          'regex' => '/frontend_error/',
          'class' => 'shopRedirectPlugin',
          'method' => 
          array (
            0 => 'frontendError',
          ),
        ),
      ),
      'frontend_search' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'redirect',
          'regex' => '/frontend_search/',
          'class' => 'shopRedirectPlugin',
          'method' => 
          array (
            0 => 'frontendSearch',
          ),
        ),
      ),
      'backend_product' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cml1c',
          'regex' => '/backend_product/',
          'class' => 'shopCml1cPlugin',
          'method' => 
          array (
            0 => 'productHandler',
          ),
        ),
      ),
      'backend_product_sku_settings' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cml1c',
          'regex' => '/backend_product_sku_settings/',
          'class' => 'shopCml1cPlugin',
          'method' => 
          array (
            0 => 'skuHandler',
          ),
        ),
      ),
      'routing' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'cml1c',
          'regex' => '/routing/',
          'class' => 'shopCml1cPlugin',
          'method' => 
          array (
            0 => 'routing',
          ),
        ),
      ),
      'backend_orders' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'easydroporder',
          'regex' => '/backend_orders/',
          'class' => 'shopEasydroporderPlugin',
          'method' => 
          array (
            0 => 'backendOrders',
          ),
        ),
      ),
      'backend_order' => 
      array (
        0 => 
        array (
          'app_id' => 'shop',
          'plugin_id' => 'easydroporder',
          'regex' => '/backend_order/',
          'class' => 'shopEasydroporderPlugin',
          'method' => 
          array (
            0 => 'backendOrder',
          ),
        ),
      ),
    ),
  ),
);
