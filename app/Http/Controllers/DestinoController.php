<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destino;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos=Destino::all();
        return view('admin.destinos.index',['destinos'=>$destinos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destinos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destino = new Destino();
        $destino->title=request($key='title');
        $destino->author=request($key='author');
        $destino->description=request($key='description');
        $destino->date=request($key='date');

        if($request->hasFile('file')){
            $file=request($key='file');
            $name=$file->getClientOriginalName();
            $destination=public_path().'/destinos';
            $file->move($destination, $name);

            $destino->file=$name;
    }

        $destino->save();
        return redirect('admindestinos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $destino=Destino::findOrFail($id);
        return view('admin.destinos.show', ['destino'=>$destino]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destino=Destino::findOrFail($id);
        return view('admin.destinos.edit', ['destino'=>$destino]);
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
            $destino =Destino::findOrFail($id);
            $destino->title=request($key='title');
            $destino->author=request($key='author');
            $destino->description=request($key='description');
            $destino->date=request($key='date');

            if($request->hasFile('file')){
                $file=request($key='file');
                $name=$file->getClientOriginalName();
                $destination=public_path().'/destinos';
                $file->move($destination, $name);
                $destino->file=$name;
        }

            $destino->update();
            return redirect('admindestinos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destino=Destino::findOrFail($id);
        $destino->delete();
        return redirect('admindestinos');
    }
}
