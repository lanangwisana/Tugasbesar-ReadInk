<?php

namespace Database\Seeders;

use App\Models\IsiNovel;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IsiNovelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cerita = [
            [
                'judul' => 'Solo Leveling',
                'isicerita' => '
                Di sebuah dunia di mana gerbang menuju dimensi lain telah terbuka, muncul seorang pemuda bernama Sung Jin-Woo. Ia adalah seorang "E" rank Hunter, yang dianggap sebagai yang paling lemah di antara para Hunter. Meskipun memiliki kemampuan rendah, Sung Jin-Woo memiliki keinginan kuat untuk melindungi adiknya dan mencari nafkah untuk keluarganya.
                
                Suatu hari, Sung Jin-Woo dan kelompoknya memasuki dungeon yang sangat kuat. Di dalam dungeon itu, mereka dihadapi dengan monster yang tak terduga dan terlalu kuat. Tim Sung Jin-Woo terdesak dan banyak yang tewas, termasuk dirinya sendiri. Namun, sesuatu yang aneh terjadi setelah kematiannya. Sung Jin-Woo tidak mati, melainkan terbangun kembali di dungeon yang sama. Dia mendapati dirinya memiliki kekuatan baru dan kemampuan untuk meningkatkan levelnya.
                
                Dengan kekuatan baru yang dimilikinya, Sung Jin-Woo memutuskan untuk menjadi Hunter solo. Ia mulai melibas dungeon-dungeon yang sebelumnya tak terjangkau oleh para Hunter terkuat sekalipun. Keterampilan bertarungnya semakin memukau dan levelnya terus naik dengan cepat. Sung Jin-Woo menjadi terkenal di antara para Hunter sebagai "S-rank Solo Hunter," sebuah prestasi yang belum pernah terjadi sebelumnya.
                
                Namun, dengan kekuatan itu, Sung Jin-Woo juga menarik perhatian ancaman yang lebih besar. Organisasi misterius dan makhluk kuat dari dimensi lain mulai mengintainya. Sung Jin-Woo harus menghadapi konspirasi, pengkhianatan, dan pertempuran sengit untuk melindungi dunia yang perlahan-lahan terancam oleh kekuatan gelap.
                
                Solo Leveling mengikuti perjalanan epik Sung Jin-Woo sebagai seorang Hunter solo yang mencari jawaban tentang asal-usul kekuatannya dan menghadapi tantangan besar untuk melindungi dunia yang dicintainya. Cerita ini penuh dengan aksi yang memukau, pertarungan sengit, dan misteri yang mendalam.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'judul' => 'Omniscient Reader Viewpoint',
                'isicerita' => 'Di kota modern yang tenang, Kim Dokja hidup sebagai pekerja kantoran biasa. Kehidupannya yang monoton berubah secara drastis ketika ia tiba-tiba mendapati dirinya terjebak dalam dunia novel web yang populer, "Tanda-Tanda Peradaban Akhir."

                Dalam novel tersebut, Kim Dokja mengetahui bahwa dia bukan karakter biasa. Ia adalah pembaca omniscient, memahami plot, karakter, dan bahkan keputusan pembaca. Sebagai satu-satunya pembaca omniscient, tugas besar menantinya: mengikuti alur cerita dan memastikan semua berjalan sesuai rencana.
                
                Namun, keadaan menjadi semakin rumit ketika karakter utama novel, Yoo Joonghyuk, mulai menyadari keberadaan Kim Dokja. Yoo Joonghyuk adalah karakter kunci yang memegang peranan besar dalam mengatasi kekacauan dan bencana dalam novel tersebut. Kini, dengan mengetahui keberadaan pembaca omniscient, apakah Yoo Joonghyuk akan mengikuti takdirnya atau mencoba mengubahnya?
                
                Seiring berjalannya waktu, Kim Dokja menyadari bahwa kehadirannya sendiri memiliki dampak besar pada alur cerita. Dia tidak lagi hanya menjadi penonton, tetapi ikut membentuk dunia sekitarnya. Persahabatannya dengan karakter-karakter lain, seperti Jung Heewon, Yoo Sangah, dan karakter-karakter unik lainnya, semakin membingungkan jalan cerita.
                
                Konflik muncul dari dua sisi: satu dari penulis novel yang mencoba mengguncang pembaca omniscient agar alur cerita tetap menarik, dan satu dari karakter-karakter yang ingin menentang takdir yang telah ditentukan oleh penulis. Kim Dokja harus menavigasi antara loyalitas pada pembaca asli, kewajibannya sebagai pembaca omniscient, dan hubungannya dengan karakter-karakter dalam novel tersebut.
                
                Sementara itu, ancaman besar yang tidak terduga muncul, mengancam untuk menghancurkan seluruh dunia fiksi. Apakah Kim Dokja bersama dengan Yoo Joonghyuk dan rekan-rekannya dapat bekerja sama untuk menghentikan malapetaka ini? Bagaimana takdir dan kebebasan berkompromi satu sama lain?
                
                Dalam perjalanan yang penuh intrik dan ketegangan, Kim Dokja harus memutuskan apakah dia hanya penonton yang pasif atau pahlawan yang aktif dalam menyusun kisah ini. ORV The Unwritten Epoch adalah kisah yang mempertanyakan peran pembaca dalam penciptaan kisah dan mengeksplorasi kekuatan takdir, kebebasan, dan hubungan yang tumbuh di antara karakter-karakter di dunia yang semula hanya ada di dalam halaman novel.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        IsiNovel::truncate();
        IsiNovel::insert($cerita);
    }
}
