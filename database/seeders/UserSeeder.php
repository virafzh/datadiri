<?php

namespace Database\Seeders;

use App\Models\UserModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $akuns = [
            [
                'username' => 'admin',
                'password' => Hash::make(123456),
            ],
            ];
            foreach($akuns as $akun){
                UserModel::create($akun);
            }
    }
}
