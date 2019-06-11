<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trade as Auto;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Auto::latest()->paginate(5);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware('auth:api');

        $this->validate($request, [
            'nama' => 'required|min:4',
            'name' => 'required|min:4',
            'deskripsi' => 'required',
            'desc' => 'required',
            'type' => 'required',
            'gambar' => 'required',
        ]);

        $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];
        
        \Image::make($request->gambar)->save('img/trading/'.$name,60);
        
        $request->merge(['gambar' => $name]);

        return Auto::create([
            'nama' => $request->nama,
            'name' => $request->name,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'type' => $request->type,
            'desc' => $request->desc,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->middleware('auth:api');

        $this->validate($request, [
            'nama' => 'required|min:4',
            'name' => 'required|min:4',
            'deskripsi' => 'required',
            'desc' => 'required',
            'type' => 'required',
            'gambar' => 'required',
        ]);

        $data = Auto::findOrFail($id);

        $currentPhoto = $data->gambar;


        if($request->gambar != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];

            \Image::make($request->gambar)->save('img/trading/'.$name,60);
            $request->merge(['gambar' => $name]);

            $gambar = 'img/trading/'.$currentPhoto;
            if(file_exists($gambar)){
                @unlink($gambar);
            }
        }

        $data->update($request->all());

        return ["message" => "Berhasil Update Data!"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->middleware('auth:api');
        
        $data = Auto::findOrFail($id);
        $data->delete();

        return ["message" => "Berhasil Menghapus Data!"];
    }

    public function search(){

        if ($search = \Request::get('q')) {
            $data = Auto::where(function($query) use ($search){
                $query->where('type','LIKE',"%$search%");
            })->paginate(20);
        }else{
            $data = Auto::latest()->paginate(5);
        }

        return $data;

    }
}