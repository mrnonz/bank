<?php
	error_reporting(0);
	require_once 'simple_html_dom.php';
	require_once 'function.php';
	require_once 'key.php';
	if (!empty($_REQUEST['key'])) $xkey = $_REQUEST['key'];
	if (empty($xkey)) {
		echo '- ERROR -';
		exit();
	}
?>