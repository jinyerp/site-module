<?php

namespace Modules\Site\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Jiny\Table\Http\Controllers\ConfigController;
class SettingController extends ConfigController
{
    //const MENU_PATH = "menus";
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        ##
        $this->actions['filename'] = "jiny/site/setting"; // 설정파일명(경로)
        $this->actions['view_form'] = "site::admin.setting.form";

        // 테마설정
        setTheme("admin/sidebar");


    }



}