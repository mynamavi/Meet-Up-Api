Meet-Up-Api
===========

Most easy way to integrating Meetup Api to your site.
This is user guide to use this MEET UP  Api Integration.

This is fully editable and I have no coopyright.Please use it and enhance it which manner you want.

Now how to use it
 Extract it on localhost, and it already has index file, edit index.php and paste you API key  where written "your_api_key" and paste group_url_name or group_id or what you have in next function.
 For More info go meetup api http://www.meetup.com/meetup_api/ 
 
 Now come in functions:
 
For getting just Events use "getEvents"
like
$events = $meetup->getEvents(array(
  'group_urlname' => 'your_group_name'
));

If you want to get photos use

$events = $meetup->getPhotos(array(
	'group_urlname' => 'your_group_name'
));


If you want to get Events by ID use

$events = $meetup->getEventsbyId(array(
	'id' => 'your_event_id'
));

now u have understand what u have to change.
For any query feel free to contact.

AKT

















"
