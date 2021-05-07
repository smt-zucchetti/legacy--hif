@extends('layouts.formMaster', ['curPage'=>4])

@section('title', 'Form Page 5')

@section('form')

   @include('partial/formOpen')

    <input type="hidden" name="curPage" value="4" />

    <div class="form-group row">
        <div class="col-xs-6">
            {{ Form::label('paymentPolicy', 'Payment Policy') }}
            {{ Form::textarea('paymentPolicy', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="form-group row">
        <div class="col-xs-6">
            {{ Form::label('cancellationPolicy', 'Cancellation Policy') }}
            {{ Form::textarea('cancellationPolicy', null, array('class' => 'form-control')) }}
        </div>
    </div>

    @include('../partial/formClose')
    {{ Form::close() }}

@stop