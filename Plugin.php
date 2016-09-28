<?php

    namespace Martin\CliUsersManagement;

    use System\Classes\PluginBase;

    class Plugin extends PluginBase {

        public function pluginDetails() {
            return [
                'name'        => 'martin.cliusersmanagement::lang.plugin.name',
                'description' => 'martin.cliusersmanagement::lang.plugin.description',
                'author'      => 'Martin M.',
                'icon'        => 'icon-users',
                'homepage'    => 'https://octobercms.com/author/Martin'
            ];
        }

        public function register() {
            $this->registerConsoleCommand('users:list'           , 'Martin\CliUsersManagement\Console\UsersListCommand');
            $this->registerConsoleCommand('users:change-password', 'Martin\CliUsersManagement\Console\ChangePasswordCommand');
        }

    }

?>