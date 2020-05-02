<?php

use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = new \App\Outlet;
        $outlet->nama = "Herlan Wash";
        $outlet->alamat = "Jl. Ciapus, No. 33";
        $outlet->no_telp = "08765431234";

        $outlet->save();

        $this->command->info("Seeder berhasil!");
    }
}
