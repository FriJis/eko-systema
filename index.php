<?
$ver = 1;
$mainFolder="/dist";
require 'components/layout.php';

function page()
{
	$page = $_GET['page'];
	if($page == 'catalog')
	{
		return template('catalog');
	}
	return template('main');
}

function template($file, $arr = [])
{
	global $ver;
	global $mainFolder;
	extract($arr);
	include 'components/'. $file .'.php';
}