<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
        Paginator::useBootstrap();
        View::composer('admin.layouts.sidebar', function($view){
            
            $logedinUser = Auth::user();
            $menu = [];
            if($logedinUser->role_id == 2){
                $menu = [
                    [
                        'name' => "Tài khoản",
                        'icon' => '<i class="fas fa-users"></i>',
                        'child'=> [
                            [
                                'name' => 'Danh sách',
                                'url' => 'demo-danh-sach'
                            ],
                            [
                                'name' => 'Tạo mới',
                                'url' => 'demo-tao-moi'
                            ]
                        ]
                    ],
                    [
                        'name' => 'Hóa đơn',
                        'icon' => '<i class="fas fa-file-invoice"></i>',
                        'child'=> [
                            [
                                'name' => 'Danh sách',
                                'url' => 'demo-danh-sach-hoa-don'
                            ],
                            [
                                'name' => 'Tạo mới',
                                'url' => 'demo-tao-moi-hoa-don'
                            ]
                        ]
                    ]
                            
                ];
            }else{
                $menu = [
                    [
                        'name' => "Sản phẩm",
                        'child'=> [
                            [
                                'name' => 'Danh sách',
                                'url' => 'demo-danh-sach'
                            ],
                            [
                                'name' => 'Tạo mới',
                                'url' => 'demo-tao-moi'
                            ]
                        ]
                    ]
                ];
            }
            $view->with('custom_menu', $menu);
        });
    }
}
