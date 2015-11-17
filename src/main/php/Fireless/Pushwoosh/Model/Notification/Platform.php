<?php

/**
 * Fireless/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, Fireless SARL (http://Fireless.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Fireless\Pushwoosh\Model\Notification;

/**
 * Class which represents a value for link minimization.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@Fireless.com)
 */
class Platform
{
    /**
     * The value of the platform, this can be equal to :
     *     - 1 : iOS
     *  - 2 : BlackBerry
     *  - 3 : Android
     *  - 4 : Nokia ASHA
     *  - 5 : Windows Phone 7
     *  - 7 : Mac OS X
     *  - 8 : Windows 8
     *  - 9 : Amazon
     *  - 10: Safari
     *
     * @var int
     */
    private $value;

    /**
     * Create a new <code>Platform</code> instance.
     *
     * @param int $value the value of the platform.
     */
    private function __construct($value)
    {
        $this->value = $value;

    }

    /**
     * Get a <code>Platform</code> instance for Amazon.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\Platform the created <code>Platform</code> instance.
     */
    public static function amazon()
    {
        return new Platform(9);

    }

    /**
     * Get a <code>Platform</code> instance for Android.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\Platform the created <code>Platform</code> instance.
     */
    public static function android()
    {
        return new Platform(3);

    }

    /**
     * Get a <code>Platform</code> instance for BlackBerry.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\Platform the created <code>Platform</code> instance.
     */
    public static function blackBerry()
    {
        return new Platform(2);

    }

    /**
     * Get a <code>Platform</code> instance for iOS.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\Platform the created <code>Platform</code> instance.
     */
    public static function iOS()
    {
        return new Platform(1);

    }

    /**
     * Get a <code>Platform</code> instance for Mac OS X.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\Platform the created <code>Platform</code> instance.
     */
    public static function maxOSX()
    {
        return new Platform(7);

    }

    /**
     * Get a <code>Platform</code> instance for Nokia ASHA.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\Platform the created <code>Platform</code> instance.
     */
    public static function nokia()
    {
        return new Platform(4);

    }

    /**
     * Get a <code>Platform</code> instance for Safari.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\Platform the created <code>Platform</code> instance.
     */
    public static function safari()
    {
        return new Platform(10);

    }

    /**
     * Get a <code>Platform</code> instance for Windows Phone 7.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\Platform the created <code>Platform</code> instance.
     */
    public static function windowsPhone7()
    {
        return new Platform(5);

    }

    /**
     * Get a <code>Platform</code> instance for Windows 8.
     *
     * @return \Fireless\Pushwoosh\Model\Notification\Platform the created <code>Platform</code> instance.
     */
    public static function windows8()
    {
        return new Platform(8);

    }

    /**
     * Gets the value of the plateform, this can be equal to :
     *     - 1 : iOS
     *  - 2 : BlackBerry
     *  - 3 : Android
     *  - 4 : Nokia ASHA
     *  - 5 : Windows Phone 7
     *  - 7 : Mac OS X
     *  - 8 : Windows 8
     *  - 9 : Amazon
     *  - 10: Safari
     *
     * @return int the value of the platform.
     */
    public function getValue()
    {
        return $this->value;

    }
}
