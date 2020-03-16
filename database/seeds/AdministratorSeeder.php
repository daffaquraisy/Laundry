<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "Daffa Quraisy";
        $administrator->name = "Daffa";
        $administrator->email = "daffaquraisy@gmail.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = Hash::make('12345678');

        $administrator->save();

        $this->command->info("User Admin berhasil di insert");
    }
}
