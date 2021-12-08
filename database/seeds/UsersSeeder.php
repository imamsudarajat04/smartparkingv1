<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::insert([
            'name' => 'Admin',
            'email' => 'admin@parking.com',
            'password' => bcrypt('admin'),
            'phone' => '083183462191',
            'dateBirth' => '2001-08-04',
            'gender' => 'Male',
            'address' => 'Jl. Raya Cisitu',
            'role' => 'Admin',
            'remember_token' => Str::random(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
