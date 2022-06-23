<?php

namespace Modullo\ModulesInit\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Dorcas\Hub\Utilities\UiResponse\UiResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class ModulesInitController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data = [
            'page' => ['title' => config('modules-init.title')],
            'header' => ['title' => config('modules-init.title')],
            'selectedMenu' => 'modules-init',
            'submenuConfig' => 'navigation-menu.modules-init.sub-menu',
            'submenuAction' => ''
        ];
    }

    public function index()
    {
        return view('modules-init::index', $this->data);
    }

}