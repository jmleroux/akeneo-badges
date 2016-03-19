<?php
namespace Akeneo\Badge;

use PUGX\Poser\Poser;
use PUGX\Poser\Render\SvgFlatRender;
use PUGX\Poser\Render\SvgFlatSquareRender;
use PUGX\Poser\Render\SvgRender;

class PoserBadgeRenderer implements BadgeRendererInterface
{
    public function render(Badge $badge, $format = 'flat-square')
    {
        $poser = new Poser([
            new SvgRender(),
            new SvgFlatRender(),
            new SvgFlatSquareRender(),
        ]);
        $image = $poser->generate($badge->getEdition(), $badge->getVersion(), $badge->getColor(), $format);

        return $image;
    }
}
