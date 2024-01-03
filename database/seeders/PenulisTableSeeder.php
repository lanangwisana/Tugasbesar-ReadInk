<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenulisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'sampul' => 'sdkjksjd',
                'judul' => 'Malin kundang',
                'Sinopsis' => 'Malin kudang adalah seorang anak yang durhaka kepada ibunya',
                'Genre' => 'Fiksi',
                'tokohUtama' => 'Malin Kundang',
                'tglrilis' => '2023/12/4',
                'penulis' => 'Lanang',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'sampul' => 'sdkjksjd',
                'judul' => 'Sangkuriang',
                'Sinopsis' => 'Sangkuriang adalah cerita rakyat yang berasal dari daerah jawa barat',
                'Genre' => 'Fiksi',
                'tokohUtama' => 'Sangkuriang',
                'tglrilis' => '2023/10/4',
                'penulis' => 'Dheva',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];
        DB::table('penulis')->truncate();
        DB::table('penulis')->insert($data);
    }
}
