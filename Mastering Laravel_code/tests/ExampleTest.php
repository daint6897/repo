<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
    	$response = $this->call('GET', '/');
		$this->assertEquals(200, $response->getStatusCode());
	}
    public function testReserveRoomExample()
    {
        $reservation = new \MyCompany\Accommodation\Reservation;
        $user = \MyCompany\User::find(1);
        $rooms = [\MyCompany\Accommodation\Room::find(1),\MyCompany\Accommodation\Room::find(2)];
        $reservationResult = $reservation->createNew($user, '2015-10-01','2015-10-10', $rooms,"98234");

        $this->assertInstanceOf('\MyCompany\Accommodation\Reservation',$reservationResult);
        $this->assertEquals('2015-10-01',$reservationResult->date_start);
        $this->assertEquals(2,count($reservationResult->rooms));


    }
}
