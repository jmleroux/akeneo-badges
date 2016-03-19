<?php
namespace Akeneo\Badge;

use PUGX\Poser\Image;

interface BadgeRendererInterface
{
    /**
     * @param Badge  $badge
     * @param string $format
     *
     * @return Image
     */
    public function render(Badge $badge, $format = 'flat-square');
}
