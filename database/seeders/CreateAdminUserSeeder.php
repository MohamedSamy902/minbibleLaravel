<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Mohamed Samy',
            'email' => 'admin@app.com',
            'password' => bcrypt('123456'),
            'roles_name' => 'admin',
            'mobile' => 01150100104,
        ]);

        $user = Language::create([
            'name' => 'English',
            'short_name' => 'en',
            'direction' => 'ltr',
        ]);

        $Language = Language::create([
            'name' => 'Arabic',
            'short_name' => 'ar',
            'direction' => 'rtl',
        ]);

        $Language = Language::create([
            'name' => 'Frensh',
            'short_name' => 'fr',
            'direction' => 'ltr',
        ]);
    }
}
