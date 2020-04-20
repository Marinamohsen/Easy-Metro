<?php
include 'config.php';
function setTitle()
{
	global $title;

	if (isset($title)) {
		echo $title;
	}
}
