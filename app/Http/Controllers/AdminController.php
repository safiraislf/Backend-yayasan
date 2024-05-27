<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Daftar;
use App\Models\Infaq;
use App\Models\Observasi;
use App\Models\Token;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function alluser()
    {
        $data = User::get();

        return view('admin.alluser', compact('data'));
    }

    public function create()
    {

        return view('admin.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->name;
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('alluser');
    }

    public function edit(Request $request, $id)
    {
        $data = User::find($id);

        return view('edit', compact('data'));
    }

    public function upgrade(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'nullable',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->name;

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }


        User::whereid($id)->update($data);

        return redirect()->route('alluser');
    }

    public function delete(Request $request, $id)
    {
        $data = User::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('min.alluser');
    }

    public function datatoken()
    {
        // $data = Infaq::get();


        return view('admin.datatoken', [
            'data' => Token::all()
        ]);
    }

    public function datainfaq()
    {
        // $data = Infaq::get();


        return view('admin.datainfaq', [
            'data' => Infaq::all()
        ]);
    }


    public function konfirmasi(Request $request)
    {
        Infaq::where('id', $request->id)->update(['status' => 'Yes']);
        return redirect()->route('min.datainfaq');
    }

    public function confirm(Request $request)
    {
        Token::where('id', $request->id)->update(['status' => 'Yes']);
        return redirect()->route('min.datatoken');
    }

    public function hapus(Request $request, $id)
    {
        $data = Infaq::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('min.datainfaq');
    }


    public function remove(Request $request, $id)
    {
        $data = Token::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('min.datatoken');
    }
    public function datadaftar(){
        $data = Daftar::get();

        return view('admin.datadaftar',compact('data'));
    }

    public function dataobs(){
        $data = Observasi::get();

        return view('admin.dataobs',compact('data'));
    }

    public function createjadwal()
    {
        return view('admin.createjadwal');
    }

    public function updatejadwal()
    {
        return view('admin.updatejadwal');
    }

    public function storer(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'status' => 'required|string',
            'final' => 'required|string',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator);

        $data['name'] = $request->name;
        $data['date'] = $request->date;
        $data['status'] = $request->status;
        $data['final'] = $request->final;

        Observasi::create($data);

        return redirect()->route('min.dataobs');
    }



    public function update(Request $request,$id)
    {

        $data = Observasi::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'status' => 'required|string',
            'final' => 'required|string',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator);

        $data['name'] = $request->name;
        $data['date'] = $request->date;
        $data['status'] = $request->status;
        $data['final'] = $request->final;

        Observasi::whereId($id)->create($data);

        return redirect()->route('min.dataobs');
    }

}
