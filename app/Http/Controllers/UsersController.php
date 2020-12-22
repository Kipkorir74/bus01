<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;

class UsersController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('users.index');
    }
    public function show(Request $request,$id){
        $value = $request->session()->get('key', 'default');

        $value = $request->session()->get('key', function () {
        return 'default';
        });
    }
}
