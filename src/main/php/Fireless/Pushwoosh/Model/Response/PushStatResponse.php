<?php

/**
 * Fireless/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, Fireless SARL (http://Fireless.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Fireless\Pushwoosh\Model\Response;

/**
 * Class which represents Pushwoosh '/pushStat' response.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@Fireless.com)
 */
class PushStatResponse extends AbstractResponse
{
    /**
     * Utility function used to create a new instance from a JSON string.
     *
     * @param array $json a PHP array which contains the result of a 'json_decode' execution.
     *
     * @return \Fireless\Pushwoosh\Model\Response\PushStatResponse the resulting instance.
     */
    public static function create(array $json)
    {
        $pushStatResponse = new PushStatResponse();
        $pushStatResponse->setStatusCode($json['status_code']);
        $pushStatResponse->setStatusMessage($json['status_message']);

        return $pushStatResponse;
    }
}
