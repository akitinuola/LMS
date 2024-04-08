{{-- this extend is to carry the body of the dashboard,allow me to utilize template in base --}}
@extends('base')
<link href="{{ url('style/dashboard.css') }}" rel="stylesheet">

@section('body')
<div class="dashboard-header">
    <h1>Dashboard</h1>
    <p>this is the dashboard page</p>
</div>
@stop
