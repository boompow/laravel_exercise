<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;
use App\Models\Dojo;

class NinjaController extends Controller
{
    //creating the controllers
    public function index()
    {
        // to prevent lazy loading we'll use with() to load - this is called eager loading
        $ninjas = Ninja::with("dojo")->orderBy("created_at", "asc")->paginate(10); //pagination
        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function create()
    {
        $dojos = Dojo::all();
        return view('ninjas.create', ["dojos"=> $dojos]);
    }

    public function show(Ninja $ninja)
    {
        $ninja->load('dojo');
        return view('ninjas.show', ["userId" => $ninja]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'skill'=>'required|integer|min:0|max:100',
            'bio'=>'required|string|min:20|max:1000',
            'dojo_id'=>'required|exists:dojos,id',
        ]);

        Ninja::create($validated);

        return redirect()->route('ninjas.index')->with('success', "Ninja Created Successfully!");
    }

    public function destroy(Ninja $ninja){
        $ninja->delete();

        return redirect()->route('ninjas.index')->with('success', "Ninja Deleted Successfully!");
    }
}
