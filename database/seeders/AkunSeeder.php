<?php

namespace Database\Seeders;


use App\Models\AkunUser;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AkunUser::create([
            'username' => 'admin',
            'password' => 'admin',
            'level' => '1'
        ]);
    }
}
