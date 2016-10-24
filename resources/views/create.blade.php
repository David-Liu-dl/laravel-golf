@extends('book')

@section('content')
    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::open() !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('cus_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('cus_phone', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('cus_email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('hand', 'Handside:') !!}
        {!! Form::select('cus_hand', array('L' => 'Left Hand' ,'R' => 'Right Hand')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Booking', ['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

@stop