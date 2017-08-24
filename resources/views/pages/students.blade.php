<!-- lakukan setiap hal baru  -->
@extends('layouts.default')
@section('content')

<h4>DATA Students</h4>
<p>Ini adalah data Students keseluruhan English Muslim yang menjadi bagian penting dari English Muslim. Didalam data students kamu bisa melakukan beberapa management terkait data students. Contohnya kamu bisa melakukan <code>Tambah</code>, <code>Edit</code>, <code>Hapus</code> dan <code>Laporan</code> students yang bisa diproses.</p>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>

            <th>ID Students</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Address</th>
            <th>Country</th>
            <th>Edit</th>
            <th>Delete</th>




        </tr>
        <tbody>
        @foreach($students as $data)
        <tr>





            <td>{{ $data->id_student}}</td>
            <td>{{ $data->name_student }}</td>
            <td>{{ $data->birthday_student }}</td>
            <td>{{ $data->address_student }}</td>
            <td>{{ $data->country_student }}</td>
            <td>
                <a href="{{ route('students.edit',$data->id_student) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                {{-- Html::linkRoute('students.edit','Edit',$data->id_student) --}}
            </td>

            <td>
                <a href="{{ route('students.delete',$data->id_student) }}"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                {{-- Html::linkRoute('students.delete','Delete',$data->id_student) --}}
            </td>
        </tr>
        @endforeach
        </tbody>
        </thead>

    </table>
</div>
@stop


