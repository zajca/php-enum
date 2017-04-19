<?php
/**
 * @author  Martin Zajíc <zajca@zajca.cz>
 */
namespace MabeEnum;


/**
 * Class to implement enumerations for PHP 5 (without SplEnum)
 *
 * @link      http://github.com/marc-mabe/php-enum for the canonical source repository
 * @copyright Copyright (c) 2015 Marc Bennewitz
 * @license   http://github.com/marc-mabe/php-enum/blob/master/LICENSE.txt New BSD License
 */
interface EnumInterface
{
    /**
     * Get the value of the enumerator
     *
     * @return null|bool|int|float|string
     */
    public function getValue();

    /**
     * Get the name of the enumerator
     *
     * @return string
     */
    public function getName();

    /**
     * Get the ordinal number of the enumerator
     *
     * @return int
     */
    public function getOrdinal();

    /**
     * Compare this enumerator against another and check if it's the same.
     *
     * @param mixed $enumerator
     *
     * @return bool
     */
    public function is($enumerator);
}