@extends('layouts.formMaster', ['curPage'=>1])

@section('title', 'Form Page 1')

@section('form')

    @include('partial/formOpen')

    <input type="hidden" name="curPage" value="1" />

        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('propertyName', 'Property Name') }}
                <span class="required"> * required</span>
                {{ Form::text('propertyName', null, ['class' => 'form-control', 'data-required_field' => 'true']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('streetAddress', 'Street Address') }}
                <span class="required"> * required</span>
                {{ Form::text('streetAddress', null, ['class' => 'form-control','data-required_field' => 'true']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('emailForResDelivery', 'Email for reservation delivery') }}
                <span class="required"> * required</span>
                {{ Form::text('emailForResDelivery', null, ['class' => 'form-control','data-required_field' => 'true']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('additionalEmails', 'Additional emails, if needed') }}
                {{ Form::text('additionalEmails', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('numberRooms', 'Number Rooms') }}
                {{ Form::text('numberRooms', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('checkInTime', 'Check In Time') }}
                {{ Form::text('checkInTime', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('checkOutTime', 'Check Out time') }}
                {{ Form::text('checkOutTime', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('city', 'City') }}
                {{ Form::text('city', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('stateProvince', 'State/Province') }}
                {{ Form::text('stateProvince', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('postalCode', 'Postal Code') }}
                {{ Form::text('postalCode', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('website', 'Website') }}
                {{ Form::text('website', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-xs-6">
                {{ Form::label('telephoneNumber', 'Telephone Number') }}
                {{ Form::text('telephoneNumber', null, ['class' => 'form-control']) }}
            </div>
        </div>
        <?php if($formType == 'BE'): ?>
            {{ Form::label('hotelDescription', 'Hotel Description') }}
            {{ Form::textarea('hotelDescription', null, ['class' => 'form-control']) }}
        <?php endif; ?>

    @include('../partial/formClose')
    {{ Form::close() }}

@stop