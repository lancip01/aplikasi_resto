<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'nama_menu' => 'nasi goreng',
            'kategori_id' => '1',
            'harga' => '12345'
        ]);
    }
}
