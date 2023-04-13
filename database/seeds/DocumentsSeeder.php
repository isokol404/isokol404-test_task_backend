<?php

use App\Models\Document;
use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Document::class, 20)->create()->each(function ($user) {});
    }
}
