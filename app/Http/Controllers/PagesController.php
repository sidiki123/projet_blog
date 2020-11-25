<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){
        return view('template.contact');
    }

    public function index(){
        return view('template.index');
    }

    public function index2(){
        return view('template.index-2');
    }

    public function index3(){
        return view('template.index-3');
    }

    public function index4(){
        return view('template.index-4');
    }

    public function analytics(){
        return view('template.analytics');
    }

    public function widgets(){
        return view('template.widgets');
    }

    public function inbox(){
        return view('template.inbox');
    }

    public function view_email(){
        return view('template.view-email');
    }

    public function compose_email(){
        return view('template.compose-email');
    }

    public function animations(){
        return view('template.animations');
    }

    public function google_map(){
        return view('template.google-map');
    }

    public function data_map(){
        return view('template.data-map');
    }

    public function code_editor(){
        return view('template.code-editor');
    }

    public function image_cropper(){
        return view('template.image-cropper');
    }

    public function wizard(){
        return view('template.wizard');
    }

    public function flot_charts(){
        return view('template.flot-charts');
    }

    public function bar_charts(){
        return view('template.bar-charts');
    }

    public function line_charts(){
        return view('template.line-charts');
    }

    public function area_charts(){
        return view('template.area-charts');
    }

    public function normal_table(){
        return view('template.normal-table');
    }

    public function data_table(){
        return view('template.data-table');
    }

    public function form_elements(){
        return view('template.form-elements');
    }

    public function form_components(){
        return view('template.form-components');
    }

    public function form_examples(){
        return view('template.form-examples.');
    }
    
    public function notification(){
        return view('template.notification');
    }
    public function alert(){
        return view('template.alert');
    }
    public function modals(){
        return view('template.modals');
    }
    public function buttons(){
        return view('template.buttons');
    }

    public function tabs(){
        return view('template.tabs');
    }

    public function accordion(){
        return view('template.accordion');
    }

    public function dialog(){
        return view('template.dialog');
    }

    public function popovers(){
        return view('template.popovers');
    }

    public function tooltips(){
        return view('template.tooltips');
    }

    public function dropdown(){
        return view('template.dropdown');
    }

    public function invoice(){
        return view('template.invoice');
    }

    public function typography(){
        return view('template.typography');
    }

    public function color(){
        return view('template.color');
    }

    public function login_register(){
        return view('template.login-register');
    }

    public function error(){
        return view('template.404');
    }

   

}

                         
