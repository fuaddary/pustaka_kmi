<?php

use Illuminate\Database\Seeder;

class BukusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku::insert([
            [
              'id'  			=> 1,
              'judul'  			=> 'AL-QURAN TERJEMAH AL-HAKIM Plus BLOK DOA & TAFSIR',
              'isbn'			=> '9786026904102',
              'pengarang' 		=> 'Tim Penerbit',
              'penerbit'		=> 'Gema Insani',
              'tahun_terbit'	=> 2016,
              'jumlah_buku'		=> 3,
              'deskripsi'		=> 'Alquran dengan terjemahan disertai blok Doa dan Tafsir',
              'lokasi'			=> 'Rak Ikhwan',
              'cover'			=> 'Al-Hakim.jpg',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ]
        ]);
    }
}
