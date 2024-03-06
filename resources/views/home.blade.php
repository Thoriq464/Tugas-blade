@extends('layouts.mainlayout')

@section('title','Home')

@section('content')
    <h1>Ini adalah halaman Home hehe</h1>
    <h2>Selamat datang {{$name}} sama, role kamu di sini adalah {{$role}}</h2>

        <!-- @if($role == 'admin')
            <a href="">Pergi ke halaman admin</a>
        @elseif ($role == 'staff')
            <a href="">Pergi ke halaman gudang</a>
        @else
            <a href="">Pergi ke halaman pengatur</a>
        @endif -->
        <!--
        @switch($role)
            @case( $role == 'admin' )
                <a href="">Pergi ke halaman admin</a>
            @break

            @case(  $role == 'staff' )
                <a href="">Pergi ke halaman gudang</a>
            @break

            @default
                <a href="">Pergi ke halaman pengatur</a>
        @endswitch -->

        <!-- @for($i=0; $i <= 5;$i++ )
            {{$i}} <br>
        @endfor -->

        <!-- @foreach( $buah as $data)
            {{$data}} <br>
        @endforeach -->

    <table class="table">
        <tr>
            <th>No</th>
            <th>Nama Buah</th>
        </tr>
         @foreach($buah as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data}}</td>
        </tr>
         @endforeach
     </table>
</div>
@endsection


