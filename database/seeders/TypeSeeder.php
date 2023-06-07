<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'php',
            'javascript',
            'blade',
            'scss',
            'css',
            'html',
            'laravel',
            'vue',
        ];
        foreach ($types as $type) {
            $newType = new Type();
            $newType->tech = $type;
            $newType->slug = Str::slug($type, '-');
            $newType->save();
        }
    }
}