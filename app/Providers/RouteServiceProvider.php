<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Officer;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();
        Route::bind('user' , function ($user){
            return User::where('identifier' , $user)->orWhere('id' , $user)->firstOrFail();
        });

        Route::bind('student' , function($student){
            return Student::where('nisn' , $student)->orWhere('name' , $student)->firstOrFail();
        });

        Route::bind('officer' , function($officer){
            return Officer::where('username' , $officer)->firstOrFail();
        });

        Route::bind('class' , function($class){
            return Kelas::where('class_name' ,  $class)->firstOrFail();
        });

        Route::bind('payment' , function($payment){
            return Payment::where('identifier' , $payment)->firstOrFail();
        });

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
