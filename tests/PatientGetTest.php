<?php

class PatientGetTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/patient');

		$this->assertEquals(200, $response->getStatusCode());
	}

}