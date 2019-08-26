<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Gabriel Scaranello',
          'email' => 'gabrieljscaranello@gmail.com',
          'password' => Hash::make('@S3v3n'),
          'role' => 'admin',
          'avatar' => 'https://ifpreventos.com.br/uploads/avatar/A-1555177442.jpg',
        ]);

        User::create([
          'name' => 'Renato Guerreiro',
          'email' => 'renato.guerreiro@ifpr.edu.br',
          'password' => Hash::make('spaceappsassis2019'),
          'role' => 'admin',
        ]);
    }
}
