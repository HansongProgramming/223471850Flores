<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            [
                'title' => 'First Note',
                'content' => 'This is the content of the first note.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Second Note',
                'content' => 'This is the content of the second note.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
