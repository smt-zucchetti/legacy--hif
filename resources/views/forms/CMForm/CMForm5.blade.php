@extends('layouts.formMaster', ['curPage'=> 5])

@section('title', 'Form Page 5')

@section('form')

    @include('partial/formOpen')

    <input type="hidden" name="curPage" value="5" />

    @include('partial/paginatedForms/main', [
        'formCount' => 3,
        'formsName' => 'Product Rate',
        'formsFile' => 'productRateCMForm'
    ])

    @include('../partial/formClose')

    {{ Form::close() }}

@stop