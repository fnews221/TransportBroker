
<?php

use App\Models\Spot;
use Illuminate\Database\Seeder;

class SpotSeeder extends Seeder
{
    public function run()
    {
        Spot::factory(10)->create();
    }
}
