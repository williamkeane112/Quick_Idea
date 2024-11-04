<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class contentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 1, 
                'isi_content' => 'This is the first content example.',
                'tgl_pembuatan' => '2024-10-01',
                'tgl_selesai' => '2024-10-05',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'isi_content' => 'This is the second content example.',
                'tgl_pembuatan' => '2024-10-06',
                'tgl_selesai' => '2024-10-10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('contents')->insert($data);

    }
}
