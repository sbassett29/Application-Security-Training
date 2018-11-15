<?php

/* to be run in browser */

/** 
 * debug
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('X-XSS-Protection:0');

/**
 * autoload
 */
require 'autoload.php';
require 'includes/AutoLoader.php';

/**
 * mw classes
 */
use Html;

/**
 * default vals for _GET vars
 */
$_GET['div1Style'] = !empty($_GET['div1Style'])?$_GET['div1Style']:'x';
$_GET['div1Msg'] = !empty($_GET['div1Msg'])?$_GET['div1Msg']:'y';
$_GET['btnHref'] = !empty($_GET['btnHref'])?$_GET['btnHref']:'z';

/**
 * form button display function
 * @return string html data
 */
function displayButton() {
	return Html::rawElement(
		'div',
		[ 
			'class' => 'mw-extension-class-2',
			'style' => $_GET['div1Style']
		],
		$_GET['div1Msg']
	) . 
	Html::element('br') .
	Html::rawElement(
		'div',
		[ 'class' => 'mw-extension-class-3' ],
		Html::linkButton(
			'A "Button" Link',
			[
				'href' => htmlspecialchars($_GET['btnHref']),
				'class' => 'mw-extension-class-4'
			]
		)
	);
}

/**
 * pretend this is getting a Context and using OutputPage :)
 */
echo displayButton();
