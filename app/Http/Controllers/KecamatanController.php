<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Kecamatan;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KecamatanController extends Controller
{
    public function index(Type $var = null)
    {
        $kecamatan = Kecamatan::with(['puskesmas'])->get();

        // dd($kelurahan)->all();
        // dd($kelurahan)->all();
        // dd($kecKel);

        return view('kecamatan', ['kecamatan' => $kecamatan]);
    }

    public function create()
    {
        $kecamatan = Kecamatan::get();
        $puskesmas = Puskesmas::get();
        return view('add.kecamatan-add', ['kecamatan' => $kecamatan, 'puskesmas' => $puskesmas]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [];
        $messages = [];
        $rules['nama'] = 'unique:kecamatan|max:50|required';
        $messages['nama.unique'] = 'Kecamatan sudah ada!';
        $messages['nama.max'] = 'Nama tidak boleh lebih dari :max karakter!';
        $messages['nama.required'] = 'Nama wajib diisi!';

        $rules['geojson'] = 'unique:kecamatan|required';
        $messages['geojson.unique'] = 'geoJSON Sudah ada!';
        $messages['geojson.required'] = 'geoJSON wajib Diisi!';

        $rules['warna_fill'] = 'unique:kecamatan|required';
        $messages['warna_fill.unique'] = 'Warna Fill sudah ada!';
        $messages['warna_fill.required'] = 'Warna Fill wajib diisi!';

        $request->validate($rules, $messages);

        $kasus = Kecamatan::create($request->all());

        if ($kasus) {
            Session::flash('succMessage', 'Kecamatan berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Kecamatan gagal ditambahkan!');
        }

        return redirect('/kecamatan');
    }

    public function edit($id)
    {
        $puskesmas = Puskesmas::get();
        $kecamatan = Kecamatan::with('puskesmas')->findOrFail($id);

        //  dd($kecamatan->all());

        return view('edit.kecamatan-edit', ['kecamatan' => $kecamatan, 'puskesmas' => $puskesmas]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $kecamatan = Kecamatan::findOrFail($id);

        if ($request->nama != $kecamatan->nama) {
            $rules['nama'] = 'unique:kecamatan|max:50|required';
            $messages['nama.unique'] = 'Nama Kecamatan Sudah ada!';
            $messages['nama.required'] = 'Kecamatan wajib Diisi!';
            $messages['nama.max'] = 'Nama Kecamatan tidak boleh lebih dari :max karakter!';
        }

        if ($request->geojson != $kecamatan->geojson) {
            $rules['geojson'] = 'unique:kecamatan|required';
            $messages['geojson.unique'] = 'geoJSON Sudah ada!';
            $messages['geojson.required'] = 'geoJSON wajib Diisi!';
        }

        if ($request->warna_fill != $kecamatan->warna_fill) {
            $rules['warna_fill'] = 'unique:kecamatan|required';
            $messages['warna_fill.unique'] = 'Warna Fill sudah ada!';
            $messages['warna_fill.required'] = 'Warna Fill wajib diisi!';
        }

        $request->validate($rules, $messages);

        $result = $kecamatan->update($request->all());


        if ($result) {
            Session::flash('succMessage', 'Kecamatan berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Kecamatan gagal diubah!');
        }

        return redirect('/kecamatan');
    }

    public function destroy($id)
    {
        $kecamatan = Kecamatan::findOrFail($id);
        $result = $kecamatan->delete();

        if ($result) {
            Session::flash('succMessage', 'Kecamatan berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Kecamatan gagal dihapus!');
        }

        return redirect('/kecamatan');
    }

    public function request()
    {
        $kecamatan = Kecamatan::with(['puskesmas.kelurahan.kasus'])->get();
        return response()->json([$kecamatan]);
    }
}