
<?php

use App\Models\Quotation;
use Illuminate\Database\Seeder;

class QuotationSeeder extends Seeder
{
    public function run()
    {
        Quotation::factory(10)->create();
    }
}
