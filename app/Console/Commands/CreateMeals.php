<?php

namespace App\Console\Commands;

use App\Models\Food;
use App\Models\Mealtime;
use App\Models\Morning;
use App\Models\Noon;
use App\Models\Prepmeal;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreateMeals extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:meal {--calories= : calories limit}\';';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $calories = $this->option('calories');

        if (!$calories) {
            $calories = 2000;
        }
        $meals=4;
        $permeal = $calories / $meals;
        $this->info($permeal);
        $total_meals =   DB::table('food')->limit(4)->get();

        foreach($total_meals as $total_meal){
            $foods = Food::inRandomOrder()->get();
            $total_calories=0;

            foreach ($foods as $food)
            {
                $found = 0;
                $foodschecks = Food::all()->random(3);
                foreach ($foodschecks as $foodscheck)
                {
                    $total_calories = $total_calories + $foodscheck->calories;

                    if (($total_calories >= 400 && $total_calories <= 500))
                    {
                        $this->info('found');
                        $found = 1;
                        break;
                    }
                    else
                    {
                        $total_calories=0;
                    }
                }

                if ($found==1)
                {
                    break;
                }

//            if (($total_calories >= 400 && $total_calories <= 500))
//            {
//                $this->info('found');
//                break;
//            }
            }
            $this->info($total_calories);

        }




//
//        $prepmeal = new Prepmeal();
//        $prepmeal->user_id = Auth::id();
//        $prepmeal->save();
//
//
//
//
//
//        $morning = new Morning();
//        $noon = new Noon();
//
//
//        foreach ($foods as $food)
//        {
//            $morning->post_id=$prepmeal->id;
//            $morning->user_id=1;
//            $morning->food_id=$food->id;
//            $morning->save();
//            //
//            $noon->post_id=$prepmeal->id;
//            $noon->user_id=1;
//            $noon->food_id=$food->id;
//            $noon->save();
//
//        }


//        $mealtimeeee = Mealtime::where('id',$morning->id)->first();
//        $prepmeal->meal_id = $mealtimeeee->id;
//        $prepmeal->save();
    }
}
