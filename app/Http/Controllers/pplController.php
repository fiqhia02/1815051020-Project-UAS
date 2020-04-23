<?php

namespace App\Http\Controllers;

use App\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class pplController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('ppl')) return $next($request);
            abort(403,'Admin tidak memiliki cukup hak akses');
        }); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title='Ppl';
        $Petugas=Petugas::paginate(10);
        return view('admin.beranda',compact('title','Petugas'));
    }
}
