<?php

use App\Dosen;
use App\Hobi;
use App\Mahasiswa;
use App\Wali;
use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // menghapus semua sample data
        DB::table('dosens')->delete();
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();
        // membuat data dosen
        $dosen = Dosen::create([
            'nama' => 'Abdul MUsthafa',
            'nipd' => '1234567890',
        ]);
        $this->command->info('Data Dosen Berhasil dibuat');

        // membuat data mahasiswa
        $mamat = Mahasiswa::create([
            'nama' => 'Mamat Karbit',
            'nim' => '1010101',
            'id_dosen' => $dosen->id,
        ]);
        $dadang = Mahasiswa::create([
            'nama' => 'Dadang Peloy',
            'nim' => '1010102',
            'id_dosen' => $dosen->id,
        ]);
        $feri = Mahasiswa::create([
            'nama' => 'Feri Ambyar Supriadi',
            'nim' => '1010103',
            'id_dosen' => $dosen->id,
        ]);
        $this->command->info('Data Mahasiswa Berhasil dibuat');

        // Membuat data Wali
        $ahmad = Wali::create([
            'nama' => 'Ahmad',
            'id_mahasiswa' => $mamat->id,
        ]);
        $dudung = Wali::create([
            'nama' => 'Dudung',
            'id_mahasiswa' => $dadang->id,
        ]);
        $basit = Wali::create([
            'nama' => 'Basit',
            'id_mahasiswa' => $feri->id,
        ]);
        $this->command->info('Data Wali Berhasil dibuat');

        // Membuat data Hobi
        $mancing = Hobi::create([
            'hobi' => 'Mancing Keributan',
        ]);
        $gaming = Hobi::create([
            'hobi' => 'game Mobile',
        ]);
        $mengaji = Hobi::create([
            'hobi' => 'Mengaji Al Quran',
        ]);

        // menampilkan Hobi ke mahasiswa

        $mamat->hobi()->attach($mancing->id);
        $mamat->hobi()->attach($mengaji->id);
        $dadang->hobi()->attach($gaming->id);
        $feri->hobi()->attach($mengaji->id);
        $this->command->info('Data hobi mahasiswa Berhasil dibuat');
    }
}
