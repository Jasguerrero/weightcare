<?php

class DietAllTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$response = $this->call('GET', '/diet/');

		$this->assertEquals(200, $response->getStatusCode());
	}

}