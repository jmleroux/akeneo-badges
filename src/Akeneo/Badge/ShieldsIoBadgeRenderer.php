<?php
namespace Akeneo\Badge;

use PUGX\Poser\Image;

class ShieldsIoBadgeRenderer implements BadgeRendererInterface
{
    const SHIELDS_IO_URL = 'https://img.shields.io/badge/';

    public function render(Badge $badge, $format = 'flat-square')
    {
        $imageName = sprintf('%s-%s-%s.svg', $badge->getEdition(), $badge->getVersion(), $badge->getColor());
        $shieldsUrl = sprintf('%s/%s?style=%s', static::SHIELDS_IO_URL, $imageName, $format);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_URL, $shieldsUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $image = Image::createFromString($result, 'svg');

        return $image;
    }
}
