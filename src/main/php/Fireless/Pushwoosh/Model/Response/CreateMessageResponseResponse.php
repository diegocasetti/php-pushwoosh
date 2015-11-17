<?php

/**
 * Fireless/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, Fireless SARL (http://Fireless.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Fireless\Pushwoosh\Model\Response;

/**
 * Class which represents Pushwoosh '/createMessage' response response.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@Fireless.com)
 */
class CreateMessageResponseResponse
{
    /**
     * The Pushwoosh messages sent in response to a Create Message request.
     *
     * @var string[]
     */
    private $messages;

    /**
     * Gets the Pushwoosh messages sent in response to a Create Message request.
     *
     * @return string[]
     */
    public function getMessages()
    {
        return $this->messages;

    }

    /**
     * Sets the Pushwoosh messages sent in response to a Create Message request.
     *
     * @param string[] $messages the Pushwoosh messages sent in response to a Create Message Request.
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

    }
}
