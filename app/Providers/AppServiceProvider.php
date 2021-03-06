<?php

namespace App\Providers;

use App\Model\Hause_users;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**

     * Bootstrap any application services.

     *

     * @return void

     */

    public function boot() {

        //compose all the views....
        view()->composer('*', function ($view)
        {
            $user = Hause_users::where('username', Session()->get('name'))->first();
            $card = Hause_users::with('card')->first();




            //...with this variable

            $view->with('profileImage', $user );
        });


//        view()->share('data', [1, 2, 3]);
//https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5
    }

    /**

     * Register any application services.

     *

     * @return void

     */

    public function register()

    {

        //

    }

}
