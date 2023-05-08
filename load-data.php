<?php

require "config.php";

use App\Pets;

try {
	Pets::register('Chiggan', 'Male', 'May 19, 2019', 'Jan', 'JanChiggan@gmail.com', 'Mabalacat City', '09123456789');
	echo "<li>Added 1 pet";

	$pets = [
		[
			'name' => 'Khigzz',
			'gender' => 'Male',
			'birthdate' => 'January 28, 2023',
			'owner' => 'Jan',
			'email' => 'JanKhigzz@gmail.com',
			'address' => 'Mabalacat City',
			'contact_number' => '09123456789'
		],
		[
			'name' => 'Bjorn',
			'gender' => 'Male',
			'birthdate' => 'April 20, 2021',
			'owner' => 'Jan',
			'email' => 'JanBjorn@gmail.com',
			'address' => 'Mabalacat City',
			'contact_number' => '09123456789'
		]
	];
	Pets::registerMany($pets);
	echo "<li>Added " . count($pets) . " more pets";
	echo "<br /><a href='index.php'>Proceed to Index Page</a>";

} catch (PDOException $e) {
	error_log($e->getMessage());
	echo "<h1 style='color: red'>" . $e->getMessage() . "</h1>";
}

