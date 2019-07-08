<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexpesan()
    {
        $data['pesans'] = Pesan::all();
        $data['no'] = 1;

        return view('admin.pesan', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpesan(Request $r)
    {
        $new = new Pesan;
        $new->pengirim = $r->input('pengirim');
        $new->email = $r->input('email');
        $new->judul = $r->input('judul');
        $new->pesan = $r->input('pesan');

        $new->save();
        return redirect()->url('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $psn = Pesan::find($id);
        if (isset($psn)) {
            $psn->delete();
        }else{
            echo "ada kesalahann !";
        }
        return redirect()->route('pesan.all');
    }
}
