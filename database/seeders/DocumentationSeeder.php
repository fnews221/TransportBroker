
<?php

use App\Models\Documentation;
use Illuminate\Database\Seeder;

class DocumentationSeeder extends Seeder
{
    public function run()
    {
        Documentation::factory(10)->create();
    }
}
