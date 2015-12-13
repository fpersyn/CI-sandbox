<?php

	require_once('../../vendor/simpletest/simpletest/autorun.php');
	require_once('../classes/guestbook.php');

	class TestGuestbook extends UnitTestCase {

		public function TestViewGuestbookWithEntries()
		{
			$guestbook = new Guestbook();

			// Add new records first
			$guestbook->add("Bob", "Hi I'm Bob.");
			$guestbook->add("Tom", "Hi I'm Tom.");
			$entries = $guestbook->viewAll();
			$count_is_greater_than_zero = (count($entries) > 0);
			
			$this->assertTrue($count_is_greater_than_zero); // fail if $ = false
			$this->assertIsA($entries, 'array'); // fail if $ is not of the type 'array'

			foreach ($entries as $entry)
			{
				$this->assertIsA($entry, 'array'); // fail if $ is not of the type 'array'
				$this->assertTrue(isset($entry['name'])); // fail if  false
				$this->assertTrue(isset($entry['message'])); // fail if false
			}

		}

		public function TestViewGuestbookWithNoEntries()
		{
			$guestbook = new Guestbook();

			// Delete all entries first so we know it's an empty table
			$guestbook->deleteAll();
			$entries = $guestbook->viewAll();
			$this->assertEqual($entries, array()); // fail if $ is not an empty array
		}
	}
?>