<?php

namespace spec\MyCompany;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DateRangeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MyCompany\DateRange');
    }
}
