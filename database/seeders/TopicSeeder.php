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
                'name'=>'Yuk bantu saudara kita yang terdampak banjir di Kalimantan Selatan.',
                'is_pinned'=>'1',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'1',
                'name'=>'Gunung Semeru aktif kembali! Siaga meletus!',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'1',
                'name'=>'Gempa Mamuju dan Majene',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'2',
                'name'=>'Diskusi bebas yuk bahas target usia bumi:)',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'2',
                'name'=>'Inspirasi baru dalam solusi mengenai sampah',
                'is_pinned'=>'1',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'2',
                'name'=>'Gerakan menanam pohon kembali dan penghijauan di alam bebas.',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'3',
                'name'=>'Donasi ke penderita kanker, ulurkan tanganmu untuk saudara kita',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'3',
                'name'=>'Menawarkan bantuan tunawisma di Indonesia',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'3',
                'name'=>'Club anti bullying yuk basmi habis',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'4',
                'name'=>'Yuk bantu saudara kita yang terdampak banjir di Kalimantan Selatan.',
                'is_pinned'=>'1',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'4',
                'name'=>'Gunung Semeru aktif kembali! Siaga meletus!',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'kategori_forum_id'=>'4',
                'name'=>'Gempa Mamuju dan Majene',
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
