<?php

namespace Modules\Site\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use Modules\Dashboard\Http\Controllers\DashboardController;
class AdminSiteDashboard extends DashboardController
{
    public function __construct()
    {
        parent::__construct();
        $this->setVisit($this);

        setMenu('menus/site.json');
    }


    public function index(Request $request)
    {
        $this->setViewMain("site::admin.dashboard");
        return parent::index($request);
    }





}
