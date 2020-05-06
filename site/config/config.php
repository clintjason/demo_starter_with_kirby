<?php

c::set('cache', true);
//c::set('cache.ignore', array(‘search’, ‘other-dynamic-page’)); #pages not to cache
//c::set('debug', true);
//c::set('license', 'put your license key here');
/*
return [
    'debug' => true
];*/

return [
    'routes' => [
      [
        'pattern' => 'logout',
        'action'  => function() {
  
          if ($user = kirby()->user()->role()==='Client') {
            $user->logout();
          }
  
          go('login');
  
        }
      ]
    ]
  ];
?>