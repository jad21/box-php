<?php

namespace Box\Module;

use Box\Application as App;

interface ModuleInterface
{
    /**
     * Main bootstrap method.
     *
     * @param App $app
     */
    public function main(App $app);

    /**
     * Gets a option value.
     *
     * @param  mixed $key
     * @param  mixed $default
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Gets a config value.
     *
     * @param  mixed $key
     * @param  mixed $default
     * @return mixed
     */
    public function config($key = null, $default = null);
}
