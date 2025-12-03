@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@section('css')

@section('content')
    <div class="message">
        <p>message</p>
    </div>
    <div class="submission">
        <form class="submission__form" action="" method="post">
            <div class="submission__form-area">
                <input class="submission__form-input" type="text">
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
            <tr>
                <form action="">
                    <td colspan="5">cell</td>
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
        </table>
    </div>

@endsection