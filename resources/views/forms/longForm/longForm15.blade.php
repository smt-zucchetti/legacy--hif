@extends('layouts.formMaster', ['curPage' => 15, 'formType' => 'longForm'])

@section('title', 'Form Page 15')

@section('form')

	@include('partial/formOpen')

	<input type="hidden" name="curPage" value="15" />

	@include('partial/paginatedForms/main', [
		'formCount' => 10,
		'formsName' => 'Room Descriptions',
		'formsFile' => 'roomDescLongForm'
	])		

	@include('partial/formClose')

	{{ Form::close() }}

	
@stop