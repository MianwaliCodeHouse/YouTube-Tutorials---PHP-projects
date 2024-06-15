<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '0690a87dbd2de09aaeae',
    '193ec601901c98081030',
    '1720196',
    $options
  );
?>