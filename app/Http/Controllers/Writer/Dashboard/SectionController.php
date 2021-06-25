<?php

namespace App\Http\Controllers\Writer\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SectionController extends Controller
{
    public function Builder($request, $path)
    {
        $path->section == 'index' ? $path->section = 'home' : null;
        $method = $path->section.'_'.$path->panel;

        $data = $this->$method($request, $path);
        $data->panel = $path;
        
        return $data;
    }
    
    private function home_index($request){
        $data = new \stdClass;
        
        return $data;
    }

    private function messages_index($request){
        $data = new \stdClass;
        
        return $data;
    }

    private function statistics_index($request){
        $data = new \stdClass;
        
        return $data;
    }


    public static function layout_create($request) {
        $data = new \stdClass;
        $country_id = 6; // Default for Spain
        $regions = RegionController::getCountryRegions($country_id);        
        $data->regions = $regions;
        return $data;
    }

    public static function layout_update($request) {
        $data = new \stdClass;
        $school = SchoolModel::find($request->id);
        
        if ( empty($school) ) {
            $data->error = [
                'code'      => 400,
                'message'   => 'record id: '.$request->id.' not found'
            ];
        } else {
            $data->row = $school;
            $data->image = $school->image;
            
            $regions = RegionController::getCountryRegions($school->country_id);        
            $data->regions = $regions;            
            $provinces = ProvinceController::getRegionProvinces($school->country_id, $school->region_id);        
            $data->provinces = $provinces;
        }
        return $data;
    }

    // 
    public static function layout_students($request) {
        $data = new \stdClass;
        $school = SchoolModel::find($request->id);
        
        if ( empty($school) ) {
            $data->error = [
                'code'      => 400,
                'message'   => 'record id: '.$request->id.' not found'
            ];
        } else {
            $data->school = $school;
            $list = StudentFormController::getList($request);        
            $data->list = $list->query;
        }
        return $data;        
    }

}
