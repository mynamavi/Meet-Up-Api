<?php
require 'Meetup.php';
$meetup = new Meetup(array(
  'key' => 'your_api_key'
));
$events = $meetup->getEvents(array(
	'group_urlname' => 'your_group_name'
));
foreach ($events as $event) {
	echo $event->name . ' at ' . date('Y-m-d H:i', $event->time / 1000) . PHP_EOL;
}
