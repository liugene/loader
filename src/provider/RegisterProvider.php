<?php

namespace linkphp\loader\provider;

use linkphp\event\EventDefinition;
use linkphp\event\EventServerProvider;
use linkphp\loader\Loader;

class RegisterProvider implements  EventServerProvider
{

    public function update(EventDefinition $definition)
    {

        $classMap = [
            'Db'    =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Db.php',
            'Console'    =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Console.php',
            'Component'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Component.php',
            'Definition'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Definition.php',
            'Event'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Event.php',
            'HttpRequest'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/HttpRequest.php',
            'Config'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Config.php',
            'Router'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Router.php',
            'Error'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Error.php',
            'Session'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Session.php',
            'Validator'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Validator.php',
            'Env'  =>   ROOT_PATH . 'vendor/linkphp/framework/src/facade/Env.php',
        ];

        Loader::addClassMap($classMap);
    }

}