<?php
use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creo un ciclo per inserire i dati che verrano generati da facker
          $faker = \Faker\Factory::create('it_IT');
        for($i=0; $i<50; $i++) {
            $newTrain = new Train();
            $newTrain->Company = $faker->word();
            $newTrain->Depature_station = $faker->city();
            $newTrain->Arrival_station = $faker->city();
            $newTrain->Depature_Time = $faker->dateTimeBeetween('-3 days','+3 days');
            $newTrain->Arrival_Time = $faker->dateTimeBeetween('now','+3 days');
            $newTrain->Train_Code = $faker->bothify('???-###');
            $newTrain->Number_Carriages = $faker->randomDigitNotNull();
            $newTrain->In_time = $faker->boolean();
            $newTrain->Cancelled =$faker->boolean();
            $newTrain->save();

             
        } 
    }
}
