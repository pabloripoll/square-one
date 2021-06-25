<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\Dashboard\SectionController as Dashboard;
use App\Http\Controllers\Admin\Blog\SectionController as Blog;

class AdminModuleController extends Controller
{
    public function __construct()
    {
        // Auth
    }
    
    public function Builder(
            Request $request,
            $module = '',
            $section = '',
            $panel = ''
        )
    {
        !empty($module)  ? : $module  = 'dashboard';
        !empty($section) ? : $section = 'home';
        !empty($panel)   ? : $panel   = 'index';

        $path = new \stdClass;
        $path->module = $module;
        $path->section = $section;
        $path->panel = str_replace('.html', '', $panel);
        
        $data = $this->layout($request, $path);
        isset($data->error) ? $data->layout = 'error' : null;
        isset($data->layout) ? : $data->layout = $path->module.'.'.$path->section.'.'.$path->panel;
        
        $data->path = $path;

        return view('admin.'.$data->layout, ['data' => $data]);
    }
    
    private function layout_error($request, $path)
    {
        $data = new \stdClass;
        $data->error = [
            'code'      => 404,
            'message'   => 'page not found',
            'panel'     => $path
        ];
        return $data;
    }
    
    private function layout($request, $path)
    {
        $module = $path->module;

        method_exists(new AdminModuleController, $module) ?
                        $data = $this->$module($request, $path) :
                        $data = $this->layout_error($request, $path);
        
        return $data;
    }
    
    private function dashboard($request, $path)
    {
        $module = new Dashboard;
        return $module->Builder($request, $path);
    }
    
    private function blog($request, $path)
    {
        $module = new Blog;
        return $module->Builder($request, $path);
    }
}