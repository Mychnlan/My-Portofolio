<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    //
    public function index($id)
    {
        $data_profil = DB::table('users')->select('id', 'name', 'email', 'username', 'image')->where('id', $id)->get();
        return view('admin.profil', ['data_profil' => $data_profil]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        } else {
            unset($input['image']);
        }

        $dataId = $input['data_id'];
        // $updatedValue = $profileImage;
        $data = Data::find($dataId);

        // Periksa apakah data ditemukan
        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Data not found']);
        }


        $data = Data::find($dataId);
        $data->image = $input['image'];
        $data->save();

        return response()->json(['success' => true]);
    }
    public function validatePassword(Request $request)
    {
        $enteredPassword = $request->input('password');


        $valid = DB::table('users')->where('name', Auth::user()->name)->get();
        // Lakukan validasi password dengan data di database
        foreach ($valid as $row) {
            $validPassword = $row->password;
        }
        // Contoh validasi sederhana
        // $validPassword = '123456';


        if (password_verify($enteredPassword, $validPassword)) {
            return response()->json(['valid' => true]);
        } else {
            return response()->json(['valid' => false]);
        }
    }
    public function show()
    {
    }
}
