<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Propiedad;

class PropiedadController extends Controller
{
    public function index()
    {
        return Propiedad::with('empresa.usuario')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
  {
    if (!is_array($request->all())) {
      return ['error' => 'request must be an array'];
    }

    $rules = [
      'nombre' => 'required',
      'descripcion' => 'required',
      'id_empresa' => 'required|exist:empresa,id_empresa',
    ];

    try {
      $validator = \Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        return [
          'created' => false,
          'errors' => $validator->errors()->all(),
        ];

      } else {
        Propiedad::create($request->all());
        return ['created' => true];
      }

    } catch (\Exception $e) {
      \Log::info('Error creating car: ' . $e);
      return \Response::json(['created' => false], 500);
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
    try {
      return Propiedad::findOrFail($id)->with('empresa')->get();
    } catch (\Exception $e) {
      $data = [
        'errors' => true,
        'msg' => $e->getMessage(),
      ];
      return \Response::json($data, 404);
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
        $propiedad = Propiedad::find($id);
        $propiedad->update($request->all());
        return ['updated' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Propiedad::destroy($id);
        return ['deleted' => true];
    }
}
