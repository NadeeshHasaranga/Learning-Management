<?php
require  'C:\xampp\htdocs\codeigniter-3.2.1-with-admin-LTE-Template-Intigration\vendor\autoload.php';

$options = array(
    'cluster' => 'ap2',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    '621cb1ab21725bef3e6d',
    '40ab0248a96d8d00596f',
    '712289',
    $options
);
$data['message'] = 'hello world';
$pusher->trigger('my-channel', 'my-event', $data);
?>
<div class="content-wrapper">
    <h1>Pusher Test</h1>
<p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
</p>

</div>
