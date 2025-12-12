@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
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
            <form action="/categories" method="post">
                @csrf
                <tr>
                    <td colspan="2"><input class="submission__form-input" type="text" name="name"></td>
                    <td colspan="1"><button class="btn submission__form-btn" type="submit">作成</button></td>
                </tr>
            </form>
        </table>
        <div class="blank"></div>
        <table>
            <tr class="list__item-underline">
                <th colspan="2">category</th>
            </tr>
            @foreach ($categories as $category)
                <tr class="list__item-underline">
                    <form action="/categories/update" method="POST">
                        @method('PATCH')
                        @csrf
                        <td colspan="6"><input class="table__content-inputbox" type="text" name="name" value="{{ $category->name }}"></td>
                        <td>
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <button class="btn update-btn" type="submit">更新</button>
                        </td>
                    </form>
                    <form action="/categories/delete" method="POST">
                        @method('DELETE')
                        @csrf
                        <td>
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            <button class="btn delete-btn" type="submit">削除</button>
                        </td>
                    </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection