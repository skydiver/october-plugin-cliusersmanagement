<?php

namespace Martin\CliUsersManagement\Console;

use Backend\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ChangePasswordCommand extends Command {

    protected $name = 'users:change-password';

    protected $description = 'Change backend user password';

    public function handle() {

        $login = $this->argument('login');
        $user  = User::where('login', $login)->first();

        if (!$user) {
            $this->error('No user found with login: ' . $login);
        }

        $password = $this->secret('Type new password');

        if ($this->confirm('Do you wish to continue? [yes|no]')) {

            $user->password = $password;
            $user->password_confirmation = $password;
            $user->save();

            $this->comment('Password successfully changed');

        } else {
            $this->comment('Password not changed');
        }

    }

    protected function getArguments() {
        return [
            ['login', InputArgument::REQUIRED, 'Username to change password'],
        ];
    }

}

?>