<?php

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2017 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace felicity\redirect;

/**
 * Class Migrate
 */
class Redirect
{
    /**
     * Redirects to a new page
     * @param string $location
     * @param int $code
     */
    public static function to(string $location, int $code = 301)
    {
        ob_clean();
        header("Location: $location", true, $code);
        die();
    }

    /**
     * Redirects to a new page
     * @param string $location
     * @param int $code
     */
    public function redirectTo(string $location, int $code = 301)
    {
        self::to($location, $code);
    }
}
