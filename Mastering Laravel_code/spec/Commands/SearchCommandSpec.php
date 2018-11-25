<?php

namespace spec\MyCompany\Commands;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SearchCommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('','');
        $this->shouldHaveType('MyCompany\Commands\SearchCommand');
    }
}
