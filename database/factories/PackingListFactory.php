
<?php

use App\Models\PackingList;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackingListFactory extends Factory
{
    protected $model = PackingList::class;

    public function definition()
    {
        return [
            'designation' => $this->faker->word,
            'weight' => $this->faker->randomFloat(2, 1, 100),
            'unit_price' => $this->faker->randomFloat(2, 10, 1000),
            'total_weight' => $this->faker->randomFloat(2, 1, 100),
            'total_price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
