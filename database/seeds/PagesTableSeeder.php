<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pages_name' => 'SEJARAH',
                'pages_name_eng' => NULL,
                'pages_desc' => '<h1>SEJARAH</h1>

<hr />
<p>Diawali pada Zaman Hindia Belanda sampai tahun 1942, Depdagri disebut&nbsp;<em>Departement van Binnenlands Bestuur</em>&nbsp;yang bidang tugasnya meliputi Jabatan Kepolisian, Transmigrasi, dan Agraria. Selanjutnya pada Zaman pendudukan Jepang (tahun 1942-1945),&nbsp;<em>Departement van Binnenland Bestuur</em>&nbsp;oleh pemerintah Jepang diubah menjadi&nbsp;<em>Naimubu</em>&nbsp;yang bidang tugasnya meliputi juga urusan agama, sosial, kesehatan, pendidikan, pengajaran dan kebudayaan. Naimubu atau Departemen Dalam Negeri berkantor di Jalan&nbsp;<em>Sagara</em>&nbsp;nomor 7 Jakarta sampai Proklamasi tanggal 17 Agustus 1945.</p>

<p>Pada tanggal 19 Agustus 1945&nbsp;<em>Naimubu</em>&nbsp;dipecah menjadi:</p>

<ol>
<li>Departemen Dalam Negeri termasuk urusan agama, yang dalam perkembangan lebih lanjut urusan agama dilepaskan dari&nbsp;&nbsp;&nbsp;&nbsp; Departemen Dalam Negeri.</li>
<li>Departemen Sosial</li>
<li>Departemen Kesehatan.</li>
<li>Departemen Pendidikan, pengajaran dan kebudayaan.</li>
</ol>

<p>Departemen Dalam Negeri yang dibentuk pada saat Kabinet Presidensial yang pertama Negara Republik Indonesia pada tahun 1945.&nbsp;<br />
Nama Departemen dipakai berhubung dengan dikeluarkannja Surat Edaran Menteri Pertama pada tanggal 26 Agustus 1959 No. 1/MP/RI/1959.</p>

<p>Departemen Dalam Negeri dalam Kabinet Pembangunan dibentuk berdasarkan Keputusan R.I. No. 183 tahun 1968.</p>

<p>Pada Tahun 2010, nomenklatur Departemen Dalam Negeri diubah menjadi Kementerian Dalam Negeri sesuai dengan Peraturan Menteri Dalam Negeri &nbsp;Nomor 3 Tahun 2010 tentang Nomenklatur Kementerian Dalam Negeri</p>

<p>Dan sejak berdirinya yang bermula dari Kabinet Presidensial sampai dengan Kabinet Gotong Royong hingga Kabinet Kerja sudah sering berganti beberapa menteri yang memegang Jabatan di Kementerian Dalam Negeri.</p>',
                'pages_desc_eng' => NULL,
                'create_author' => 'Admin',
                'publish' => 'Y',
                'file_foto' => '',
                'category' => NULL,
                'created_at' => '2019-06-12 03:08:38',
                'updated_at' => '2019-06-12 03:08:38',
            ),
        ));
        
        
    }
}