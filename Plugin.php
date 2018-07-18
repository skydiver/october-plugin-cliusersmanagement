<?php

namespace Martin\CliUsersManagement;

use System\Classes\PluginBase;
use Martin\CliUsersManagement\Console\UsersListCommand;
use Martin\CliUsersManagement\Console\ChangePasswordCommand;

class Plugin extends PluginBase {

    public function pluginDetails() {
        return [
            'name'        => 'martin.cliusersmanagement::lang.plugin.name',
            'description' => 'martin.cliusersmanagement::lang.plugin.description',
            'author'      => 'Martín M.',
            'icon'        => 'icon-users',
            'homepage'    => 'https://github.com/skydiver/'
        ];
    }

    public function register() {
        $this->registerConsoleCommand('users:list', UsersListCommand::class);
        $this->registerConsoleCommand('users:change-password', ChangePasswordCommand::class);
    }

}

?>