<?php

/**
 * Global helpers file with misc functions.
 */

if (!function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     *
     * @return \Creativeorange\Gravatar\Gravatar|\Illuminate\Foundation\Application|mixed
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (!function_exists('javascript')) {
    /**
     * Access the javascript helper.
     */
    function javascript($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('javascript');
        }

        if (is_array($key)) {
            return app('javascript')->put($key);
        }

        return app('javascript')->get($key, $default);
    }
}