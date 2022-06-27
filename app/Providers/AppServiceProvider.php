<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Product;
use App\Models\ProductType;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('Page.header',function($view){
            $loai_sp=ProductType::all();
            $view->with('loai_sp',$loai_sp);
        });
        view()->composer('Page.loai_sanpham',function($view){
            $product_new=Product::where('new',1)->orderBy('id','DESC')->skip(1)->take(8)->get();
            $view->with('product_new',$product_new);
        });
        //
    }
}
