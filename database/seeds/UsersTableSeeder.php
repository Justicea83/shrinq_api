<?php

use App\User;
use Illuminate\Database\QueryException;
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
        $users = [
            [
                'name' => 'Justice Arthur',
                'email' => 'Justicea83@gmail.com',
                'email_verified_at' => now()->toDateTimeString(),
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Mike Arthur',
                'email' => 'mike83@gmail.com',
                'email_verified_at' => now()->toDateTimeString(),
                'password' => bcrypt('password')
            ]
        ];

        foreach ($users as $user){
            try {
                User::query()->create($user);
            }catch (QueryException $e){}
        }
    }
}
