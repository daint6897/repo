<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\noiDung;
use App\SanPham;
class viewThongBao extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $thongBao = new noiDung();
        $data = $thongBao->orderBy('id', 'desc')->get()->toArray();
        View::share('dataThongBao',$data);

        $sp = new SanPham();
        $data1 = $sp->where('public','1')
        ->get()->toArray();
        View::share('dataSp',$data1);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
