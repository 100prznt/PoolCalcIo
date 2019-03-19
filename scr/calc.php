<?php
/**
 * Created by PhpStorm.
 * User: Ruemmler, Elias
 * Date: 15.03.2019
 * Time: 16:08
 */

date_default_timezone_set("Europe/Berlin");
$timestamp = time();


$system = ['hostname' => 'PUMP001', 'state' => -1];
$service = ['hostname' => 'ONDEV001', 'state' => 1, 'error' => 1003, 'error_message' => 'Network connection to subsystem not established.'];
$data = [ 'version' => '1.0.17', 'timestamp' => date('c'), 'service' => $service, 'subsystem' => $system ];

header('Content-type: application/json');
echo json_encode( $data );

die();