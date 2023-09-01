<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return response()->json($data, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'userDocument' => 'required',
            'creditCardToken' => 'required',
            'value' => 'required|numeric',
        ]);

        $data['userDocument'] = hash('sha512', $data['userDocument']);
        $data['creditCardToken'] = hash('sha512', $data['creditCardToken']);
        $data['value'] = str_replace(',', '.', $data['value']);

        $user = User::create($data);

        if ($user) {
            return response()->json(["msg" => "User created successfully"], 201);
        } else {
            return response()->json(["msg" => "Failed to create user"], 500);
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
        $user = User::findOrFail($id);

        if (!$user) {
            return response()->json(["msg" => "User not found"], 404);
        }

        return response()->json([
            'id' => $user->id,
            'userDocument' => $user->userDocument,
            'creditCardToken' => $user->creditCardToken,
            'value' => $user->value,
        ]);
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
        $data = $request->validate([
            'userDocument' => 'required',
            'creditCardToken' => 'required',
            'value' => 'required|numeric',
        ]);

        $user = User::find($id);

        if (!$user) {
            return response()->json(["msg" => "User not found"], 404);
        }

        $user->update([
            'userDocument' => hash('sha512', $data['userDocument']),
            'creditCardToken' => hash('sha512', $data['creditCardToken']),
            'value' => str_replace(',', '.', $data['value']),
        ]);

        return response()->json(["msg" => "Update successful"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user){
            return response()->json(["msg" => "User not found"], 404);
        }
        $user->delete();
        return response()->json(["msg" => 'User has been deleted',200]);
    }
}
