@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        <br>
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status',["未完","完了"]) !!}
        <br>
        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection
