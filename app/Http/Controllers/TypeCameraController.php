<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeCamera;
use App\Http\Requests\TypeCameraRequest;
use App\Repositories\TypeCameraRepository;

class TypeCameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('typecamera.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typecamera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TypeCameraRequest $request, TypeCameraRepository $repository)
{
    $repository->store($request->all ());
    return redirect ()->route ('home')->with ('ok', __ ('Le type de caméra a bien été enregistrée'));
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
    public function edit(TypeCamera $typecamera)
    {
        return view('typecamera.edit', compact('typecamera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TypeCameraRequest $request,TypeCamera $typecamera)
    {
        $typecamera->update($request->all());
        return redirect()->route('home')->with('ok', __('Le type de caméra a bien été modifiée'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeCamera $typecamera)
    {
        $typecamera->delete();
        return response()->json();
    }

    public function __construct()
    {
        $this->middleware('ajax')->only('destroy');
    }
}
