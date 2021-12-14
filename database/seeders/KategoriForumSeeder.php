<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        DB::table('kets')->insert([
            [
                'name_kategori'=>'Bencana Alam di Indonesia',
                'slug_kat'=>Str::slug('Bencana Alam di Indonesia', '-'),
                'desc'=>'Menyoroti bencana yang terjadi di negara tercinta kita, memberikan informasi berita dan solusi bantuan bagi saudara kita yang terkena dampak bencana.',
                'image'=>'',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'name_kategori'=>'Peduli Lingkungan',
                'slug_kat'=>Str::slug('Peduli Lingkungan', '-'),
                'desc'=>'Membahas perubahan di lingkungan sekitar kita dan meningkatkan upaya pencegahan kerusakan alam!',
                'image'=>'',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'name_kategori'=>'Peduli Sosial',
                'slug_kat'=>Str::slug('Peduli Sosial', '-'),
                'desc'=>'Menawarkan bantuan dalam hubungan peduli antar sesama yang membutuhkan',
                'image'=>'',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
