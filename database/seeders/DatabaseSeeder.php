<?php

namespace Database\Seeders;


use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(BandeiraSeeder::class);
        $this->call(TipoDeContaSeeder::class);
        User::insert([
            [
                'name' => 'Pedro Teles',
                'email' => 'pedrohenriqueteles732@gmail.com',
                'password' => Hash::make('msah5324')
            ],
            [
                'name'=>'admin',
                'email'=>'admin@admin.com',
                'password'=> Hash::make('admin')
            ]
        ]);
    }
}
