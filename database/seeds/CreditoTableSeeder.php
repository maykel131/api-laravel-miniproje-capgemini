<?php

use Illuminate\Database\Seeder;
use App\Models\Credito;
use App\User;

class CreditoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        User::create([
            'name'          => 'Maykel Trejo',
            'email'          => 'trejomaykel@gmail.com',
            'password'   => bcrypt(123456),
        ]);

        Credito::create([
            'id_user'          => 1,
            'saldo'          => 131200
        ]);
        
    }
}
