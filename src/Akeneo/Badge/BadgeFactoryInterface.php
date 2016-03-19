<?php
namespace Akeneo\Badge;

interface BadgeFactoryInterface
{
    /**
     * @param string $imageName
     * 
     * @return Badge
     */
    public function createFromString($imageName);
}
