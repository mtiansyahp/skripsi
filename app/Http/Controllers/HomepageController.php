<?php

namespace App\Http\Controllers;

use App\Models\DataCSV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomepageController extends Controller
{
    //
    public function index(){
        return view('beranda');

    }
    // store logic
    public function storeCsv(Request $request ){
        $validation = Validator::make(
            $request->all(),
            [
                'file-upload' => 'required|mimes:csv,txt|max:2048',
            ],
            [
                'file-upload.required' => 'Inputan File Harus Diisi',
            ]
        );
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }
        $datacsv = new DataCSV();
        $datacsv->data_csv = $request->file('file-upload')->store('csv', 'public');
        if($datacsv->save()){
            
            return redirect()->back()->with('success', 'Selamat Inputan Anda Berhasil Diisi!');
        }
    }

    public function dokumentasi(){
        return view('dokumentasi');
    }
}
