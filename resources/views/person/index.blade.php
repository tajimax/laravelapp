@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <th>Data</th>
        <tr>
            <td>{{ $item->getData() }}</td>
        </tr>
    </table>
@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection