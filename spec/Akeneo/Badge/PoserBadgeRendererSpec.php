<?php
namespace spec\Akeneo\Badge;

use Akeneo\Badge\Badge;
use PhpSpec\ObjectBehavior;

class PoserBadgeRendererSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldImplement('Akeneo\Badge\BadgeRendererInterface');
    }

    function it_renders_a_badge_with_default_format()
    {
        $badge = new Badge('CE', '1.5', true);
        $this->render($badge)->shouldBeAnInstanceOf('PUGX\Poser\Image');
    }

    function it_renders_a_badge_with_various_formats()
    {
        $badge = new Badge('CE', '1.5', true);
        $this->render($badge, 'flat')->shouldBeAnInstanceOf('PUGX\Poser\Image');
        $this->render($badge, 'flat-square')->shouldBeAnInstanceOf('PUGX\Poser\Image');
        $this->render($badge, 'plastic')->shouldBeAnInstanceOf('PUGX\Poser\Image');
    }

    function it_does_not_render_bad_format()
    {
        $badge = new Badge('CE', '1.5', true);
        $this->shouldThrow('\InvalidArgumentException')->duringRender($badge, 'foo');
    }
}
