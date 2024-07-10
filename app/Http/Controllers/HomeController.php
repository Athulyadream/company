<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $search = '';
    public $datas = '';
    public function index(Request $request)
    {
        
        $search = $request->input('search');

               
                $query = User::where('users.name', 'like', "%{$search}%")
                ->select( 'users.name', 'users.Fk_department', 'users.Fk_designation','departments.name as dname','designations.name as dsname')
                ->leftjoin('departments','departments.id','=','users.Fk_department')
                ->leftjoin('designations','designations.id','=','users.Fk_designation');
               
                    $query->orWhere('departments.name', 'like', "%{$search}%");
                    $query->orWhere('designations.name', 'like', "%{$search}%");

                
                $users = $query->get();

                return view('welcome', compact('users'));
           
       
        
    }
}
