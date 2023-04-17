<?php

namespace App\Http\Controllers;

use App\Http\Resources\CurseIndexResource;
use App\Models\curse;
use Illuminate\Http\Request;

class CurseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $curse =CurseIndexResource::collection(curse::latest()->get());
        return view('welcome', compact ('curse'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        curse::create([
            'title'=>$request->title,
            'detail'=>$request->detail,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
