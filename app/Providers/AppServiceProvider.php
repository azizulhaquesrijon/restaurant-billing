<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Module\Permission\Models\Module;

use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Module\Permission\Models\EmployeePermission;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {

        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                if (!session()->has('slugs')) {
                    session()->put('slugs', auth()->user()->permissions()->pluck('slug')->toArray());
                    session()->put('active_modules', Module::active()->pluck('name')->toArray());
                    $em_slugs = EmployeePermission::with('permission')->get()->pluck('permission.slug')->toArray() ?? [];
                    session()->put('em_slugs', $em_slugs);

                }


                view()->share(['slugs' => (session()->get('slugs') ?? []), 'active_modules' => (session()->get('active_modules') ?? []), 'em_slugs' => (session()->get('em_slugs') ?? [])]);

                if ($view->getName() == 'partials._footer') {
                    session()->forget('slugs');
                    session()->forget('em_slugs');
                    session()->forget('active_modules');
                }
            } else {
                view()->share(['slugs' => [], 'active_modules' => []]);
            }
        });


        Schema::defaultStringLength(191);
    }
}
