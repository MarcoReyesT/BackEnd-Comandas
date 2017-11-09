<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\User;
use Input;

class UserController extends Controller
{
  /*
  **
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return User::all();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

  public function store(Request $request){

    $confirmation_code = str_random(30);

    $rules = [
      'email' => 'required|unique:users',
      'password' => 'required',
    ];
    $data = [
      'email' => $request->email,
      'name' => $request->name,
      'password' => $request->password,
      'confirmation_code' => $confirmation_code,
    ];
    try {
      $validator = \Validator::make($data, $rules);
      if ($validator->fails()) {
        return [
          'created' => false,
          'errors' => $validator->errors()->all(),
        ];
      }else{
        Mail::send('email.validarCuenta', 
          ['confirmation_code' => $confirmation_code], function ($message) {
            $message->to(Input::get('email'), Input::get('nombre'))
                ->subject('Por favor verifique su cuenta');
        });
        User::create($data);
        return ['created' => true];
      }
    } catch (\Exception $e) {
      \Log::info('Error creating user: ' . $e);
      return \Response::json(['created' => false], 500);
    }
  }

  public function confirm ($confirmation_code) {

    if (!$confirmation_code) {
      return \Response::json(['confirmation_code' => 'Invalid'], 500);
    }
    $user = User::whereConfirmationCode($confirmation_code)->first();
    if (!$user) {
      return \Response::json(['confirmation_code' => 'Invalid'], 500);
    }
    $user->confirmed = 1;
    $user->confirmation_code = null;
    $user->save();

    return \Response::json(['verified' => true, 'confirmed' => $user->confirmed]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      return User::find($id);
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
      $user = User::find($id);
      $user->update($request->all());
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
