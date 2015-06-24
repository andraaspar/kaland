<?php

function getValue($name) {
	if (isset($_GET[$name])) {
		return $_GET[$name];
	} else {
		return "";
	}
}

function getPath($location) {
	global $name;
	$nameEscaped = urlencode($name);
	return htmlspecialchars("?l=$location&n=$nameEscaped");
}

function getPathInputs($location, $except) {
	global $name;
	$result = "";
	if ($except !== "location") $result .= "<input type='hidden' name='l' value='$location'/>"; 
	if ($except !== "name") $result .= "<input type='hidden' name='n' value='$nameEscaped'/>"; 
	$nameEscaped = htmlspecialchars(urlencode($name));
	return $result;
}
