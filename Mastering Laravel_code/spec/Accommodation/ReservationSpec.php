<?php

namespace spec\MyCompany\Accommodation;

use Doctrine\Instantiator\Exception\InvalidArgumentException;
use MyCompany\Accommodation\Room;
use MyCompany\User;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReservationSpec extends ObjectBehavior
{
    function it_creates_a_reservation(User $user, $start_date, $end_date, Room $room, $reservation_number)
    {
        $reservation_number="ABC123";
        $rooms_array= [$room];
        $start_date = '2015-06-03';
        $end_date = '2015-06-04';
        $this->createNew($user,$start_date,$end_date,$rooms_array,$reservation_number)->shouldBe($this);
        $this->createNew($user,$start_date,$end_date,$rooms_array,$reservation_number)->shouldBeObject();
        $this->createNew($user,$start_date,$end_date,$rooms_array,$reservation_number)->shouldNotBeString();
    }

    function it_cannot_be_made_for_more_than_fifteen_days(User $user, $start_date, $end_date, Room $room, $reservation_number)
    {
        $reservation_number="ABC123";
        $start_date = '2015-06-01';
        $end_date = '2015-07-30';
        $rooms = [$room];
        $this->shouldThrow('\InvalidArgumentException')->duringCreateNew($user,$start_date,$end_date,$rooms,$reservation_number);

    }


    function it_gives_an_error_message_when_sent_wrong_parameters(User $user,
                                                                     $start_date, $end_date, Room $room,$reservation_number)
    {
        $reservation_number="ABC123";
        $start_date = '2015-06-03';
        $end_date = '2015-06-04';
        $this->shouldThrow('\InvalidArgumentException')->duringCreateNew( $user, $start_date, $end_date, $room,$reservation_number);
    }

    function its_start_date_must_come_before_the_end_date(User $user,
                                                                  $start_date, $end_date, Room $room, $reservation_number)
    {
        $reservation_number="ABC123";
        $rooms = [$room];
        $start_date = '2015-06-03';
        $end_date = '2015-06-03';
        $this->shouldThrow('\InvalidArgumentException')->duringCreateNew($user, $start_date, $end_date, $rooms,$reservation_number);
    }

    function it_cannot_contain_than_four_rooms(User $user, $start_date, $end_date, Room $room1, Room $room2, Room $room3, Room $room4, Room $room5, $reservation_number)
    {
        $reservation_number="ABC123";
        $start_date = '2015-06-03';
        $end_date = '2015-06-06';
        $rooms = [$room1, $room2, $room3, $room4, $room5];
        $this->shouldThrow('\InvalidArgumentException')->duringCreateNew($user,$start_date,$end_date,$rooms,$reservation_number);
    }

}
