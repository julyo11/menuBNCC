<?php

namespace App\Http\Controllers;

use App\makanan;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMakananRequest;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanans = Makanan::all();
        return view('makanan', compact('makanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Makanan::create($request ->all());
        $makanan = $request->all();
        $filename = $this->constructFileName($makanan);
        Storage::disk('local')->putFileAs('makanan/',$makanan['makanan_picture'],$filename);
        $makanan['makanan_picture'] = $filename;
        Product::create($makanan);
        Session::flash('success','Successfully Create a Makanan');
        return redirect('/makanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit(makanan $makanan)
    {
        return view('edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, makanan $makanan)
    {
        $makanan->update($request->all());
        return redirect('makanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(makanan $makanan)
    {
        $makanan->delete();
        return redirect('/makanan');
    }
}
// private function constructFileName($product){
//     $image = $makanan['makanan_picture'];
//     $fileExt = $image->getClientOriginalExtension();
//     $currDate = (string)date('mdY',time());
//     $filename = $currDate."_".$makanan['makanan_name']."_".$makanan['makanan_merk'].".".$fileExt;
//     return $filename;
// }
