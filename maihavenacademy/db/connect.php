<?php

$db = new mysqli('localhost', 'root', '', 'master');
if($db->connect_errno) {
	die('Sorry, we are having some problems.');
	}

?>