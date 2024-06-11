<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;  
use DB;   

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
        $records = DB::table('employees')
       ->select('employees.*','occupations.occupation as oname')
       ->leftjoin('occupations','occupations.id','employees.occupation_id')
       ->get();
        return view('home', ['records' => $records]);
      
    }
}
