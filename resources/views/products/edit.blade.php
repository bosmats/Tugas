@extends('adminlte::page')
@section('title', 'Profile')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ url('/home') }}">Dashboard</a></li>
                <li><a href="{{ url('/products') }}">Profiles</a></li>
                <li class="active">Ubah Profile</li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Ubah Profile</h2>
                </div>

                <div class="panel-body">
                    {!! Form::model($products, ['url' => route('products.update', $products->id),
                    'method' => 'put', 'files' => 'true', 'class' => 'form-horizontal']) !!}
                    @include('products._formedit')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection