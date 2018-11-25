<?php

namespace spec\MyCompany\Commands;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use MyCompany\User;

class ReserveRoomCommandSpec extends ObjectBehavior
{
    function it_is_initializable(User $user,$start_date,$end_date,$rooms)
    {

        $this->beConstructedWith($user,$start_date,$end_date,$rooms);

        $this->shouldHaveType('MyCompany\Commands\ReserveRoomCommand');
    }
}
