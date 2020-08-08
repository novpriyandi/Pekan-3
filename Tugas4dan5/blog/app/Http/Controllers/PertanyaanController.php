<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    //
    public function index (){
    	return view('pertanyaan.index');
    }

    public function create (){
    	return view('pertanyaan.create');
    }

    public function store (){
    	return view('pertanyaan.store');
    }

    public function show (){
    	return view('pertanyaan.show');
    }

    public function edit (){
    	return view('pertanyaan.edit');
    }

    public function update (){
    	return view('pertanyaan.update');
    }

    public function destroy (){
    	return view('pertanyaan.destroy');
    }


}
