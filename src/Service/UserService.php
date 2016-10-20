<?php

namespace Service;

use Domain\Employee;
use Domain\Manager;
use Domain\Person;

class UserService {

	public function login($username, $password) {

		echo "\n {$username} {$password}";

		$emp = new Employee ();
		$mang = new Manager ();

		if ($emp instanceof Person)
			$emp->say ();

		if ($mang instanceof Person)
			$mang->say ();

	}

}