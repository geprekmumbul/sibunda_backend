<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OauthClientsSeeder extends Seeder
{
    public function run()
    {
        $clients = [
            [
                'SiBunda Personal Access Client',
                '7nEZQGGMBLLf1WdsziFJqMuw5hEGu5ypZeyfTh9D',
                'http://localhost',
                1,
                0,
                0,
                '2021-03-27 20:41:30',
                '2021-03-27 20:41:30'],
            [
                'SiBunda Password Grant Client',
                '5xnEHfLiRiyyRGrez97iEmqzTB4h48IWr5DnHEuO',
                'http://localhost',
                0,
                1,
                0,
                '2021-03-27 20:41:30',
                '2021-03-27 20:41:30'
            ]
        ];
    }
}

