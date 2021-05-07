@extends('layouts.formMaster', ['curPage'=>2])

@section('title', 'Form Page 2')

@section('form')

   @include('partial/formOpen')
<input type="hidden" name="curPage" value="2" />

        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('language', 'Language') }}
                {{ Form::text('language', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('location', 'Location (Time Zone)') }}
                {{ Form::text('location', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('currency', 'Currency') }}
                {{ Form::text('currency', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('creditCardsAccepted', 'Credit Cards Accepted') }}<br>
                {{Form::label('creditCardsAccepted1', 'American Express', ['class' => 'valign-checkbox']) }}
                {{Form::checkbox('creditCardsAccepted1', 1, null, ['id' => 'creditCardsAccepted1', 'class' => 'large-checkbox']) }}

                {{Form::label('creditCardsAccepted2', 'Diners', ['class' => 'valign-checkbox']) }}
                {{Form::checkbox('creditCardsAccepted2', 1, null, ['id' => 'creditCardsAccepted2', 'class' => 'large-checkbox']) }}

                {{Form::label('creditCardsAccepted3', 'Discover', ['class' => 'valign-checkbox']) }}
                {{Form::checkbox('creditCardsAccepted3', 1, null, ['id' => 'creditCardsAccepted3', 'class' => 'large-checkbox']) }}

                {{Form::label('creditCardsAccepted4', 'EnRoute', ['class' => 'valign-checkbox']) }}
                {{Form::checkbox('creditCardsAccepted4', 1, null, ['id' => 'creditCardsAccepted4', 'class' => 'large-checkbox']) }}

                {{Form::label('creditCardsAccepted5', 'JCB', ['class' => 'valign-checkbox']) }}
                {{Form::checkbox('creditCardsAccepted5', 1, null, ['id' => 'creditCardsAccepted5', 'class' => 'large-checkbox']) }}

                {{Form::label('creditCardsAccepted6', 'Master Card', ['class' => 'valign-checkbox']) }}
                {{Form::checkbox('creditCardsAccepted6', 1, null, ['id' => 'creditCardsAccepted6', 'class' => 'large-checkbox']) }}

                {{Form::label('creditCardsAccepted7', 'Unionpay', ['class' => 'valign-checkbox']) }}
                {{Form::checkbox('creditCardsAccepted7', 1, null, ['id' => 'creditCardsAccepted7', 'class' => 'large-checkbox']) }}

                {{Form::label('creditCardsAccepted8', 'Visa', ['class' => 'valign-checkbox']) }}
                {{Form::checkbox('creditCardsAccepted8', 1, null, ['id' => 'creditCardsAccepted8', 'class' => 'large-checkbox']) }} 
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('childAgeRanges', 'Child Age ranges (for child pricing, up to 3 ranges)') }}
                {{ Form::text('childAgeRanges', null, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('taxes', 'Taxes') }}
                {{ Form::text('taxes', null, array('class' => 'form-control')) }}
            </div>
        </div>
        



@include('../partial/formClose')
    {{ Form::close() }}

@stop