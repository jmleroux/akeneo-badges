<?php
namespace spec\Akeneo\Badge;

use Akeneo\Badge\Badge;
use PhpSpec\ObjectBehavior;

class BadgeFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldImplement('Akeneo\Badge\BadgeFactoryInterface');
    }

    function it_creates_a_badge_without_compatibilty()
    {
        $this->createFromString('CE-1.5')->shouldBeAnInstanceOf('Akeneo\Badge\Badge');
    }

    function it_creates_a_badge_ok()
    {
        $this->createFromString('CE-1.5-ok')->shouldBeAnInstanceOf('Akeneo\Badge\Badge');
    }

    function it_creates_a_badge_ko()
    {
        $this->createFromString('CE-1.5-ko')->shouldBeAnInstanceOf('Akeneo\Badge\Badge');
    }

    function it_does_not_create_badge_for_unknown_edition()
    {
        $this->shouldThrow('\InvalidArgumentException')->duringcreateFromString('DE-1.5');
    }

    function it_creates_a_badge_for_unknown_version()
    {
        $this->createFromString('CE-foo')->shouldBeAnInstanceOf('Akeneo\Badge\Badge');
    }
}
