@extends('layouts.formMaster', ['curPage'=>16, 'formType' => 'longForm'])

@section('title', 'Form Page 16')

@section('form')

    @include('partial/formOpen')

	<input type="hidden" name="curPage" value="16" />


	   	<div class="form-row"><h2>Rate and Derivation Form</h2></div>
	    <div class="form-container">
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		<h4>Rate</h4>
	        	</div>
	        	<div class="col-xs-10">
	        		<h4>Is this rate derived? If so, at what dollar amount or percentage?</h4>
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes1', 'Base Rate (ex: BAR)') }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes1')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes2', 'Rack') }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes2')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes3', 'Corporate') }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes3')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes4', 'Government') }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes4')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes5', 'Military' ) }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes5')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes6', 'Weekend') }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes6')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes7', 'Travel Agent') }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes7')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes8', 'Seniors' ) }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes8')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes9', 'AAA / CAA') }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes9')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes10', 'Special' ) }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes10')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-2">
	        		{{ Form::label('rateTypes11', 'Package' ) }}
	        	</div>
	        	<div class="col-xs-10">
	        		{{Form::text('rateTypes11')}}
	        	</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-12">
	        		{{ Form::label('rateTypes12', 'Travel agent commission % and description (industry standard is 10%):') }}
	        		{{ Form::textarea('rateTypes12', null, array('class' => 'textarea' ) ) }}
	        	</div>
	        </div>
	        <div class="form-row"><br></div>
	        <div class="form-row">
	        	<div class="col-xs-3">
		        	{{ Form::label('rateTypes13', 'If both an extra person and a rollaway are required in a room, does the property charge for each?') }}
				</div>
				<div class="col-xs-9">
					{{Form::text('rateTypes13')}}
				</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-3">
		        	{{ Form::label('rateTypes14', 'Adult roll-away charge:') }}
				</div>
				<div class="col-xs-9">
					{{Form::text('rateTypes14')}}
				</div>
	        </div>
	        <div class="form-row">
	        	<div class="col-xs-3">
		        	{{ Form::label('rateTypes15', 'Child roll-away charge:') }}
				</div>
				<div class="col-xs-9">
					{{Form::text('rateTypes15')}}
				</div>
	        </div>
	    </div>
    	
	@include('partial/formClose')
	{{ Form::close() }}

        @stop