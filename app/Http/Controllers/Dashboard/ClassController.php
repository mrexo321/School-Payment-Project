<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'classes' => Kelas::paginate(3)
        ];
        return view('dashboard.classes.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.classes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'class_name' => 'required|unique:kelas,class_name',
            'major' => 'required|unique:kelas,major'
        ]);

        Kelas::create($validatedData);
        Alert::success('Success' , 'Kelas berhasil ditambahkan');
        return redirect('dashboard/classes');
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
    public function edit(Kelas $class)
    {
        $data = [
            'class' => $class
        ];

        return view('dashboard.classes.edit' , $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Kelas $class)
    {
        $rules = [
            'class_name' => 'required',
            'major' => 'required'
        ];



        if($request->class_name != $class->class_name){
            $validatedData['class_name'] = 'required|unique:kelas';
        }

        if($request->major != $class->major){
            $validatedData['major'] = 'required|unique:kelas';
        }

        $validatedData = $request->validate($rules);

        Kelas::where('class_name', $class->class_name)->update($validatedData);
        Alert::success('Success' , 'Data berhasil di update');
        return redirect('dashboard/classes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $class)
    {
        Kelas::where('class_name' , $class->class_name)->delete();
        Alert::success('Success' , 'Kelas berhasil dihapus');
        return back();
    }
}
