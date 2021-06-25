<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SectionController extends Controller
{
    public function Builder($request, $path)
    {
        $path->section == 'index' ? $path->section = 'index' : null;
        $method = $path->section.'_'.$path->panel;

        $data = $this->$method($request, $path);
        $data->panel = $path;
        
        return $data;
    }
    
    private function posts_index($request){
        $data = new \stdClass;
        
        return $data;
    }

    private function post_create($request){
        $data = new \stdClass;
        $data->layout = 'blog.post.edit';

        return $data;
    }

    private function post_update($request){
        $data = new \stdClass;
        $data->layout = 'blog.post.edit';

        return $data;
    }

}
