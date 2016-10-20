<?php
error_reporting ( E_ALL );
ini_set ( 'display_erros', 'On' );

spl_autoload_register ( function ($class) {
	static $classes = null;
	if ($classes === null) {
		$classes = array (
				'service\\userservice' => '/Service/UserService.php',
				'domain\\person' => '/Domain/Person.php',
				'domain\\employee' => '/Domain/Employee.php',
				'domain\\manager' => '/Domain/Manager.php'
		);
	}
	$cn = strtolower ( $class );
	if (isset ( $classes [$cn] )) {
		require __DIR__ . $classes [$cn];
	}
}, true, false );
