<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace    = 'App\Http\Controllers';

    // module
    protected $generalStore = 'Module\GeneralStore\Controllers';
    protected $permission   = 'Module\Permission\Controllers';
    protected $hrm          = 'Module\HRM\Controllers';
    protected $account      = 'Module\Account\Controllers';

    // garments module
    protected $inventory            = 'Module\Garments\Controllers\Inventory';
    protected $merchandising        = 'Module\Garments\Controllers\Merchandising';
    protected $commercial           = 'Module\Garments\Controllers\Commercial';
    protected $payment              = 'Module\Garments\Controllers\Payment';
    protected $knitting_dyeing      = 'Module\Garments\Controllers\KnittingDyeing';

    public $HOME = '/';


    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();



        $this->mapWebRoutes();

        // $this->mapHrmApiRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));




        Route::group(['middleware' => 'web'], function () {
    
            // PERMISSION
            Route::namespace($this->permission)->group(base_path('module/Permission/routes/web_permission.php'));
        });

    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }


    // protected function mapHrmApiRoutes()
    // {
    //     Route::prefix('api/hrm')
    //          ->middleware('api')
    //          ->namespace('Module\HRM\Controllers\Api')
    //          ->group(base_path('module/HRM/routes/web_hrm_api.php'));
    // }
}
