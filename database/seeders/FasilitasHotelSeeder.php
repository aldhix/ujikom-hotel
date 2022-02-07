<?php

namespace Database\Seeders;

use App\Models\FasilitasHotel;
use Illuminate\Database\Seeder;

class FasilitasHotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Kolam Renang',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'Mauris posuere massa vel quam fringilla auctor. Donec tristique bibendum urna, quis ultricies tortor convallis vitae. Nullam in volutpat urna. Vestibulum varius quam eu ligula accumsan molestie. Quisque mauris nisl, porttitor rhoncus rutrum eu, tincidunt vitae sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris est lacus, feugiat vel mollis non, euismod nec justo.',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Restoran',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'Mauris posuere massa vel quam fringilla auctor. Donec tristique bibendum urna, quis ultricies tortor convallis vitae. Nullam in volutpat urna. Vestibulum varius quam eu ligula accumsan molestie. Quisque mauris nisl, porttitor rhoncus rutrum eu, tincidunt vitae sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris est lacus, feugiat vel mollis non, euismod nec justo.',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Parkir Luas',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'Mauris posuere massa vel quam fringilla auctor. Donec tristique bibendum urna, quis ultricies tortor convallis vitae. Nullam in volutpat urna. Vestibulum varius quam eu ligula accumsan molestie. Quisque mauris nisl, porttitor rhoncus rutrum eu, tincidunt vitae sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris est lacus, feugiat vel mollis non, euismod nec justo.',
        ]);

        FasilitasHotel::create([
            'nama_fasilitas_hotel'=>'Sarapan Pagi Gratis',
            'foto_fasilitas_hotel'=>null,
            'deskripsi_fasilitas_hotel'=>'Mauris posuere massa vel quam fringilla auctor. Donec tristique bibendum urna, quis ultricies tortor convallis vitae. Nullam in volutpat urna. Vestibulum varius quam eu ligula accumsan molestie. Quisque mauris nisl, porttitor rhoncus rutrum eu, tincidunt vitae sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris est lacus, feugiat vel mollis non, euismod nec justo.',
        ]);
    }
}
