<?php

namespace App\Http\Controllers;

use App\Contacto;
use App\Http\Requests\StoreDirectorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try {
            return jsend_success(Contacto::all());
        } catch (\Exception $e) {
            return jsend_error($e);
        }

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDirectorio $request)
    {
        //
        try  {
            return jsend_success(Contacto::create($request->all()), 201);
        } catch (\Exception $e) {
            return jsend_error($e);
        }

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
        try {
            return jsend_success(Contacto::find($id));
        } catch (\Exception $e) {
            return jsend_error($e);
        }
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
        //
        try {
            return jsend_success(Contacto::find($id)->update($request->all()));
        } catch (\Exception $e) {
            return jsend_error($e);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            return jsend_success(Contacto::destroy($id));
        } catch (\Exception $e) {
            return jsend_error($e);
        }

    }
}
