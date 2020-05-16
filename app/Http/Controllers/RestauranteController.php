<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurante;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantes=Restaurante::all();
        return view('admin.restaurantes.index',['restaurantes'=>$restaurantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurante = new Restaurante();
        $restaurante->title=request($key='title');
        $restaurante->author=request($key='author');
        $restaurante->description=request($key='description');
        $restaurante->date=request($key='date');

        if($request->hasFile('file')){
        $file=request($key='file');
        $name=$file->getClientOriginalName();
        $destination=public_path().'/restaurantes';
        $file->move($destination, $name);

        $restaurante->file=$name;
    }

        $restaurante->save();
        return redirect('adminrestaurantes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurante=Restaurante::findOrFail($id);
        return view('admin.restaurantes.show', ['restaurante'=>$restaurante]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurante=Restaurante::findOrFail($id);
        return view('admin.restaurantes.edit', ['restaurante'=>$restaurante]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $restaurante =Restaurante::findOrFail($id);
            $restaurante->title=request($key='title');
            $restaurante->author=request($key='author');
            $restaurante->description=request($key='description');
            $restaurante->date=request($key='date');

            if($request->hasFile('file')){
                $file=request($key='file');
                $name=$file->getClientOriginalName();
                $destination=public_path().'/restaurantes';
                $file->move($destination, $name);
                $restaurante->file=$name;
        }

            $restaurante->update();
            return redirect('adminrestaurantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurante=Restaurante::findOrFail($id);
        $restaurante->delete();
        return redirect('adminrestaurantes');
    }
}
