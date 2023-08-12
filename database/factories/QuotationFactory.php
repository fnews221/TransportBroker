
<?php

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuotationFactory extends Factory
{
    protected $model = Quotation::class;

    public function definition()
    {
        return [
            'client_id' => rand(1, 10),
            'details' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 100, 10000),
        ];
    }
}
