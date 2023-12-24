<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;

class OperatorController extends Controller
{
    public function index()
    {
        $operators = Operator::get();
        return view('admin.operators.operator-list', compact('operators'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'operator_name' => 'required',
            'operator_email' => 'required',
            'operator_address' => 'required',
            'operator_phone' => 'required',
            'operator_logo' => 'image|max:2048',
        ]);

        
    }
}
