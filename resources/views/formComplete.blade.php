@extends('layouts.formMaster', ['curPage'=>18, 'formType' => ''] )

@section('title', 'Process Complete')

@section('form')
	<h3>The HIF form is now complete</h3>
	<p>Thank you! Vertical Booking will review your form and be in touch.</p>
	<a href="{{ URL::to('/logout') }}">Log Out</a>

 @stop