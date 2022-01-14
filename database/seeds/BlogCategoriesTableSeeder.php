<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_categories')->delete();
        
        \DB::table('blog_categories')->insert(array (
            0 => 
            array (
                'id' => 2,
                'nama' => 'Berita Terkini',
                'file_foto' => NULL,
                'created_at' => '2019-07-17 09:38:49',
                'updated_at' => '2019-07-17 09:38:49',
            ),
            1 => 
            array (
                'id' => 3,
                'nama' => 'Opini',
                'file_foto' => NULL,
                'created_at' => '2019-07-17 09:39:10',
                'updated_at' => '2019-07-17 09:39:10',
            ),
            2 => 
            array (
                'id' => 4,
                'nama' => 'KPU Dalam Berita',
                'file_foto' => NULL,
                'created_at' => '2019-07-17 09:39:50',
                'updated_at' => '2019-07-17 09:39:50',
            ),
            3 => 
            array (
                'id' => 5,
                'nama' => 'Pengumuman',
                'file_foto' => NULL,
                'created_at' => '2019-07-18 02:27:52',
                'updated_at' => '2019-07-18 02:27:52',
            ),
            4 => 
            array (
                'id' => 6,
                'nama' => 'HeadLine',
                'file_foto' => NULL,
                'created_at' => '2019-07-18 03:51:05',
                'updated_at' => '2019-07-18 03:51:05',
            ),
        ));
        
        
    }
}