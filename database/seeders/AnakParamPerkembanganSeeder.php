<?php

namespace Database\Seeders;

use App\Models\AnakParamPerkembangan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;

class AnakParamPerkembanganSeeder extends Seeder
{
    public function run()
    {
        $data = Reader::createFromPath(database_path('seeders/csv/anak_param_perkembangan.csv'), 'r');
        $data->setDelimiter(',');
        $data->setHeaderOffset(0);

        foreach($data as $d) {
            AnakParamPerkembangan::create([
                'is_laki'     => $d['is_laki'],
                'month'       => $d['month'],
                's_threshold' => $d['s_threshold'],
                'm_threshold' => $d['m_threshold']
            ]);
        }
    }
}
