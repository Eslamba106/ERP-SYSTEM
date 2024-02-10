<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Admin_panel_setting;
use Illuminate\Http\Request;

class Admin_panel_settingsController extends Controller
{
    
    public function index(){

        // get data about company
        $data = Admin_panel_setting::where('com_code' , auth()->user()->com_code)->first();

        if(!empty($data)){
            if($data['updated_by'] > 0 and $data['updated_by'] != null){
                $data['updated_by_admin'] = Admin::where('id' , $data['updated_by'])->value('name');
            }
        }
        // dd($data);
        return view('admin.admin_panel_settings.index' , ['data' => $data]);
    }
}
