@extends('layouts.app')


@section('content')

    <h1>{{ Auth::user()->name }}のid: {{ $task->id }} のタスク編集ページ</h1>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        <div class="form-group">
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content',old('content'),['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('status', 'ステータス:') !!}
            {!! Form::select('status', config('status'),old('status'),['class'=>'form-control'])!!}
        </div>

        {!! Form::submit('更新',['class'=>'btn btn-default']) !!}

    {!! Form::close() !!}
    </div>
</div>
@endsection
