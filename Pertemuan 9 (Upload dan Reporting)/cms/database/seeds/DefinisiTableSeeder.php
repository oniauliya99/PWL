<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DefinisiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('definisis')->insert([
           //data 1
            // 'konten' => 'Mikrotik merupakan sistem operasi dan perangkat lunak yang bisa digunakan untuk menjadikan sebuah PC atau komputer untuk router network yang handal. Didalam routernya tadi, PC juga bisa mencangkup banyak fitur unggulan seperti IP Network jaringan wireless',
            // 'judul' => 'Definisi Mikrotik',
            // 'link' => ('indexx/1')
           
            //data 2
            // 'konten' => 'Sejarah Mikrotik dimulai pada tahun 1996, setelah John dan Arnis memulai membentuk Mikrotik dengan sistem Linux dan MS DOS. Mereka mengkombinasi kedua sofware tersebut dengan teknologi Wireless LAN (W-LAN) Aeronet yang memiliki kecepatan hingga 2Mbps di M',
            // 'judul' => 'Sejarah',
            // 'link' => ('sejarahview/2')
           
            //data 3
            // 'konten' => 'Setelah paham apa itu mikrotik, Anda pasti penasaran apa fungsi mikrotik sehingga sangat banyak dipakai dewasa ini. Fungsi perangkat ini di jaringan sangatlah penting. Berikut 6 fungsi utama mikrotik yang harus Anda ketahui: 1. Fungsi utama mikrotik',
            // 'judul' => 'Fungsi',
            // 'link' => ('fungsi/3')
            
            //data 3
            // 'konten' => 'Setelah paham apa itu mikrotik, Anda pasti penasaran apa fungsi mikrotik sehingga sangat banyak dipakai dewasa ini. Fungsi perangkat ini di jaringan sangatlah penting. Berikut 6 fungsi utama mikrotik yang harus Anda ketahui: 1. Fungsi utama mikrotik',
            // 'judul' => 'Fungsi',
            // 'link' => ('winbox/4')
            
            //data 4
            'konten' => 'Winbox adalah utility yang digunakan untuk konektivitas dan konfigurasi MikroTik menggunakan MAC Address atau protokol IP. Dengan winbox kita dapat melakukan konfigurasi MikroTik RouterOS dan RouterBoard menggunakan mode GUI dengan cepat dan sederhana',
            'judul' => 'Winbox',
            'link' => ('winbox/4')
        ]);
    }
}
