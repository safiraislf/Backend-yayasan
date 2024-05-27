<?php

namespace App\Http\Controllers;

use App\Models\Infaq;
use App\Models\Observasi;
use App\Models\Token;
use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function user()
    {
        return view('user.dash');
    }

    public function token()
    {
        $dataExists = Token::where('name', Auth::user()->name)->first();
        $confirm = Token::where('status', 'Yes')->where('name', Auth::user()->name)->first();

        if ($confirm) {

            return redirect()->route('acc.daftar');
        } else {
            return view('user.token', [
                'dataExists' => $dataExists,
                // 'confirm' => $confirm
            ]);
        }
    }

    public function setor(Request $request)
    {

        $request->validate([
            'image'     => 'required|mimes:png,jpg,jpeg|max:2048',
            'name'      => 'required',
            'date'      => 'required|date',
            'status'    => 'required',
        ]);

        try {
            $photo = $request->file('image');
            $filename = date('Y-m-d') . '_' . $photo->getClientOriginalName();
            $path = 'photo-asset/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($photo));
        } catch (\Exception $e) {
            return back()->withErrors(['photo' => 'File upload failed: ' . $e->getMessage()]);
        }

        // Prepare data for insertion
        $data = [
            'date'   => $request->date,
            'name'   => $request->name,
            'status' => $request->status,
            'image'  => $filename,
        ];

        // Create a new Token record
        // Token::create($data);
        Token::create($data);

        // Redirect to the 'datainfaq' route
        return redirect()->route('acc.token');
    }

    public function infaq()
    {
        $dataExists = Infaq::where('name', Auth::user()->name)->first();
        $confirm = Infaq::where('status', 'Yes')->where('name', Auth::user()->name)->first();

        if ($confirm) {
                // dikasih  button
            return redirect()->route('acc.sosialisasi');
        } else {
            return view('user.infaq', [
                'dataExists' => $dataExists,
                // 'confirm' => $confir m
            ]);
        }
    }

    public function stor(Request $request)
    {

        $request->validate([
            'image'     => 'required|mimes:png,jpg,jpeg|max:2048',
            'name'      => 'required',
            'date'      => 'required|date',
            'status'    => 'required',
        ]);

        try {
            $photo = $request->file('image');
            $filename = date('Y-m-d') . '_' . $photo->getClientOriginalName();
            $path = 'photo-asset/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($photo));
        } catch (\Exception $e) {
            return back()->withErrors(['photo' => 'File upload failed: ' . $e->getMessage()]);
        }

        // Prepare data for insertion
        $data = [
            'date'   => $request->date,
            'name'   => $request->name,
            'status' => $request->status,
            'image'  => $filename,
        ];

        // Create a new Token record
        // Token::create($data);
        Infaq::create($data);

        // Redirect to the 'datainfaq' route
        return redirect()->route('acc.infaq');
    }


    public function sosialisasi()
    {
        return view('user.sosialisasi');
    }

    public function daftar()
    {
        return view('user.daftar');
    }


    public function observasi(){
        $data = Observasi::get();

        return view('user.observasi',compact('data'));
    }


    public function stores(Request $request)
    {

        $request->validate([
            'name'      => 'required|string|max:255',
            'parents'      => 'required|string|max:255',
            'gender'        => 'required',
            'lahir'         => 'required|string',
            'jenjang'       => 'required',
            'alamat'        => 'required|string',
            'telepon'       => 'required',
            'berkas'    => 'required|mimes:pdf|max:2048',

        ]);

        try {
            // Handle file upload
            $pdf = $request->file('berkas');
            $filename = date('Y-m-d') . '_' . $pdf->getClientOriginalName();
            $path = 'berkas-asset/' . $filename;

            Storage::disk('public')->put($path, file_get_contents($pdf));
        } catch (\Exception $e) {
            return back()->withErrors(['berkas' => 'File upload failed: ' . $e->getMessage()]);
        }

        // Prepare data for insertion
        $data = [
            'name'    => $request->name,
            'parents' => $request->parents,
            'gender'  => $request->gender,
            'lahir'   => $request->lahir,
            'jenjang' => $request->jenjang,
            'alamat'  => $request->alamat,
            'telepon' => $request->telepon,
            'berkas'  => $filename,
        ];

        // Create a new Token record
        // Token::create($data);
        Daftar::create($data);

        // Redirect to the 'datainfaq' route
        return redirect()->route('acc.observasi');
    }


}
