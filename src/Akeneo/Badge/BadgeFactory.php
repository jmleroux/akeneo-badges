<?php
namespace Akeneo\Badge;

class BadgeFactory implements BadgeFactoryInterface
{
    public function createFromString($imageName)
    {
        $pattern = '/^(CE|EE)-([0-9a-z.-]+?)(?:-(ok|ko))?$/';

        if (!preg_match($pattern, $imageName, $matches)) {
            throw new \InvalidArgumentException('Invalid image name');
        }

        $edition = $matches[1];
        $version = $matches[2];

        $isCompatible = true;

        if (isset($matches[3])) {
            if ('ok' == $matches[3]) {
                $isCompatible = true;
            } else {
                $isCompatible = false;
            }
        }

        if (!preg_match('/^\d\.\d(\.\d+)?$/', $version)) {
            $version = 'unknown';
            $isCompatible = null;
        }

        return new Badge($edition, $version, $isCompatible);
    }
}
