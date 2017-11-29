<?php

/**
 * @author TJ Draper <tj@buzzingpixel.com>
 * @copyright 2017 BuzzingPixel, LLC
 * @license Apache-2.0
 */

namespace felicity\redirect;

/**
 * Class Bootstrap
 */
class Bootstrap
{
    public function run()
    {
        if (! class_exists('\felicity\twig\Twig')) {
            return;
        }

        \felicity\twig\Twig::get()->addFunction(
            new \Twig_function(
                'redirect',
                function (string $location, int $code = 301) {
                    Redirect::to($location, $code);
                }
            )
        );
    }
}
