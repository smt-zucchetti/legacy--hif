@extends('layouts.formMaster', ['curPage' => 3])

@section('title', 'Form Page 1')

@section('form')

    @include('partial/formOpen')
    
    <input type="hidden" name="curPage" value="3" />

    @include('partial/paginatedForms/main', [
        'formCount' => 5,
        'formsName' => 'Room Descriptions',
        'formsFile' => 'roomDescCMForm'
    ])    
   
    @include('../partial/formClose')

    {{ Form::close() }}

@stop