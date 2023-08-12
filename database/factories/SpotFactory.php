
<?php

use App\Models\Spot;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpotFactory extends Factory
{
    protected $model = Spot::class;

    public function definition()
    {
        return [
            'client_id' => rand(1, 10),
            'vessel_id' => rand(1, 10),
            'spot_date' => $this->faker->dateTime,
            'details' => $this->faker->text,
        ];
    }
}
