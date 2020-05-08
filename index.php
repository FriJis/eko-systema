<?
$ver = 2;
$mainFolder = "/dist";
require 'components/layout.php';

function page()
{
	$page = $_GET['page'];
	if ($page == 'catalog') {
		return template('catalog');
	} elseif ($page == 'product') {
		return template('product');
	}
	elseif ($page == 'product2') {
		return template('product2');
	}
	return template('main');
}

function template($file, $arr = [])
{
	global $ver;
	global $mainFolder;
	extract($arr);
	include 'components/' . $file . '.php';
}
