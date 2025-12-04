@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@section('css')

@section('content')
    <div class="message">
        <p>message</p>
    </div>
    <div class="submission">
        <form class="submission__form" action="/todos" method="post">
            @csrf
            <div class="submission__form-area">
                <input class="submission__form-input" type="text" name="content">
            </div>
            <div>
                <button class="btn submission__form-btn" type="submit">作成</button>
            </div>
        </form>
        <table>
            <tr>
                <th>
                    Todo
                </th>
            </tr>
            @foreach ($todos as $todo)
                <tr>
                    <form action="">
                        <td colspan="5">{{ $todo->content }}</td>
                        <td>
                            <button class="btn update-btn">更新</button>
                        </td>
                    </form>
                    <form action="">
                        <td>
                            <button class="btn delete-btn">削除</button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>

@endsection