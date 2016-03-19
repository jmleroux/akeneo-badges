<?php
namespace spec\Akeneo\Badge;

use Akeneo\Badge\Badge;
use PhpSpec\ObjectBehavior;

class BadgeSpec extends ObjectBehavior
{
    function it_can_get_unknown_color()
    {
        $this->beConstructedWith('CE', '1.5', null);
        $this->getColor()->shouldReturn(Badge::COLOR_UNKNOWN);
    }

    function it_can_get_ok_color()
    {
        $this->beConstructedWith('CE', '1.5', true);
        $this->getColor()->shouldReturn(Badge::COLOR_OK);
    }

    function it_can_get_ko_color()
    {
        $this->beConstructedWith('CE', '1.5', false);
        $this->getColor()->shouldReturn(Badge::COLOR_KO);
    }
}
