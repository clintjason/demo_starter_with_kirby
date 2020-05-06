<?php

c::set('cache', true);
//c::set('cache.ignore', array(‘search’, ‘other-dynamic-page’)); #pages not to cache
//c::set('debug', true);
//c::set('license', 'put your license key here');

return [
    'routes' => [
      [
        'pattern' => 'logout',
        'action'  => function() {
  
          if ($user = kirby()->user()) {
            $user->logout();
          }
  
          go('login');
  
        }
      ]
    ],
    'panel' =>[
      'install' => true
    ]
  ];
?>