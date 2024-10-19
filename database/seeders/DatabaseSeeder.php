<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $role_user = Role::create([
            'name' => 'Пользователь',
            'code' => 'user',
        ]);

        $role_admin = Role::create([
            'name' => 'Администратор',
            'code' => 'admin',
        ]);
        User::create([
           'surname' => 'Евсеев',
           'name' => 'Дмитрий',
           'patronymic' => 'Витальевич',
            'sex' => 1,
            'birthday' => '2005-11-04',
            'login' => 'krofpoi',
            'email' => 'krofpoi@gmail.com',
            'password' => 'krofpoi',
            'api_token' => null,
            'role_id' => $role_admin->id,
        ]);
        User::create([
            'surname' => 'Мотов',
            'name' => 'Алибала',
            'patronymic' => 'Эльманович',
            'sex' => 1,
            'birthday' => '2005-01-27',
            'login' => 'noway',
            'email' => 'unilajar@gmail.com',
            'password' => 'noway',
            'api_token' => null,
            'role_id' => $role_admin->id,
        ]);
    }
}
