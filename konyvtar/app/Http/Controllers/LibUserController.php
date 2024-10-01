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
    public function show(string $user_id)
    {
        return LibUser::find($user_id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user_id)
    {
        $record = LibUser::find($user_id);
        $record->fill($request->all());
        $record->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $user_id)
    {
        LibUser::find($user_id)->delete();
    }
}
