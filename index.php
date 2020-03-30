<?
$ver = 1;
$mainFolder="/dist";
require 'components/layout.php';

function template($file, $arr = [])
{
	global $ver;
	global $mainFolder;
	extract($arr);
	include 'components/'. $file .'.php';
}