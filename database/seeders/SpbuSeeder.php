<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    public function run()
    {
        $file = fopen(storage_path('app/wilayah.csv'), 'r');
        fgetcsv($file); // skip header

        $provinsiMap = [];
        $kotaMap = [];

        while (($row = fgetcsv($file)) !== false) {
            [$provinsi, $kota, $kodeSpbu] = $row;

            // Tambahkan provinsi jika belum ada
            if (!isset($provinsiMap[$provinsi])) {
                $provinsiId = DB::table('provinsi')->insertGetId([
                    'nama' => $provinsi,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $provinsiMap[$provinsi] = $provinsiId;
            }

            // Tambahkan kota jika belum ada
            $key = $provinsi . '_' . $kota;
            if (!isset($kotaMap[$key])) {
                $kotaId = DB::table('kota')->insertGetId([
                    'provinsi_id' => $provinsiMap[$provinsi],
                    'nama' => $kota,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $kotaMap[$key] = $kotaId;
            }

            // Tambahkan kode SPBU
            DB::table('kode_spbu')->insert([
                'kota_id' => $kotaMap[$key],
                'kode' => $kodeSpbu,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        fclose($file);
    }
}
