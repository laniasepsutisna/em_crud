<!-- lakukan setiap hal baru  -->
@extends('layouts.default')
@section('content')
  
  <h4>DATA GURU</h4>
  <p>Ini adalah data guru keseluruhan English Muslim yang menjadi bagian penting dari English Muslim. Didalam data guru kamu bisa melakukan beberapa management terkait data guru. Contohnya kamu bisa melakukan <code>Tambah</code>, <code>Edit</code>, <code>Hapus</code> dan <code>Laporan</code> guru yang bisa diproses.</p>

<div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID Teacher</th>
              <th>Name</th>
              <th>Birthday</th>
              <th>Course</th>
              <th>Schedule Day</th>
              <th>Schedule Time</th>
              <th>Edit</th>
              <th>Delete</th>

             

   
        </tr>
        <tbody>
         @foreach($teacher as $data)
                <tr>
                    <td>{{ $data->id}}</td>
                    <td>{{ $data->t_name }}</td>
                    <td>{{ $data->t_birthday }}</td>
                    <td>{{ $data->t_course }}</td>
                    <td>{{ $data->t_schedule_day }}</td>
                    <td>{{ $data->t_schedule_time }}</td>
                    <td>
                        <a href="{{ route('teacher.edit',$data->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                        {{-- Html::linkRoute('teacher.edit','Edit',$data->id) --}}
                    </td>
               
                     <td>
                        <a href="{{ route('teacher.delete',$data->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                        {{-- Html::linkRoute('teacher.delete','Delete',$data->id) --}}
                    </td>
                </tr>
         @endforeach
        </tbody>
      </thead>
    
    </table>
    </div> 
@stop

 
 