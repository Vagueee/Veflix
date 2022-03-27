<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Veflix;

class VeflixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veflix = veflix::all();
        return view('dashboard', compact('veflix'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'synopsis' => 'required',
            'duration' => 'required',
            'genre' => 'required',
            'rating' => 'required'
        ]);

        $input = $request->all();
        $veflix = veflix::create($input);
        return redirect('/dashboard')->with('success', ' Data berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veflix = veflix::find($id);
        return view('detail', ["veflix" => $veflix]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veflix = veflix::findOrfail($id);
        return view('edit', ['veflix' => $veflix]);
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
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'synopsis' => 'required',
            'duration' => 'required',
            'genre' => 'required',
            'rating' => 'required'
        ]);
        
        $veflix = veflix::find($id)->update($request->all());
        return redirect('/dashboard')->with('success', 'Data telah diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veflix = veflix::find($id);

        $veflix->delete();

        return redirect('/dashboard')->with('success', 'Data telah dihapus');
    }
}
