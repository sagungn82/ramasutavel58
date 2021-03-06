<?php

use Illuminate\Database\Seeder;

class MenuFrontendsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_frontends')->delete();
        
        \DB::table('menu_frontends')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_menu' => 'Pemilu',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 3,
                'created_at' => '2019-07-17 08:52:29',
                'updated_at' => '2019-07-18 03:10:32',
            ),
            1 => 
            array (
                'id' => 4,
            'nama_menu' => 'Regulasi(JDIH)',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => 'https://jdih.kpu.go.id/',
                'nama_link' => 'https://jdih.kpu.go.id/',
                'kategori' => 4,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 6,
                'created_at' => '2019-07-17 09:00:47',
                'updated_at' => '2019-07-18 09:29:48',
            ),
            2 => 
            array (
                'id' => 5,
                'nama_menu' => 'Dana Kampanye',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 7,
                'created_at' => '2019-07-17 09:01:04',
                'updated_at' => '2019-07-18 03:25:58',
            ),
            3 => 
            array (
                'id' => 6,
                'nama_menu' => 'Logistik',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 6,
                'created_at' => '2019-07-17 09:02:00',
                'updated_at' => '2019-07-17 09:02:00',
            ),
            4 => 
            array (
                'id' => 8,
                'nama_menu' => 'QnA',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 8,
                'created_at' => '2019-07-17 09:02:54',
                'updated_at' => '2019-07-17 09:02:54',
            ),
            5 => 
            array (
                'id' => 10,
                'nama_menu' => 'Info Pemilu',
                'nama_menu_eng' => NULL,
                'parrent' => 1,
                'nama_parrent' => 'Pemilu',
                'link' => 'https://infopemilu.kpu.go.id/',
                'nama_link' => 'https://infopemilu.kpu.go.id/',
                'kategori' => 4,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 1,
                'created_at' => '2019-07-18 03:03:22',
                'updated_at' => '2019-07-18 09:19:17',
            ),
            6 => 
            array (
                'id' => 11,
                'nama_menu' => 'Peserta Pemilu',
                'nama_menu_eng' => NULL,
                'parrent' => 1,
                'nama_parrent' => 'Pemilu',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 2,
                'created_at' => '2019-07-18 03:05:04',
                'updated_at' => '2019-07-18 03:05:04',
            ),
            7 => 
            array (
                'id' => 12,
                'nama_menu' => 'Hasil Pemilu',
                'nama_menu_eng' => NULL,
                'parrent' => 1,
                'nama_parrent' => 'Pemilu',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 3,
                'created_at' => '2019-07-18 03:05:32',
                'updated_at' => '2019-07-18 03:05:32',
            ),
            8 => 
            array (
                'id' => 13,
                'nama_menu' => 'Pilkada',
                'nama_menu_eng' => NULL,
                'parrent' => 12,
                'nama_parrent' => 'Hasil Pemilu',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 1,
                'created_at' => '2019-07-18 03:05:57',
                'updated_at' => '2019-07-18 03:05:57',
            ),
            9 => 
            array (
                'id' => 14,
                'nama_menu' => 'Pemilu 2019',
                'nama_menu_eng' => NULL,
                'parrent' => 12,
                'nama_parrent' => 'Hasil Pemilu',
                'link' => 'https://pemilu2019.kpu.go.id/',
                'nama_link' => 'https://pemilu2019.kpu.go.id/',
                'kategori' => 4,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 2,
                'created_at' => '2019-07-18 03:06:17',
                'updated_at' => '2019-07-18 09:29:07',
            ),
            10 => 
            array (
                'id' => 15,
                'nama_menu' => 'Hoax Pemilu',
                'nama_menu_eng' => NULL,
                'parrent' => 1,
                'nama_parrent' => 'Pemilu',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 4,
                'created_at' => '2019-07-18 03:07:15',
                'updated_at' => '2019-07-18 03:07:15',
            ),
            11 => 
            array (
                'id' => 16,
                'nama_menu' => 'Meme Pemilu',
                'nama_menu_eng' => NULL,
                'parrent' => 1,
                'nama_parrent' => 'Pemilu',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 5,
                'created_at' => '2019-07-18 03:07:32',
                'updated_at' => '2019-07-18 03:07:32',
            ),
            12 => 
            array (
                'id' => 17,
                'nama_menu' => 'Tentang KPU',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 1,
                'created_at' => '2019-07-18 03:09:10',
                'updated_at' => '2019-07-18 03:10:07',
            ),
            13 => 
            array (
                'id' => 18,
                'nama_menu' => 'Berita',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 3,
                'created_at' => '2019-07-18 03:10:47',
                'updated_at' => '2019-07-18 03:10:47',
            ),
            14 => 
            array (
                'id' => 19,
                'nama_menu' => 'Berita Terkini',
                'nama_menu_eng' => NULL,
                'parrent' => 18,
                'nama_parrent' => 'Berita',
                'link' => '2',
                'nama_link' => 'Berita Terkini',
                'kategori' => 2,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 1,
                'created_at' => '2019-07-18 03:11:20',
                'updated_at' => '2019-07-18 06:19:56',
            ),
            15 => 
            array (
                'id' => 20,
                'nama_menu' => 'Opini',
                'nama_menu_eng' => NULL,
                'parrent' => 18,
                'nama_parrent' => 'Berita',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 2,
                'created_at' => '2019-07-18 03:11:42',
                'updated_at' => '2019-07-18 03:11:42',
            ),
            16 => 
            array (
                'id' => 21,
                'nama_menu' => 'KPU Dalam Berita',
                'nama_menu_eng' => NULL,
                'parrent' => 18,
                'nama_parrent' => 'Berita',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 3,
                'created_at' => '2019-07-18 03:12:05',
                'updated_at' => '2019-07-18 03:12:05',
            ),
            17 => 
            array (
                'id' => 22,
                'nama_menu' => 'Berita KPU Daerah',
                'nama_menu_eng' => NULL,
                'parrent' => 18,
                'nama_parrent' => 'Berita',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 4,
                'created_at' => '2019-07-18 03:14:58',
                'updated_at' => '2019-07-18 03:14:58',
            ),
            18 => 
            array (
                'id' => 23,
                'nama_menu' => 'Berita Lelang',
                'nama_menu_eng' => NULL,
                'parrent' => 18,
                'nama_parrent' => 'Berita',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 5,
                'created_at' => '2019-07-18 03:18:40',
                'updated_at' => '2019-07-18 03:18:40',
            ),
            19 => 
            array (
                'id' => 24,
                'nama_menu' => 'Publikasi, Sosialisasi dan Parmas',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 4,
                'created_at' => '2019-07-18 03:20:56',
                'updated_at' => '2019-07-18 03:20:56',
            ),
            20 => 
            array (
                'id' => 25,
                'nama_menu' => 'Surat Edaran/ Pengumuman',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 5,
                'created_at' => '2019-07-18 03:25:13',
                'updated_at' => '2019-07-18 03:25:13',
            ),
            21 => 
            array (
                'id' => 26,
                'nama_menu' => 'Bahan Sosialisasi',
                'nama_menu_eng' => NULL,
                'parrent' => 24,
                'nama_parrent' => 'Publikasi, Sosialisasi dan Parmas',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 1,
                'created_at' => '2019-07-18 03:34:55',
                'updated_at' => '2019-07-18 03:34:55',
            ),
            22 => 
            array (
                'id' => 27,
                'nama_menu' => 'Buku Publikasi Informasi Pemilu',
                'nama_menu_eng' => NULL,
                'parrent' => 24,
                'nama_parrent' => 'Publikasi, Sosialisasi dan Parmas',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 2,
                'created_at' => '2019-07-18 03:35:20',
                'updated_at' => '2019-07-18 03:35:20',
            ),
            23 => 
            array (
                'id' => 28,
                'nama_menu' => 'Buku Pedoman',
                'nama_menu_eng' => NULL,
                'parrent' => 24,
                'nama_parrent' => 'Publikasi, Sosialisasi dan Parmas',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 3,
                'created_at' => '2019-07-18 03:35:39',
                'updated_at' => '2019-07-18 03:35:39',
            ),
            24 => 
            array (
                'id' => 29,
                'nama_menu' => 'Modul',
                'nama_menu_eng' => NULL,
                'parrent' => 24,
                'nama_parrent' => 'Publikasi, Sosialisasi dan Parmas',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 4,
                'created_at' => '2019-07-18 03:36:00',
                'updated_at' => '2019-07-18 03:36:13',
            ),
            25 => 
            array (
                'id' => 30,
                'nama_menu' => 'Video',
                'nama_menu_eng' => NULL,
                'parrent' => 24,
                'nama_parrent' => 'Publikasi, Sosialisasi dan Parmas',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 5,
                'created_at' => '2019-07-18 03:36:38',
                'updated_at' => '2019-07-18 03:36:38',
            ),
            26 => 
            array (
                'id' => 31,
                'nama_menu' => 'Surat Edaran',
                'nama_menu_eng' => NULL,
                'parrent' => 25,
                'nama_parrent' => 'Surat Edaran/ Pengumuman',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 1,
                'created_at' => '2019-07-18 03:37:10',
                'updated_at' => '2019-07-18 03:37:10',
            ),
            27 => 
            array (
                'id' => 32,
                'nama_menu' => 'Pengumuman',
                'nama_menu_eng' => NULL,
                'parrent' => 25,
                'nama_parrent' => 'Surat Edaran/ Pengumuman',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 2,
                'created_at' => '2019-07-18 03:37:27',
                'updated_at' => '2019-07-18 03:37:27',
            ),
            28 => 
            array (
                'id' => 33,
                'nama_menu' => 'Struktur Organisasi',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 1,
                'created_at' => '2019-07-18 03:38:22',
                'updated_at' => '2019-07-18 03:38:22',
            ),
            29 => 
            array (
                'id' => 34,
                'nama_menu' => 'Sejarah Lembaga Penyelenggara Pemilihan Umum',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 2,
                'created_at' => '2019-07-18 03:38:59',
                'updated_at' => '2019-07-18 03:38:59',
            ),
            30 => 
            array (
                'id' => 35,
                'nama_menu' => 'Visi dan Misi',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 3,
                'created_at' => '2019-07-18 03:39:23',
                'updated_at' => '2019-07-18 03:39:23',
            ),
            31 => 
            array (
                'id' => 36,
                'nama_menu' => 'Tugas dan Kewenangan KPU',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 4,
                'created_at' => '2019-07-18 03:40:14',
                'updated_at' => '2019-07-18 03:40:14',
            ),
            32 => 
            array (
                'id' => 37,
                'nama_menu' => 'Tugas dan Fungsi Biro Setjen KPU',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 5,
                'created_at' => '2019-07-18 03:40:52',
                'updated_at' => '2019-07-18 03:40:52',
            ),
            33 => 
            array (
                'id' => 38,
                'nama_menu' => 'Profil Anggota dan Pejabat Sekretariat Jenderal KPU',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 6,
                'created_at' => '2019-07-18 03:41:15',
                'updated_at' => '2019-07-18 03:41:15',
            ),
            34 => 
            array (
                'id' => 39,
                'nama_menu' => 'RENSTRA KPU',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 7,
                'created_at' => '2019-07-18 03:41:40',
                'updated_at' => '2019-07-18 03:41:40',
            ),
            35 => 
            array (
                'id' => 40,
                'nama_menu' => 'RENJA KPU',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 8,
                'created_at' => '2019-07-18 03:41:58',
                'updated_at' => '2019-07-18 03:41:58',
            ),
            36 => 
            array (
                'id' => 41,
                'nama_menu' => 'DIPA/RKA',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 9,
                'created_at' => '2019-07-18 03:42:32',
                'updated_at' => '2019-07-18 03:42:32',
            ),
            37 => 
            array (
                'id' => 42,
                'nama_menu' => 'RUP KPU',
                'nama_menu_eng' => NULL,
                'parrent' => 0,
                'nama_parrent' => 'ROOT',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 10,
                'created_at' => '2019-07-18 03:42:50',
                'updated_at' => '2019-07-18 03:42:50',
            ),
            38 => 
            array (
                'id' => 43,
                'nama_menu' => 'Laporan Realisasi Anggaran KPU',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 10,
                'created_at' => '2019-07-18 03:43:06',
                'updated_at' => '2019-07-18 03:44:03',
            ),
            39 => 
            array (
                'id' => 44,
                'nama_menu' => 'LAKIP/TAPKIN/PK',
                'nama_menu_eng' => NULL,
                'parrent' => 17,
                'nama_parrent' => 'Tentang KPU',
                'link' => NULL,
                'nama_link' => NULL,
                'kategori' => NULL,
                'description' => NULL,
                'file' => NULL,
                'urutan' => 11,
                'created_at' => '2019-07-18 03:43:20',
                'updated_at' => '2019-07-18 03:44:14',
            ),
        ));
        
        
    }
}