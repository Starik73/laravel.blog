<?php

namespace App\Http\Controllers\Admin;

/**
 * Управление админкой 
 *
 * @package App\Http\Controllers\Admin
 */
class AdminController extends BaseController
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

}
