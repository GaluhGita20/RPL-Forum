<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topics')->insert([
            [
                'kategori_forum_id'=>'1',
                'name_topic'=>'Yuk bantu saudara kita yang terdampak banjir di Kalimantan Selatan.',
                'is_pinned'=>'1',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'1',
                'name_topic'=>'Gunung Semeru aktif kembali! Siaga meletus!',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'1',
                'name_topic'=>'Gempa Mamuju dan Majene',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'2',
                'name_topic'=>'Diskusi bebas yuk bahas target usia bumi:)',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'2',
                'name_topic'=>'Inspirasi baru dalam solusi mengenai sampah',
                'is_pinned'=>'1',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'2',
                'name_topic'=>'Gerakan menanam pohon kembali dan penghijauan di alam bebas.',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'3',
                'name_topic'=>'Donasi ke penderita kanker, ulurkan tanganmu untuk saudara kita',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'3',
                'name_topic'=>'Menawarkan bantuan tunawisma di Indonesia',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'3',
                'name_topic'=>'Club anti bullying yuk basmi habis',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // [
            //     'kategori_forum_id'=>'4',
            //     'name'=>'Yuk bantu saudara kita yang terdampak banjir di Kalimantan Selatan.',
            //     'is_pinned'=>'1',
            //     'created_at' =>Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],

            // [
            //     'kategori_forum_id'=>'4',
            //     'name'=>'Gunung Semeru aktif kembali! Siaga meletus!',
            //     'is_pinned'=>'0',
            //     'created_at' =>Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],

            // [
            //     'kategori_forum_id'=>'4',
            //     'name'=>'Gempa Mamuju dan Majene',
            //     'is_pinned'=>'0',
            //     'created_at' =>Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ]
        ]);
    }
}
