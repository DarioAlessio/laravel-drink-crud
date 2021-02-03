<?php
use App\Beverage;
use App\Bottle;

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
        factory(Beverage::class,20)
               ->make()
               ->each(function($beverage){

                  $bottle = Bottle::inRandomOrder()->first();
                  $beverage->bottle()->associate($bottle);
                  $beverage->save();


        });

    }
}
