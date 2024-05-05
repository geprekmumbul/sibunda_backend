<?php
namespace Database\Seeders;

use App\Models\DaerahKecamatan;
use App\Models\DaerahDesakel;
use App\Models\DaerahKotakab;
use App\Models\DaerahProvinsi;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * by Amir Mu'tashim Billah
     * @return void
     */
    public function run()
    {
        //
            $basePath = 'seeders/csv/';

        DaerahProvinsi::query()->truncate();
        DaerahKotakab::query()->truncate();
        DaerahKecamatan::query()->truncate();
        DaerahDesakel::query()->truncate();

        $this->importDataFromCsv(DaerahProvinsi::class, $basePath.'daerah_provinsi.csv');
        $this->importDataFromCsv(DaerahKotakab::class, $basePath.'daerah_kotakab.csv', 'provinsi_id');
        $this->importDataFromCsv(DaerahKecamatan::class, $basePath.'daerah_kecamatan.csv', 'kota_id');
        $this->importDataFromCsv(DaerahDesakel::class, $basePath.'daerah_desa.csv', 'kecamatan_id');

    }

    private function importDataFromCsv($model, $fileName, $foreignKey = null) {
        $records = Reader::createFromPath(database_path($fileName), 'r');
        $records->setDelimiter(',');
        $records->setHeaderOffset(0);

        foreach ($records as $record) {
            if ($foreignKey == null) {
                $model::create([
                    'id'   => $record['id'],
                    'nama' => $record['name']
                ]);
            } else {
                $model::create([
                    'id'   => $record['id'],
                    'nama' => $record['name'],
                    $foreignKey => $record['foreign']
                ]);
            }
        }
    }
}
