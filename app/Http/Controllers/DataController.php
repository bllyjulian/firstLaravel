<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    // Metode untuk mengambil data
    public function getData()
    {
        $data = ['message' => 'Data berhasil diambil'];
        return response()->json($data);
    }

    public function postData(Request $request)
    {
        $data = $request->all();
    
        // Logika untuk menyimpan data, misalnya ke database
    
        return view('postdataresult', ['data' => $data]);
    }


    // Metode untuk memperbarui data dengan ID tertentu (metode PUT)
    public function putData(Request $request, $id)
    {
        $updatedData = $request->json()->all();
        // Logika untuk memperbarui data dengan ID tertentu, misalnya ke database

        $response = ['message' => "Data dengan ID $id berhasil diperbarui"];
        return response()->json($response);
    }
}
