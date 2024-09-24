<?php

namespace App\Http\Controllers;

use App\Models\LibUser;
use Illuminate\Http\Request;

class LibUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return LibUser::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new LibUser();
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return LibUser::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $record = LibUser::find($id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LibUser::find($id)->delete();
    }
}
