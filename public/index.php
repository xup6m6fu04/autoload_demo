<?php
	require_once __DIR__ . '/../vendor/autoload.php';
	
	//classmap
	
	$testLib1 = new \library\lib1;
	$testLib2 = new \library\lib2;
	
	//psr-4 autoload
	
	$testLib3 = new App\src\lib3;
	
	//files
	echo testAutoload();
	