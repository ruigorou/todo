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
    <div class="framework">
        <table>
            <th colspan="2">
                新規作成
            </th>
            <form action="/todos" method="post">
                @csrf
                <tr>
                    <td colspan="2"><input class="submission__form-input" type="text" name="content"></td>

                        <td colspan="1"><select class="category__list" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select></td>
                    <td colspan="1"><button class="btn submission__form-btn" type="submit">作成</button></td>
                </tr>
            </form>
            <th>Todo検索</th>
            <form action="">
                @csrf
                <tr>
                    <td colspan="2"><input class="submission__form-input" type="text" name="content"></td>
                    <td colspan="1"><select class="category__list" name="category-list">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select></td>
                    <td colspan="1"><button class="btn submission__form-btn" type="submit">検索</button></td>
                </tr>
            </form>
        </table>
        <div class="blank"></div>
        <table class="todo__list">
            <tr class="list__item-underline">
                <th colspan="3">Todo</th>
                <th colspan="3">カテゴリ</th>
            </tr>
            @foreach ($todos as $todo)
                <tr class="list__item-underline">
                    <form class="table__content" action="/todos/update" method="POST">
                        @method('PATCH')
                        @csrf
                        <td colspan="3">
                            <input type="hidden" name="id" value="{{ $todo->id }}">
                            <input class="table__content-inputbox" type="text" name="content" value="{{ $todo->content }}">
                        </td>
                        <td colspan="3">
                            <input class="table__content-inputbox" type="text" name="content" value="{{ $todo->category->name }}">
                        </td>
                        <td>
                            <button type="submit" class="btn update-btn">更新</button>
                        </td>
                    </form>
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