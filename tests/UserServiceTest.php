<?php
use PHPUnit\Framework\TestCase;
use Service\UserService;

class UserServiceTest extends TestCase {

	function test_login() {

		$userService = new UserService ();

		$userService->login ( "joven", "123" );

		$this->assertEquals ( 1, 1 );

	}

}