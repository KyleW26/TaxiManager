<?php
define('C', '/core');
define('M', '/manage');


//Required Files

	//Config
	require_once __DIR__ . C . M . '/config.php';

	//Class Files
	require_once __DIR__ . C . '/template.class.php';
	require_once __DIR__ . C . '/mysql.class.php';
	require_once __DIR__ . C . '/users.class.php';

	//Template System Information
	$tplDes = $_CONFIG['site']['template'];
	$tplPg = $_GET['page'];
	define ('TEMPLATE_PATH', 'template/'.$tplDes);
	define ('TEMPLATE_PAGE', '/'.$tplPg.'.php');
	//Raw Addons
	define('RAW_PATH', 'template/'.$tplDes);
	//Begin Activating the Engine
	use Fenrir as Fen;

	$template = new Fen\Template(TEMPLATE_PATH.TEMPLATE_PAGE);

	$user = new Fen\User();
	
	$mysql = new Fen\MySQL();

	//Other Activating
	session_start();

	$user->Login();
?>
