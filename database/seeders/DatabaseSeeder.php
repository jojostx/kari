<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    public $data;

    public function __construct()
    {
        $this->data = $this->getStateAndCountryData();
    }

    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            FaqCategorySeeder::class,
            FaqSeeder::class,
            PlanSeeder::class,
        ]);

        $this->seedCities();
    }

    public function seedStates()
    {
        if ($this->data && is_array($this->data)) {
            $this->data = collect($this->data);

            $states = $this->data->unique('state')->pluck('state');

            #a collection of states eloquent models
            return $states->map(function ($state) {
                return State::create([
                    'name' => $state,
                    'country' => 'Nigeria'
                ]);
            });
        } else {
            return collect([]);
        }
    }

    public function seedCities()
    {
        $statesModelCollection = $this->seedStates();

        if ($statesModelCollection->isNotEmpty()) {
            collect($this->data)->each(function ($data) use ($statesModelCollection) {
                $state = $statesModelCollection->firstWhere('name', $data->state);

                City::create([
                    'name' => $data->city,
                    'state_id' => $state->id
                ]);
            });
        }
    }

    public function getStateAndCountryData()
    {
        if (
            File::exists(\database_path("data/ng.json"))
            && File::isFile(\database_path("data/ng.json"))
            && File::isReadable(\database_path("data/ng.json"))
        ) {
            $json = File::get(\database_path("data/ng.json"), true);

            return json_decode($json);
        } else {
            return false;
        }
    }
}
