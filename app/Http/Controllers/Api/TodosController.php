<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Yajra\DataTables\Facades\DataTables;

class TodosController extends Controller
{
    public function index(){
        // return DataTables::of($todos)->make(true); 
        return Datatables::eloquent(Todo::query())
            ->addColumn('action', function ($query) {
                if(auth() -> user() -> id === $query -> user() -> id){
                    return '<a href="/" class="button is-danger is-small">Delete</a>';
                }  else {
                    return 'button';
                }
            })
            ->make(true);

        // TODO:  return Datatables::queryBuilder(DB::table('todos'))->make(true);
        // return Datatables::collection(Todo::all())->make(true);
        
        // using the engine factory
        // return Datatables::of(Todo::query())->make(true); 
        
        // return Datatables::of(DB::table('todos'))->make(true);
        // return Datatables::of(Todo::all())->make(true); // slowest

    }   
}
