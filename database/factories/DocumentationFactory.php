
<?php

use App\Models\Documentation;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentationFactory extends Factory
{
    protected $model = Documentation::class;

    public function definition()
    {
        return [
            'client_id' => rand(1, 10),
            'document_type' => $this->faker->word,
            'document_path' => $this->faker->url,
        ];
    }
}
