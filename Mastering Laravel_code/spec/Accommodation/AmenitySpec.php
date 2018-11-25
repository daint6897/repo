<?php

namespace spec\MyCompany\Accommodation;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AmenitySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MyCompany\Accommodation\Amenity');
    }
}
