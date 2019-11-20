<?php
if (!empty($_GET['location'])) {

	$maps_url = 'https://' . 'maps.googleapis.com/' . '
	maps/api/geocode/json' . '?address=' . urlencode($maps_json, true);

	$lat = $maps_array['results'][0]['geometry']['location']['lat'];
	$lng = $maps_array['results'][0]['geometry']['location']['lng'];
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Hope this works</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="script.js"></script>
</head>
	<body>
		<!--In this case we're leaving action blank so it loads to the address in the current page, we only in one page so that's good.-->
		<form action="" method="get">
			<input type="text" name="location"/>
			<button type="submit">Please?</button>
		</form>
	</body>