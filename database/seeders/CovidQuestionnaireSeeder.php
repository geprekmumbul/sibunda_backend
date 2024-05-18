<?php

namespace Database\Seeders;

use App\Models\CovidQuestionnaire;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CovidQuestionnaireSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            'Apakah bayi mengalami demam atau ada riwayat demam?',
            'Apakah bayi mengalami Gejala Gangguan pernapasan: Batuk/Pilek/Nyeri Tenggorokan, dll?',
            'Apakah bayi mengidap penyakit Pneumonia Berat/ ISPA Berat?',
            'Apakah bayi tidak ada Penyebab lain berdasarkan gambaran klinis yang meyakinkan?',
            'Apakah bayi pada 11 hari terakhir sebelum gejala memiliki riwayat perjalanan atau tinggal di luar negeri yang melaporkan transmisi lokal?',
            'Apakah bayi pada 11 hari terakhir sebelum gejala memiliki riwayat perjalanan atau tinggal di area transmisi lokal di Indonesia?',
            'Apakah bayi ada kontak dengan kasus konfirmasi COVID-19 pada 14 hari terakhir sebelum gejala?'
        ];

        foreach($questions as $q) {
            CovidQuestionnaire::create([
                'question' => $q
            ]);
        }
    }
}
