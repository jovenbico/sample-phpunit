<?php

namespace Service;

use Domain\Employee;
use Domain\Manager;

class UserService {

	public function login($username, $password) {

		echo "\n {$username} {$password}";

		$emp = new Employee ();
		$mang = new Manager ();

		$emp->say ();
		$mang->say ();

	}

}