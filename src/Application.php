<?php

namespace Box;

use Box\Module\ModuleManager;

/**
 *      Class container
 *    @author Jose Angel Delgado <esojangel@gmail.com>
 *    @credits Pagekit Team
 */
class Application extends Container
{
    /**
     * Constructor.
     *
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        parent::__construct($values);

        $this['module'] = function () {
            return new ModuleManager($this);
         };
    }
    public function run() {}
    /**
     * Checks if running in the console.
     *
     * @return bool
     */
    public function inConsole()
    {
        return PHP_SAPI == 'cli';
    }
}