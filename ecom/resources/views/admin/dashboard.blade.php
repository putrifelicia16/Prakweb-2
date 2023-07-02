@extends('admin.layout.app')
@section('content')
<h2 style="text-align: center">Hallo {{Auth::user()->name}}</h2>
<h3 style="text-align: center">Ini adalah halaman dashboard</h2>
@endsection
