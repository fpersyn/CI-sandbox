<?php

/**
* 
*/
class Guestbook
{
	
	// simulate DB connection with static entries array
	private static $_entries = array(
		array(
			'name' => 'Kirk',
			'message' => 'Hi, I\'m Kirk',
			),
		array(
			'name' => 'Ted',
			'message' => 'Hi, I\'m Ted',
			),
	);

	public function viewAll()
	{
		// retrieve all records from the DB simulation
		return self::$_entries;
	}

	public function add( $name, $message )
	{
		// Simulate insertion into the DB by adding a new record into $_entries
		
		// Correct way to do it :
		//self::$_entries[] = array('name' => $name, 'message' => $message);

		// Buggy version for demonstration purposes :
		self::$_entries[] = array('notname' => $name, 'notmessage' => $message);

		return true;
	}

	public function deleteAll()
	{
		// we just set the $_entries array to simulate
		self::$_entries = array();

		return true;
	}
}

?>