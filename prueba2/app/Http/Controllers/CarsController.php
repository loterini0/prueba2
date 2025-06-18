<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Routes;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Cars::all();
        $RouteMayor = Route10;s
        return view("cars.index")->with("cars", $cars);

    }

    public function store(Request $request)
    {
        $cars = new Cars;
        $cars->id_type_car = $request->id_type_car;
        $cars->id_route = $request->id_route;
        $cars->driver = $request->driver;
        $cars->save();
        return redirect()->route("cars.index");
        

    }

    public function edit($id)
    {
        $cars = Cars::find($id);
        return view("cars.edit")->with("cars", $cars);
    }

    
    public function update(Request $request,$id)
    {
        $cars = Cars::find($id);
        $cars->id_type_car = $request->id_type_car;
        $cars->id_route = $request->id_route;
        $cars->driver = $request->driver;
        $cars->save();
        return redirect()->route("cars.index");
    }

    public function destroy($id)
    {
        $cars = Cars::find($id);
        $cars->delete();
        return redirect()->route("cars.index");


    }
}
