<?php

namespace Martin\CliUsersManagement\Console;

use Lang;
use Backend\Models\User;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UsersListCommand extends Command {

    protected $name = 'users:list';

    protected $description = 'List backend users';

    public function handle() {

        $users = User::select([
            'id', 'first_name', 'last_name', 'login', 'email',
            'last_login', 'is_activated', 'is_superuser'
        ])->get()->toArray();

        $headers = [
            'id',
            Lang::get('backend::lang.user.first_name'),
            Lang::get('backend::lang.user.last_name'),
            Lang::get('backend::lang.user.login'),
            Lang::get('backend::lang.user.email'),
            Lang::get('backend::lang.user.last_login'),
            Lang::get('backend::lang.user.activated'),
            Lang::get('backend::lang.user.superuser'),
        ];

        $this->table($headers, $users);

    }

}

?>