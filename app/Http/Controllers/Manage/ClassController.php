<?php

namespace App\Http\Controllers\Manage;

use App\Clas;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        $class = Clas::latest()->paginate(6);
        return view('manage.class.index', compact('class'));
    }
    public function create()
    {
        return view('manage.class.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'          => 'required',
            'walas'         => 'required',
            'jurusan'       => 'required',
            'jumlah'        => 'required',
        ]);

        $class = Clas::create([
            'name'          => $request->name,
            'walas'         => $request->walas,
            'jurusan'       => $request->jurusan,
            'jumlah'        => $request->jumlah,
        ]);

        return redirect()->back();
    }
    public function edit($id)
    {
        $clas = Clas::findOrFail($id);

        return view('manage.class.edit', compact('clas'));
    }
    public function update(Request $request, $id)
    {
        $clas = Clas::findOrFail($id);

        $clas->update($request->all());

        return redirect()->back();
    }
    public function destroy(Request $request, $id)
    {
        $clas = Clas::findOrFail($id);

        $clas->delete($request->all());

        return redirect()->back();
    }
}
