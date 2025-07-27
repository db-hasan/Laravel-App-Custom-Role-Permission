<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::afAF9eKgmgkAq6wb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/role-right/get-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DGks3BuM0rkQrQWR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/role-right/store-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nto5Cu7rISLJYxDr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/role-right/get-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S5K8m784tggpbi5p',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/role-right/store-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZXTCSs07Jht6Br1x',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/role-right/get-role-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LFvvJlsumdQBWQe0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/role-right/specific-role-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zbA7VtpRJwZzdCs2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/role-right/update-role-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IQc83B2ohDWnBNN4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user-index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qxr53Hr4gQHi4HiI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/user-insert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dMOGR0caaF4PUEw4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LX4irvJo0I7Ghf0B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index.role',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/insert-role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.role',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index.right',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/insert-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.right',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-role-for-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'get.role.for.right',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-role-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index.RoleRigh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/specific-role-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'specific.RoleRigh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-role-right' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.RoleRigh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/index-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'index.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/insert-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'store.user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/api/v1/(?|role\\-right/(?|update\\-r(?|ole/([^/]++)(*:57)|ight/([^/]++)(*:77))|delete\\-r(?|ole/([^/]++)(*:109)|ight/([^/]++)(*:130)))|user\\-(?|update/([^/]++)(*:164)|destroy/([^/]++)(*:188)))|/update\\-(?|r(?|ole/([^/]++)(*:226)|ight/([^/]++)(*:247))|user/([^/]++)(?|(*:272)))|/delete\\-r(?|ole/([^/]++)(*:307)|ight/([^/]++)(*:328)))/?$}sDu',
    ),
    3 => 
    array (
      57 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QtSBioCfhxZWB3xD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      77 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ITGYI0WoXcS6yK59',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6ujRb5p6Ym5EpfiO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UweBEWLS2bUvhC5n',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WsMywFWojo4N8AqO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rqFWE0Hp3XEBL4tr',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.role',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.right',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'update.user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.role',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.right',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::afAF9eKgmgkAq6wb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@apiLogin',
        'controller' => 'App\\Http\\Controllers\\AuthController@apiLogin',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::afAF9eKgmgkAq6wb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DGks3BuM0rkQrQWR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/role-right/get-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@index',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::DGks3BuM0rkQrQWR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nto5Cu7rISLJYxDr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/role-right/store-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@storeRole',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@storeRole',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::nto5Cu7rISLJYxDr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QtSBioCfhxZWB3xD' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/role-right/update-role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@updateRole',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@updateRole',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::QtSBioCfhxZWB3xD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ujRb5p6Ym5EpfiO' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/role-right/delete-role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@deleteRole',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@deleteRole',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::6ujRb5p6Ym5EpfiO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S5K8m784tggpbi5p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/role-right/get-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@indexRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@indexRight',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::S5K8m784tggpbi5p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZXTCSs07Jht6Br1x' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/role-right/store-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@storeRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@storeRight',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::ZXTCSs07Jht6Br1x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ITGYI0WoXcS6yK59' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/role-right/update-right/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@updateRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@updateRight',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::ITGYI0WoXcS6yK59',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UweBEWLS2bUvhC5n' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/role-right/delete-right/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@deleteRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@deleteRight',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::UweBEWLS2bUvhC5n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LFvvJlsumdQBWQe0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/role-right/get-role-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@indexRoleRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@indexRoleRight',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::LFvvJlsumdQBWQe0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zbA7VtpRJwZzdCs2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/role-right/specific-role-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@specificRoleRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@specificRoleRight',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::zbA7VtpRJwZzdCs2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IQc83B2ohDWnBNN4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/role-right/update-role-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@updateRoleRights',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@updateRoleRights',
        'namespace' => NULL,
        'prefix' => 'api/v1/role-right',
        'where' => 
        array (
        ),
        'as' => 'generated::IQc83B2ohDWnBNN4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qxr53Hr4gQHi4HiI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/user-index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@indexUser',
        'controller' => 'App\\Http\\Controllers\\UserController@indexUser',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::Qxr53Hr4gQHi4HiI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dMOGR0caaF4PUEw4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/user-insert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@storeUser',
        'controller' => 'App\\Http\\Controllers\\UserController@storeUser',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::dMOGR0caaF4PUEw4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WsMywFWojo4N8AqO' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/user-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateUser',
        'controller' => 'App\\Http\\Controllers\\UserController@updateUser',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::WsMywFWojo4N8AqO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rqFWE0Hp3XEBL4tr' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/user-destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@destroyUser',
        'controller' => 'App\\Http\\Controllers\\UserController@destroyUser',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::rqFWE0Hp3XEBL4tr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LX4irvJo0I7Ghf0B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'verify.cookie',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:222:"function (\\Illuminate\\Http\\Request $request) {
        $request->user()->tokens()->delete();
        return \\response()->json([\'message\' => \'Logged out\'])->cookie(\'auth_token\', \'\', -1, \'/\', \'localhost\', true, true);

    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004ee0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::LX4irvJo0I7Ghf0B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\AuthController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@adminlogin',
        'controller' => 'App\\Http\\Controllers\\AuthController@adminlogin',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@dashboard',
        'controller' => 'App\\Http\\Controllers\\DashboardController@dashboard',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index.role' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@indexRole',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@indexRole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'index.role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.role' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'insert-role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@storeRole',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@storeRole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.role' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@updateRole',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@updateRole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete.role' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@deleteRole',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@deleteRole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete.role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index.right' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@indexRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@indexRight',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'index.right',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.right' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'insert-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@storeRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@storeRight',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.right',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.right' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-right/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@updateRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@updateRight',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.right',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete.right' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'delete-right/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@deleteRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@deleteRight',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete.right',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'get.role.for.right' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-role-for-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@getRoleForRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@getRoleForRight',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'get.role.for.right',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index.RoleRigh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-role-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@indexRoleRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@indexRoleRight',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'index.RoleRigh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'specific.RoleRigh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'specific-role-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@specificRoleRight',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@specificRoleRight',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'specific.RoleRigh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.RoleRigh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-role-right',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleRightController@updateRoleRights',
        'controller' => 'App\\Http\\Controllers\\RoleRightController@updateRoleRights',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.RoleRigh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'index.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'index-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@indexUser',
        'controller' => 'App\\Http\\Controllers\\UserController@indexUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'index.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'insert-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@createUser',
        'controller' => 'App\\Http\\Controllers\\UserController@createUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'insert-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@storeUser',
        'controller' => 'App\\Http\\Controllers\\UserController@storeUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@editUser',
        'controller' => 'App\\Http\\Controllers\\UserController@editUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.user' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'update-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateUser',
        'controller' => 'App\\Http\\Controllers\\UserController@updateUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
