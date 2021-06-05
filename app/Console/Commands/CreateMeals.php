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
    protected $signature = 'create:meal {--calories= : calories limit} {--meals= : Total Meals} {--user_id= : User id for client} {--user_meal_id= : Generated Meal ID}';

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle()
    {
        $calories = $this->option('calories');
        $user_id = $this->option('user_id');
        $meals = $this->option('meals');
        $user_meal_id = $this->option('user_meal_id');

        $this->info('calories: ' . $calories);
        $this->info('user_id: ' . $user_id);
        $this->info('meals: ' . $meals);
        $this->info('user_meal_id: ' . $user_meal_id);


        if (!$calories) {
            $calories = 2000;
        }

        if (!$meals) {
            $meals = 2;
        }
        if (!$user_id) {
            $user_id = 1;
        }

        if (!$user_meal_id) {
            $user_meal_id = 1;
        }

        $calories_limit = $calories / $meals;
        $calories_start = $calories_limit - 100;
        $this->info('permeal: ' . $calories_limit);
        $total_meals = DB::table('food')->limit($meals)->get();
        $loop = 0;
        foreach ($total_meals as $total_meal) {
            $foods = Food::inRandomOrder()->get();
            $count = Food::inRandomOrder()->count();
            $loop = $loop + 1;
            $this->info('Total food checking: ' . $count);
            $this->info('Count: ' . $count);
            $total_calories = 0;
            $total_food_id = "";
            $found = 0;

            foreach ($foods as $food) {

                $foodschecks = Food::inRandomOrder()->get();
                $count1 = Food::inRandomOrder()->count();
                $this->info('Total food checking after loop: ' . $count1);
                $total_foods = [];
                foreach ($foodschecks as $foodscheck) {
                    // $this->info('food_id: ' . $foodscheck->id);
                    // $this->info('food_calories: ' . $foodscheck->calories);

                    $total_calories = $total_calories + $foodscheck->calories;
                    $total_food_id = $total_food_id . "+" . $foodscheck->id;
//                    $loop = $loop+1;
                    //  $this->info('total_food_id: ' . $total_food_id);
                    //  $this->info('total_calories: ' . $total_calories);
//                    $total_food = [];
//                    $this->info('food_id: '.$total_food['id']);
                    if (($total_calories > $calories_start && $total_calories < $calories_limit)) {
                        $loop = $loop + 1;
                        $this->info('-------------------Meal create Started--' . $loop . '------------------------------------');
                        $found = 1;
//                        $loop = $loop-1;
                        $this->info('food_id first : ' . $foodscheck->id);
                        $this->info('food_name: ' . $foodscheck->name);
                        $this->info('food_calories first: ' . $foodscheck->calories);
                        $this->info('total_calories: ' . $total_calories);
                        $found_another_id = $total_calories - $foodscheck->calories;

                        $query = Food::where('calories', $found_another_id)->first();
                        $this->info('food_id Second : ' . $query->id);
                        $this->info('food_name Second : ' . $query->name);
                        $this->info('food_calories Second : ' . $query->calories);

                        if ($loop == 2) {
                            DB::table('mornings')->insert(['post_id' => $user_meal_id, 'user_id' => $user_id, 'food_id' => $foodscheck->id,]);
                            DB::table('mornings')->insert(['post_id' => $user_meal_id, 'user_id' => $user_id, 'food_id' => $query->id,]);
                            $this->info('morning done : ');

                        } else if ($loop == 4) {

                            DB::table('noons')->insert(['post_id' => $user_meal_id, 'user_id' => $user_id, 'food_id' => $foodscheck->id,]);
                            DB::table('noons')->insert(['post_id' => $user_meal_id, 'user_id' => $user_id, 'food_id' => $query->id,]);
                            $this->info('noon done : ');
                        }

                        else if ($loop == 6) {

                            DB::table('nights')->insert(['post_id' => $user_meal_id, 'user_id' => $user_id, 'food_id' => $foodscheck->id,]);
                            DB::table('nights')->insert(['post_id' => $user_meal_id, 'user_id' => $user_id, 'food_id' => $query->id,]);
                            $this->info('nights done : ');
                        }


                        $this->info('-------------------Meal create End--' . $loop . '------------------------------------');
//                        $total_food['id'] = $foodscheck->id;
//                        $total_foods[]=$total_food;

                        break;
                    } else {
                        $total_calories = $foodscheck->calories;
                        $total_food_id = "+" . $foodscheck->id . "+";
//                        $loop = $loop+1;
//                        $total_food['id'] = $foodscheck->id;
//                        $total_foods[]=$total_food;
                    }

                }


                if ($found == 1) {
                    break;
                }

//            if (($total_calories >= 400 && $total_calories <= 500))
//            {
//                $this->info('found');
//                break;
//            }
            }
            // $this->info($total_calories);

        }


//
//        $prepmeal = new Prepmeal();
//        $prepmeal->user_id = 1;
//        $prepmeal->save();
//
//
//
//
//
//        $morning = new Morning();
//        $noon = new Noon();
//
//        $foods =   DB::table('food')->limit(4)->get();
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
//            $post_id = Prepmeal::where('id',$morning->post_id)->first();
//        }
//
//
//        $this->info($post_id->id);
//       return redirect()->route('app.meals.update.time',$post_id->id);
    }
}
