<?php 

// echo date('d'); // day
// echo date('m'); // month
// echo date('d'); // day
// echo date('l'); // day of the week

// echo date('Y/m/d'); // 2019/05/29
// echo date('d-m-Y'); // 29-05-2019

// echo date('h'); // hour
// echo date('i'); // minute
// echo date('s'); // seconds
// echo date('a'); // AM or PM

// SET TIMEZONE
date_default_timezone_set('Europe/London');

// echo date('h:i:sa'); // 07:25:36pm

// mktime() returns a Unix timestamp
$timestamp = mktime(6, 30, 59, 7, 22, 1977);
// echo $timestamp;

// echo date('d/m/Y h:i:sa', $timestamp);

// Parse almost any English date string into a Unix datestamp
// $timestamp2 = strtotime('7.00pm 22 March 2016');
// $timestamp3 = strtotime('tomorrow');
// $timestamp4 = strtotime('next sunday');
$timestamp5 = strtotime('+2 days');


echo date('d/m/Y h:i:sa', $timestamp5);
?>