
<?php

use App\Models\PackingList;
use Illuminate\Database\Seeder;

class PackingListSeeder extends Seeder
{
    public function run()
    {
        PackingList::factory(10)->create();
    }
}
