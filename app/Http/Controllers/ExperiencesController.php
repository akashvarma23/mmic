<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
class ExperiencesController extends Controller
{   

	private $cls_instnce;

    public function __construct(){
        $this->cls_instnce = new Experience();
    }

    public function index(){

        $exp = $this->cls_instnce->getExpParent();
        return view('experiences')->with('exp',$exp);
        
    }

    public function get(Request $request){
        
        $data =  $request->fullUrl();

        $name = str_replace('-',' ',basename($data));

        $exp = $this->cls_instnce->getExpChild($name);

		return view('experiences')->with('exp',$exp);
    }
}
