<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\HouseSections;
use App\Models\rentalUsers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classes::factory()
            ->count(10)
            ->sequence(fn($sequence) => ['name' => 'Class ' . $sequence->index + 1])
            ->has(
                HouseSections::factory()
                    ->count(2)
                    ->state(
                        new Sequence(
                            [ 'name' => 'House A' ],
                            [ 'name' => 'House B '],
                        )
                    )
                    ->has(
                        rentalUsers::factory()
                            ->count(5)
                            ->state(
                                fn(array $attributes, HouseSections $section) => ['class_id' => $section->class_id]
                            )
                    )
                )
            ->create();
    }
}