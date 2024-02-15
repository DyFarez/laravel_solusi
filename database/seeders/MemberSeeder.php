<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Members;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Members::Create([
                'branch_id' => 2,
                'name' => 'Budi',
                'phone_number' => '082123123',
                'photo' => 'test.jpg'
            ]);
    }
}
