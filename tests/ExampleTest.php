<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		//Doctor Get
		$response = $this->call('GET', '/doctor');

		$this->assertEquals(200, $response->getStatusCode());
	}

}
