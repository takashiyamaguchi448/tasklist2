@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} のタスク詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $tasklist->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklist->id], ['class' => 'btn btn-light']) !!}

    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    
@endsection