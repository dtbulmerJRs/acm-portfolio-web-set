<?php

use \Core\ConfigScanner as ConfigScanner;

use Tester\Tester as Tester;

$tester = new Tester("Config Test");

$test_ini_file = <<<INI
; last modified 1 April 2001 by John Doe
[owner]
name=John Doe
portfolio_name=The Lab
INI;

try {
	$configTest = ConfigScanner::fromString($test_ini_file);
	
	if($configTest->getValue('name') !== 'John Doe')
	{
		$tester->fail('Name Value Test (name)');
		$perfect = false;
	}
 
	if($configTest->getValue('portfolio_name') !== 'The Lab')
	{
		$tester->fail('Name Value Test (portfolio)');
		$perfect = false;
	}

	if($tester->isPerfect()) { $tester->pass('PASS'); }
	
} catch (\Exception $e) {
	$tester->fail('Exception thrown: ' . $e->getMessage());
 }