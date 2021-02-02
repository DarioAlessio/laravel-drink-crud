<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage;

class BeverageController extends Controller
{
    public function index(){
       $beverages = Beverage::all();
       return view('pages.home',compact('beverages'));
    }

    public function show($id){
         $beverage = Beverage::findOrFail($id);
         return view ('pages.beverage', compact('beverage'));
    }

    public function create() {
         return view('pages.beverage-create');
    }

    public function store(Request $request) {
        Beverage::create($request -> all());
        return redirect() -> route('beverage-index');
    }

    public function edit($id){
      //collegamento con la show
      $beverage = Beverage::findOrFail($id);
      return view ('pages.beverage-edit',compact('beverage'));
    }

    public function update(Request $request, $id){
      $beverage = Beverage::findOrFail($id);
      $beverage -> update($request -> all());

      return redirect() -> route('beverage-index');

    }

    public function delete($id){
      $beverage = Beverage::findOrFail($id);
      $beverage -> delete();

      return redirect() -> route('beverage-index');

    }

}
