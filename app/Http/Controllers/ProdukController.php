<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexproduk()
    {
        $data['produks'] = Produk::all();
        $data['no'] = 1;

        return view('admin.produk', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createproduk()
    {
        $addprd['produks'] = Produk::all();
        return view('admin.addproduk', $addprd);
    }

    public function storeproduk(Request $r)
    {   
        // dd($r);
        $this->validate($r, [
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $new = new Produk;

        $new->produk = $r->input('produk');
        $new->detail = $r->input('detail');
        $new->teknologi = $r->input('teknologi');
        $new->tanggal = $r->input('tanggal');

        if ($r->hasFile('picture')) {
            $image = $r->file('picture');
            $name = time().'.'.$image->getClientOriginalExtension();
            $new->picture = $name;
            $destinationPath = public_path('/picture_product');
            $image->move($destinationPath, $name);
        }
        $new->save();
        return view('admin.produk');
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
        $prd = Produk::find($id);
        if (isset($prd)) {
            $prd->delete();
        }else{
            echo "ada kesalahann !";
        }
        return redirect()->route('produk.all');
    }
}
