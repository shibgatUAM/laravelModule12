<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operator;
use App\Models\Buses;
use Illuminate\Database;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BusController extends Controller
{
    public function index()
    {
        $operators = Operator::get();
        $buses = Buses::get();
        return view('admin.buses.bus-list', compact('operators', 'buses'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->bus_validation($request);
        $bus_name = $request->get('bus_name');
        $bus_code = $request->get('bus_code');
        $total_seats = $request->get('total_seats');
        $operator_id = $request->get('operator_id');
        $status = $request->get('status');

        $insertBus = [
            'bus_name' => $bus_name,
            'bus_code' => $bus_code,
            'total_seats' => $total_seats,
            'operator_id' => $operator_id,
            'status' => $status,
            'created_at' => \Carbon\carbon::now(),
            'updated_at' => \Carbon\carbon::now(),
        ];

        DB::table('buses')->insert($insertBus);
        Session::flash('msg', 'Bus Register Successfully!');
        return redirect()->back();

        return view('admin.buses.bus-list');
    }

    public function bus_validation()
    {
        $rules = [
            'bus_name' => 'required',
            'bus_code' => 'required',
            'total_seats' => 'required',
            'operator_id' => 'required',
        ];
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
