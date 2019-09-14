<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;

class TestController extends Controller{

    public function testfunction(Request $request){
        $name = $request->input('testname');
        if($name=='laravel'){
            echo 'success';
            $notification = ['message' => 'Successfully get Laravel data',
                             'alert-type' => 'success'];
        } else if($name=="found"){
            echo "info";
            $notification = ['message' => 'Info found',
                'alert-type' => 'info'];
        } else if($name=='notfound'){
            echo "warning";
            $notification = ['message' => 'Info NOT found',
                'alert-type' => 'warning'];
        } else {
            echo "error";
            $notification = ['message' => 'Error getting Laravel data',
                'alert-type' => 'error'];
        }
        return back()->with($notification);
    }
}
