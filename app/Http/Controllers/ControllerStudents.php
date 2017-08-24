<?php
/**
 * Created by PhpStorm.
 * User: Asus N43S
 * Date: 8/24/2017
 * Time: 8:58 PM
 */

namespace App\Http\Controllers\Auth;


class ControllerStudents
{
//LIST MEMBER
    public function listStudents()
    {
        $students = Students::orderBy('id_student','desc')->paginate(3);

        // exit;
        $title = 'List Students';
        return view('pages.students',compact('em_students'))->with('title',$title);
    }
    //HAPUS
    public function deleteStudents($id_student)
    {
        $students = Students::findOrFail($id_student);
        $students->delete();
        Session::flash('message', 'berhasil dihapus!');

        return redirect('/');
    }
    //EDIT
    public function editStudents(Students $students)
    {
        $title = 'Edit Students';
        return view('pages.editstudents',compact('em_students'))->with('title',$title);
    }

    //UPDATE
    public function updateStudents(Request $request, $id_student)
    {
        $students = Students::findOrFail($id_student);

        $this->validate($request,[
            'name_student' => 'required',
            'address_student' => 'required'
        ]);

        $input = $request->all();
        $students->fill($input)->save();
        Session::flash('message', 'Students berhasil diedit!');

        // return redirect()->back();
        return redirect('/');
    }
}