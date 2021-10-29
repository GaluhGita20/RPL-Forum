<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KategoriForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_forums')->insert([
            [
                'name'=>'Bencana Alam di Indonesia',
                'slug'=>'bencana-alam-di-indonesia',
                'desc'=>'Menyoroti bencana yang terjadi di negara tercinta kita, memberikan informasi berita dan solusi bantuan bagi saudara kita yang terkena dampak bencana.',
                'image'=>'',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'name'=>'Peduli Lingkungan',
                'slug'=>'peduli-lingkungan',
                'desc'=>'Membahas perubahan di lingkungan sekitar kita dan meningkatkan upaya pencegahan kerusakan alam!',
                'image'=>'',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'name'=>'Peduli Sosial',
                'slug'=>'peduli-sosial',
                'desc'=>'Menawarkan bantuan dalam hubungan peduli antar sesama yang membutuhkan',
                'image'=>'',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'name'=>'Bencana Alam di Indonesia',
                'slug'=>'bencana-alam-di-indonesia',
                'desc'=>'Menyoroti bencana yang terjadi di negara tercinta kita, memberikan informasi berita dan solusi bantuan bagi saudara kita yang terkena dampak bencana.',
                'image'=>'',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
