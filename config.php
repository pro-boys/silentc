<?php
error_reporting(E_ALL);

define('SILENTC_TOKEN', '1044571514:AAHyXxyPHXD59HvICpego-PQLJ7-dfUPeh4');
$db_data = ['sqlite:silentc.db'];

$cfg = [
	# Users that can use the special commands
	'sudoers' => [
		276145711,
	],
];

# User that will receive the error reports
define('SILENTC_ADMIN', 276145711);
