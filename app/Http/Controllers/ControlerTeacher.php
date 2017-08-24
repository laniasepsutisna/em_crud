<?php 

namespace App\Http\Controllers;

use App\Teacher;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControlerTeacher extends Controller {
	
	//LIST MEMBER
	public function listTeacher()
	{
		$teacher = Teacher::orderBy('id','desc')->paginate(3);
		// dd($teacher);
		// exit;
        $title = 'List teacher';
		return view('pages.teacher',compact('teacher'))->with('title',$title);
			}
	//HAPUS
	public function deleteTeacher($id) 
	{
		$teacher = Teacher::findOrFail($id);
		$teacher->delete();
		Session::flash('message', 'berhasil dihapus!');

		return redirect('/');    
	} 
	//EDIT
	public function editTeacher(Teacher $teacher)
	{
		$title = 'Edit teacher';
		return view('pages.editteacher',compact('teacher'))->with('title',$title);
	}
	
	//UPDATE
	public function updateTeacher(Request $request, $id) 
	{
		$teacher = Teacher::findOrFail($id);

		$this->validate($request,[
			't_name' => 'required',
			't_course' => 'required'
		]);

		$input = $request->all();
		$teacher->fill($input)->save();
		Session::flash('message', 'Tacher berhasil diedit!');
		
		// return redirect()->back();
		return redirect('/');
    } 
	

}
