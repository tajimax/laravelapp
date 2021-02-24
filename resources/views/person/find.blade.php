@extends('layouts.helloapp')

@section('title', 'find')

@section('menubar')
    @parent
    検索ページ
@endsection

@section('content')
    <form action="/person/find" method="post">
            @csrf
            <input type="text" name="input" value="{{ $input }}">
            <input type="submit" value="find">
    </form>
    @if(isset($item))
    <table>
        <th>Data</th>
        <tr>
            <td>{{ $item->getData() }}</td>
        </tr>
    </table>
    @endif
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection