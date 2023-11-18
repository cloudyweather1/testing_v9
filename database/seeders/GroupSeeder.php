<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create all groups available
        DB::table('groups')->insert([
            [
                'group_title' => 'default',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'group_title' => 'tier 1',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'group_title' => 'tier 2',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'group_title' => 'tier 3',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'group_title' => 'subscribed',
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
        ]);
    }
}
