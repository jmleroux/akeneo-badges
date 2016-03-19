<?php

namespace spec\JmLeroux\Components\Core;

use JmLeroux\Components\Core\Version;
use PhpSpec\ObjectBehavior;

class VersionSpec extends ObjectBehavior
{
    function it_should_return_version()
    {
        $this->getVersion()->shouldReturn(Version::VERSION);
    }
}
