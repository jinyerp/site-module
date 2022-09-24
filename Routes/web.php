<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// 모듈에서 설정되 접속 prefix값을 읽어 옵니다.
$prefix = admin_prefix();

use Jiny\Table\Http\Controllers\TableController;

// 관리자 URL
Route::middleware(['web','auth:sanctum', 'verified'])
->name('admin.site.')
->prefix($prefix.'/site')->group(function () {

    Route::resource('/widget', TableController::class);
    Route::resource('/vote', TableController::class);

    ## 설정
    Route::resource('setting', \Jiny\Site\Http\Controllers\Admin\SettingController::class);

    // 사이트 데쉬보드
    Route::get('/', [\Modules\Site\Http\Controllers\Admin\AdminSiteDashboard::class, "index"]);

});
