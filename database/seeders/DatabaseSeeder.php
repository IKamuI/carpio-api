<?php
namespace Database\Seeders;

use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create(['email' => 'joao@gmail.com']);
        Product::factory(10000)->hasPhotos(2)->create();
        OrderItem::factory(10)->create();
    }
}
