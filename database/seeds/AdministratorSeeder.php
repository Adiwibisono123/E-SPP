<?php

use Illuminate\Database\Seeder;
use App\User;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $administrator = new User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "admin@gmail.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("rahasia123");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Kendal, jawa Tengah, Indonesia";

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
