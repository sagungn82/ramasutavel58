<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links')->delete();
        
        \DB::table('links')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_link' => 'KIP Aceh',
                'url' => 'http://kip.acehprov.go.id/',
                'created_at' => '2019-07-22 04:09:10',
                'updated_at' => '2019-07-22 04:09:10',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_link' => 'KPU Provinsi Sumatera Utara',
                'url' => 'http://kpud-sumutprov.go.id/',
                'created_at' => '2019-07-22 04:09:31',
                'updated_at' => '2019-07-22 04:09:31',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_link' => 'KPU Provinsi Sumatra Barat',
                'url' => 'http://sumbar.kpu.go.id',
                'created_at' => '2019-07-22 04:09:54',
                'updated_at' => '2019-07-22 04:09:54',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_link' => 'KPU Provinsi Riau',
                'url' => 'http://kpu-riauprov.go.id/',
                'created_at' => '2019-07-22 04:10:19',
                'updated_at' => '2019-07-22 04:10:19',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_link' => 'KPU Provinsi Sumatera Selatan',
                'url' => 'http://sumsel.kpu.go.id/',
                'created_at' => '2019-07-22 04:10:37',
                'updated_at' => '2019-07-22 04:10:37',
            ),
            5 => 
            array (
                'id' => 6,
                'nama_link' => 'KPU Provinsi Lampung',
                'url' => 'http://lampung.kpu.go.id',
                'created_at' => '2019-07-22 04:11:03',
                'updated_at' => '2019-07-22 04:11:03',
            ),
            6 => 
            array (
                'id' => 7,
                'nama_link' => 'KPU Provinsi Kep. Babel',
                'url' => 'http://kpu-babelprov.go.id/',
                'created_at' => '2019-07-22 04:11:18',
                'updated_at' => '2019-07-22 04:11:18',
            ),
            7 => 
            array (
                'id' => 8,
                'nama_link' => 'KPU Provinsi Kepri',
                'url' => 'http://kepri.kpu.go.id/',
                'created_at' => '2019-07-22 04:11:36',
                'updated_at' => '2019-07-22 04:11:36',
            ),
            8 => 
            array (
                'id' => 9,
                'nama_link' => 'KPU DKI Jakarta',
                'url' => 'http://kpujakarta.go.id',
                'created_at' => '2019-07-22 04:11:55',
                'updated_at' => '2019-07-22 04:11:55',
            ),
        ));
        
        
    }
}