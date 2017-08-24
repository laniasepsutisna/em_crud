@extends('layouts.default')

@section('content')
<div class="small-12 large-12 column"> 
	<div class="content"> 
		<h2 class="edit-post"> 
			Edit Teacher 
			<span class="right">{{ Html::linkRoute('teacher.list','Cancel',array(),['class' => 'button tiny radius']) }}</span> 
		</h2> 
		<hr> 
		{{ Form::open(['route'=>['teacher.update',$teacher->id]]) }} 
		<div class="row"> 
			<div class="small-5 large-5 column"> 
				{{ Form::label('t_name','Nama Teacher:') }} 
				{{ Form::text('t_name',$anggota->t_name) }} 
			</div> 
		</div> 
		<div class="row"> 
			<div class="small-7 large-7 column"> 
				{{ Form::label('t_course','Course:') }} 
				{{ Form::text('t_course',$anggota->t_course) }} 
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