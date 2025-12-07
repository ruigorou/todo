@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@section('css')

@section('content')
    <div class="message">
        @if (session('message'))
            <span class="message message__success">{{ session('message') }}</span>
        @elseif(count($errors) > 0)
            <ul class="message__error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="submission">
        <form class="submission__form" action="/todos" method="POST">
            @csrf
            <div class="submission__form-area">
                <input class="submission__form-input" type="text" name="content">
            </div>
            <div>
                <button class="btn submission__form-btn" type="submit">作成</button>
            </div>
        </form>
        <form action="/category">
            @csrf
            <div>
                <input type="text">
            </div>
            <div>
                <button></button>
            </div>
        </form>
        <table>
            <tr>
                <th colspan="2">
                    Todo
                </th>
            </tr>
            @foreach ($todos as $todo)
                <tr>
                    <td colspan="6">
                        <form class="table__content" action="/todos/update" method="POST">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="id" value="{{ $todo->id }}">
                            <div class="table__content-item-1">
                                <input class="table__content-inputbox" type="text" name="content" value="{{ $todo->content }}">
                            </div>
                            <div class="table__content-item-2">
                                <button type="submit" class="btn update-btn">更新</button>
                            </div>
                        </form>
                    </td>
                    <td>
                        <form class="table__content" action="/todos/delete" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{ $todo->id }}">
                            <button type="submit" class="btn delete-btn">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection