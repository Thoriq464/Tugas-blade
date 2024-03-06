@extends('layouts.mainlayout')

@section('title','Tugas')

@section('content')
    <h1>Tugas Membuat Tugas Nilai Mata Kuliah</h1>
    <table class="table">
        <tr>
            <th>No</th>
            <th>Mata Kuliah</th>
            <th>Nilai</th>
        </tr>
        <tr>
            @foreach($nilai as $item => $value)
        </tr>
        <tr>
            <td>
                {{$loop->iteration}}
            </td>
            <td>
                {{$item}}
            </td>
            <td>
                @switch($value)
                    @case($value >= 81)
                        A
                    @break

                    @case($value >= 71)
                        B
                    @break

                    @case($value >= 61)
                        C
                    @break

                    @case($value >= 51)
                        D
                    @break

                   @default
                        E
                @endswitch
            </td>
        </tr>
        @endforeach
    </table>
@endsection
