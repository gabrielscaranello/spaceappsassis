<?php

namespace App\Http\Controllers\Api;

use App\Models\PreRegister;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Events\RegisterMail;

class PreRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preregister = PreRegister::orderBy('first_name')->orderBy('last_name')
        ->get(['id', 'first_name', 'last_name', 'email', 'phone', 'univercity']);
        return $preregister;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!PreRegister::where('email', $request->email)->first()) {
            if ($preregister = PreRegister::create($request->all())) {
                event(new RegisterMail($preregister));
                return response()->json(['status' => 'success'], 200);
            }
            return response()->json(['status' => 'error'], 500);
        }
        return response()->json(['status' => 'exists']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PreRegister  $preRegister
     * @return \Illuminate\Http\Response
     */
    public function show(PreRegister $preRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PreRegister  $preRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(PreRegister $preRegister)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PreRegister  $preRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreRegister $preRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PreRegister  $preRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreRegister $preRegister)
    {
        //
    }
}
