<?php
namespace Akeneo\Badge;

class Badge
{
    const COLOR_OK      = 'green';
    const COLOR_KO      = 'red';
    const COLOR_UNKNOWN = 'grey';

    /** @var string CE or EE */
    protected $edition;

    /** @var string */
    protected $version;

    /** @var bool|null */
    protected $compatible;

    /**
     * @param $edition
     * @param $version
     * @param $isCompatible
     */
    public function __construct($edition, $version, $isCompatible)
    {
        $this->edition = $edition;
        $this->version = $version;
        if (null !== $isCompatible) {
            $this->compatible = (bool) $isCompatible;
        }
    }

    /**
     * @return string
     */
    public function getEdition()
    {
        return 'CE' == $this->edition ? 'PIM Community' : 'PIM Enterprise';
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return boolean
     */
    public function isCompatible()
    {
        return $this->compatible;
    }

    public function getColor()
    {
        if (null === $this->isCompatible()) {
            return static::COLOR_UNKNOWN;
        }

        return $this->isCompatible() ? static::COLOR_OK : static::COLOR_KO;
    }
}
