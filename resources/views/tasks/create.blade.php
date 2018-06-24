@extends('layouts.app')

@section('content')

<h1>{{ Auth::user()->name }}のタスク新規作成ページ</h1>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">

        {!! Form::model($task, ['route' => 'tasks.store']) !!}
            <div class="form-group">
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content',old('content'),['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::select('status',config('status'),old('status'),['class'=>'form-control']) !!}
            </div>

            {!! Form::submit('投稿',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@endsection
