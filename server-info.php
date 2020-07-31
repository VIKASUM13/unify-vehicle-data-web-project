<?php
$server=[
	'server_name'=>$_SERVER["SERVER_NAME"],
	'server_software'=>$_SERVER["SERVER_SOFTWARE"],
	'file location in server'=>$_SERVER["SCRIPT_FILENAME"],
	'server ip address'=>$_SERVER["SERVER_ADDR"],
	' app protocol used by server'=>$_SERVER["SERVER_PROTOCOL"]
];

$client=[
	'client type'=>$_SERVER["HTTP_USER_AGENT"],
	'client ip address'=>$_SERVER["REMOTE_ADDR"],
	'client host device'=>$_SERVER["REMOTE_USER"],
	'clint accesing via port'=>$_SERVER["REMOTE_PORT"]

];

?>