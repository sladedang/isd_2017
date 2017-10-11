<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Billy', 'email' => 'billy@gmail.com', 'password' => '123456', 'dob' => '1995-12-03' ,'phone' => '121324324', 'gender' => 1, 'address' => 'Nguyen Trai Thanh Xuan Ha Noi'],
            ['id' => 2, 'name' => 'Slade', 'email' => 'slade@gmail.com', 'password' => '123456', 'dob' => '1995-12-03' ,'phone' => '121324324', 'gender' => 1, 'address' => 'Nguyen Trai Thanh Xuan Ha Noi'],
            ['id' => 3, 'name' => 'Grace', 'email' => 'grace@gmail.com', 'password' => '123456', 'dob' => '1995-12-03' ,'phone' => '121324324', 'gender' => 1, 'address' => 'Nguyen Trai Thanh Xuan Ha Noi'],
            ['id' => 4, 'name' => 'Mei', 'email' => 'mei@gmail.com', 'password' => '123456', 'dob' => '1995-12-03' ,'phone' => '121324324', 'gender' => 1, 'address' => 'Nguyen Trai Thanh Xuan Ha Noi'],
            ['id' => 5, 'name' => 'Franco', 'email' => 'franco@gmail.com', 'password' => '123456', 'dob' => '1995-12-03' ,'phone' => '121324324', 'gender' => 1, 'address' => 'Nguyen Trai Thanh Xuan Ha Noi'],
            ['id' => 6, 'name' => 'Kate', 'email' => 'kate@gmail.com', 'password' => '123456', 'dob' => '1995-12-03' ,'phone' => '121324324', 'gender' => 1, 'address' => 'Nguyen Trai Thanh Xuan Ha Noi'],
        ]);
    }
}
