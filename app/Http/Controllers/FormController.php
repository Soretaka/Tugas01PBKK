<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $messagesError = [
            'required' => ':attribute ini wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute harus diisi maksimal :max karakter',
            'between' => ':attribute harus diantara :min dan :max',
            'gambar.max' => 'size tidak boleh lebih dari 2MB'
        ];
        
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric',
            'test' => 'required|numeric|between:2.50,99.99',
            'gambar' => 'required|mimes:jpg,jpeg,png|max:2048',
        ],$messagesError);
        $imageName = $request->gambar->getClientOriginalName();
        $uploadedImage = $request->file("gambar");
        $uploadedImage->move(public_path().'/images/', $imageName);
        return redirect()->route("tambah-biodata")->with(["biodataAdded" => true, "imageName" => $imageName, "data" => $request->except(["gambar"]),"message" => "success"]); 
    }
}

?>