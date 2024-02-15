<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branches;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = ['Pekanbaru', 'Jakarta', 'Bogor', 'Depok', 'Tasikmalaya', 'Bekas', 'Palembang', 'Lampung', 'Bandung'];
        foreach ($city as $c){
            Branches::Create([
                'name' => $c,
            ]);
        }
    }
}
