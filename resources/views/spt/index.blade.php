@extends('layout.master')

@section('content')
    <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/')}}">Dashboard</a>
                </li>
                <li class="active">SPT</li>
                <li>
                    <a href="{{url(/spt/create)}}">Input SPT</a>
                </li>
            </ol>
        </div>
    </div>
@endsection