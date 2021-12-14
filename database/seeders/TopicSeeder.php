<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
                'ket_id'=>'1',
                'user_id'=>'1',
                'name_topic'=>'Yuk bantu saudara kita yang terdampak banjir di Kalimantan Selatan.',
                'slug_topic'=>Str::slug('Yuk bantu saudara kita yang terdampak banjir di Kalimantan Selatan.', '-'),
                'is_pinned'=>'1',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'ket_id'=>'1',
                'user_id'=>'1',
                'name_topic'=>'Gunung Semeru aktif kembali! Siaga meletus!',
                'slug_topic'=>Str::slug('Gunung Semeru aktif kembali! Siaga meletus!', '-'),
                'is_pinned'=>'0',          
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'ket_id'=>'1',
                'user_id'=>'1',
                'name_topic'=>'Gempa Mamuju dan Majene',
                'slug_topic'=>Str::slug('Gempa Mamuju dan Majene', '-'),
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'ket_id'=>'2',
                'user_id'=>'1',
                'name_topic'=>'Diskusi bebas yuk bahas target usia bumi:)',
                'slug_topic'=>Str::slug('Diskusi bebas yuk bahas target usia bumi:)', '-'),
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'ket_id'=>'2',
                'user_id'=>'1',
                'name_topic'=>'Inspirasi baru dalam solusi mengenai sampah',
                'slug_topic'=>Str::slug('Inspirasi baru dalam solusi mengenai sampah', '-'),
                'is_pinned'=>'1',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'ket_id'=>'2',
                'user_id'=>'1',
                'name_topic'=>'Gerakan menanam pohon kembali dan penghijauan di alam bebas.',
                'slug_topic'=>Str::slug('Gerakan menanam pohon kembali dan penghijauan di alam bebas.', '-'),
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'ket_id'=>'3',
                'user_id'=>'1',
                'name_topic'=>'Donasi ke penderita kanker, ulurkan tanganmu untuk saudara kita',
                'slug_topic'=>Str::slug('Donasi ke penderita kanker, ulurkan tanganmu untuk saudara kita', '-'),
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'ket_id'=>'3',
                'user_id'=>'1',
                'name_topic'=>'Menawarkan bantuan tunawisma di Indonesia',
                'slug_topic'=>Str::slug('Menawarkan bantuan tunawisma di Indonesia', '-'),
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'ket_id'=>'3',
                'user_id'=>'1',
                'name_topic'=>'Club anti bullying yuk basmi habis',
                'slug_topic'=>Str::slug('Club anti bullying yuk basmi habis', '-'),
                'is_pinned'=>'0',
                'created_at' =>Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // [
            //     'kategori_id'=>'4',
            //     'name'=>'Yuk bantu saudara kita yang terdampak banjir di Kalimantan Selatan.',
            //     'is_pinned'=>'1',
            //     'created_at' =>Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],

            // [
            //     'kategori_id'=>'4',
            //     'name'=>'Gunung Semeru aktif kembali! Siaga meletus!',
            //     'is_pinned'=>'0',
            //     'created_at' =>Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],

            // [
            //     'kategori_id'=>'4',
            //     'name'=>'Gempa Mamuju dan Majene',
            //     'is_pinned'=>'0',
            //     'created_at' =>Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ]
        ]);
    }
}
