<?php

namespace Database\Seeders;

use App\Models\Filter;
use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filter::create([
            'name' => 'Corporate',
        ]);

        Filter::create([
            'name' => 'Comparator/RLD Supply',
            'route_name' => 'how-we-help.cts.index'
        ]);

        Filter::create([
            'name' => 'International Supply & Unlicensed Imports',
            'route_name' => 'how-we-help.international-supply-and-unlicensed-imports.index'
        ]);

        Filter::create([
            'name' => 'Sexual Health Supply',
            'route_name' => 'how-we-help.sexual-health.index'
        ]);

        Filter::create([
            'name' => 'Specialist Distribution',
            'route_name' => 'how-we-help.distribution.index'
        ]);

        Filter::create([
            'name' => 'Early Access Programs',
            'route_name' => 'how-we-help.eap.index'
        ]);

        Filter::create([
            'name' => 'Aid & Development',
            'route_name' => 'how-we-help.aid-dev.index'
        ]);
    }
}
