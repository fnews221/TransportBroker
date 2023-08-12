
<?php

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition()
    {
        return [
            'client_id' => rand(1, 10),
            'vessel_id' => rand(1, 10),
            'booking_date' => $this->faker->dateTime,
            'details' => $this->faker->text,
        ];
    }
}
