@extends('layouts.default')

@section('content')
    <div class="small-12 large-12 column">
        <div class="content">
            <h2 class="edit-post">
                Edit Students
                <span class="right">{{ Html::linkRoute('students.list','Cancel',array(),['class' => 'button tiny radius']) }}</span>
            </h2>
            <hr>
            {{ Form::open(['route'=>['students.update',$students->id_student]]) }}
            <div class="row">
                <div class="small-5 large-5 column">
                    {{ Form::label('name_student','Nama Students:') }}
                    {{ Form::text('name_student',$students->name_student) }}
                </div>
            </div>
            <div class="row">
                <div class="small-7 large-7 column">
                    {{ Form::label('address_student','Address:') }}
                    {{ Form::text('address_student',$students->address_student) }}
                </div>
            </div>
            @if($errors->has())
                @foreach($errors->all() as $error)
                    <div data-alert class="alert-box warning round">
                        {{ $error }}
                        <a href="#" class="close">&times;</a>
                    </div>
                @endforeach
            @endif
            {{ Form::submit('Update',['class'=>'button tiny radius']) }}
            {{ Form::close() }}
        </div>
    </div>
@endsection