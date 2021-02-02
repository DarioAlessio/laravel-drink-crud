<?php
use App\Beverage;
use Illuminate\Database\Seeder;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Beverage::class,20) ->create();
    }
}
