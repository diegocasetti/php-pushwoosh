<?php

/**
 * Fireless/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, Fireless SARL (http://Fireless.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Fireless\Pushwoosh\Model\Condition;

/**
 * Class which represents a string condition.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@Fireless.com)
 */
class StringCondition extends AbstractCondition
{
    /**
     * Create a new <code>StringCondition</code> instance.
     */
    private function __construct($tagName)
    {
        $this->tagName = $tagName;
    }

    /**
     * Create a new <code>StringCondition</code> instance.
     *
     * @param string $tagName the name of the tag.
     *
     * @return \Fireless\Pushwoosh\Model\Condition\StringCondition the created string condition.
     */
    public static function create($tagName)
    {
        return new StringCondition($tagName);
    }

    /**
     * Apply an equals operator to a specified operand value.
     *
     * @param string $value the string value to compare with.
     *
     * @return \Fireless\Pushwoosh\Model\Condition\StringCondition this instance.
     */
    public function eq($value)
    {
        $this->operator = 'EQ';
        $this->operand = $value;

        return $this;

    }
}
