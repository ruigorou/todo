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
    <div class="submission">
        <form class="submission__form" action="" method="POST">
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
                <th colspan="2">
                    category
                </th>
            </tr>
            <tr>
                <td>
                    aaaa
                </td>
                <td>
                    bbbb
                </td>
            </tr>
        </table>
    </div>
@endsection