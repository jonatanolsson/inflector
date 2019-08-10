<?php

declare(strict_types=1);

namespace Doctrine\Inflector\Rules\Swedish;

use Doctrine\Inflector\Rules\Pattern;

final class Uninflected
{
    /**
     * @return Pattern[]
     */
    public static function getSingular() : iterable
    {
        yield from self::getDefault();
    }

    /**
     * @return Pattern[]
     */
    public static function getPlural() : iterable
    {
        yield from self::getDefault();
    }

    /**
     * @return Pattern[]
     */
    private static function getDefault() : iterable
    {
        yield new Pattern('hus');
        yield new Pattern('kar');
        yield new Pattern('träd');
        yield new Pattern('får');
        yield new Pattern('brev');
        yield new Pattern('namn');
        yield new Pattern('nummer');
        yield new Pattern('kön');
    }
}
