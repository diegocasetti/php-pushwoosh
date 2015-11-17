<?php

/**
 * Fireless/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, Fireless SARL (http://Fireless.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Fireless\Pushwoosh\Model\Notification;

/**
 * Class which represents specific Pushwoosh notification informations for BlackBerry.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@Fireless.com)
 */
class BlackBerry
{
    private $header;

    /**
     * Utility function used to create a new BlackBerry instance.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\BlackBerry the new created instance.
     */
    public static function create()
    {
        return new BlackBerry();

    }

    public function getHeader()
    {
        return $this->header;

    }

    public function setHeader($header)
    {
        $this->header = $header;

        return $this;
    }

    /**
     * Creates a JSON representation of this request.
     *
     * @return array a PHP array which can be passed to the 'json_encode' PHP method.
     */
    public function toJSON()
    {
        $json = array();

        isset($this->header) ? $json['blackberry_header'] = $this->header : false;

        return $json;

    }
}
