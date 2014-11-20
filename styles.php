<?php
require dirname(dirname(__DIR__)) . '/inc/php/session.php';
header("Content-type: text/css");

$css = file_get_contents(__DIR__ . '/styles.css');

if (isset($_SESSION[$_GET['project']]['config']['theme']) && @$str = file_get_contents('../../../vendor/cmskit/jquery-ui/themes/'.end ($_SESSION[$_GET['project']]['config']['theme']).'/parameter.txt'))
{
	parse_str($str, $obj);
	$css = strtr($css, $obj);
}

echo $css;
?>
