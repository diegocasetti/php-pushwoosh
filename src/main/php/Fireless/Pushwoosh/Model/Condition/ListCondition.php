<?php

/**
 * Fireless/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, Fireless SARL (http://Fireless.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Fireless\Pushwoosh\Model\Condition;

/**
 * Class which represents a list condition.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@Fireless.com)
 */
class ListCondition extends AbstractCondition
{
    /**
     * Create a new <code>ListCondition</code> instance.
     */
    private function __construct($tagName)
    {
        $this->tagName = $tagName;
    }

    /**
     * Create a new <code>ListCondition</code> instance.
     *
     * @param string $tagName the name of the tag.
     *
     * @return \Fireless\Pushwoosh\Model\Condition\ListCondition the created list condition.
     */
    public static function create($tagName)
    {
        return new ListCondition($tagName);
    }

    /**
     * Apply an IN operator to a specified operand value.
     *
     * @param string[] $values the string values used to build in IN value set.
     *
     * @return \Fireless\Pushwoosh\Model\Condition\ListCondition this instance.
     */
    public function in(array $values)
    {
        $this->operator = 'IN';
        $this->operand = $values;

        return $this;

    }
}
