<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 初期ユーザ
        DB::table('users')->insert([
            ['username' => 'endo',
            'mail' =>'endo123@gmail.com',
            'password' => bcrypt('endo123')]
        ]);
    }
}
