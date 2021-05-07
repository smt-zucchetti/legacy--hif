@extends('layouts.formMaster', ['curPage'=>12, 'formType' => 'longForm'])

@section('title', 'Form Page 12')

@section('form')

   @include('partial/formOpen')
    <input type="hidden" name="curPage" value="12" />

    <div class="form-row"><h2>Services & Amenities</h2></div>
    <div class="form-row"><h4>Some of the services, facilities and amenities listed below will only be referenced in the GDS’s.</h4></div>
    <div class="form-row"><h4>Meeting Facilities</h4></div>
    <div class="form-container">
	    <div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('numberMeetingRooms', 'Number Meeting Rooms') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('numberMeetingRooms', null, ['class' => 'form-control']) }}
	        </div>
	    </div>
	  	<div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('totalAreaMeasurement', 'Total Area Measurement') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('totalAreaMeasurement', null, ['class' => 'form-control']) }}
	        </div>
	    </div>
	    <div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('numberOfMeetingPersonnel', 'Number of Meeting Personnel on site') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('numberOfMeetingPersonnel', null, ['class' => 'form-control']) }}
	        </div>
	    </div>
	 	<div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('largestRoomCapacity', 'Largest Room Capacity') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('largestRoomCapacity', null, ['class' => 'form-control', 'placeholder' => '(no of people)']) }}
	        </div>
	    </div>
	    <div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('smallestRoomCapacity', 'Smallest Room Capacity') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('smallestRoomCapacity', null, ['class' => 'form-control', 'placeholder' => '(no of people)']) }}
	        </div>
	    </div>
	    <div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('largestRoomMeasurements', 'Largest Room Measurements') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('largestRoomMeasurements', null, ['class' => 'form-control']) }}
	        </div>
	    </div>
	    <div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('smallestRoomMeasurements', 'Smallest Room Measurements') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('smallestRoomMeasurements', null, ['class' => 'form-control']) }}
	        </div>
	    </div>
	    <div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('largestRoomSeatingFormat', 'Largest Room Seating Format') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('largestRoomSeatingFormat', null, ['class' => 'form-control']) }}
	        </div>
	    </div>
	    <div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('smallestRoomSeatingFormat', 'Smallest Room Seating Format') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('smallestRoomSeatingFormat', null, ['class' => 'form-control']) }}
	        </div>
	    </div>
	    <div class="form-row">
	        <div class="col-xs-3">
	            {{ Form::label('videoConferencing', 'Video Conferencing') }}
	        </div>
	        <div class="col-xs-6">
	            {{ Form::text('videoConferencing', null, ['class' => 'form-control']) }}
	        </div>
	    </div>
	</div>

	<br><br>
	<div class="form-row"><h2>Languages Spoken</h2></div>
	<div class="form-row"><h4>Spoken by staff members: Please check all that apply</h4></div>
    <div class="form-container">
    	<div class="form-row">
	    	<div class="col-xs-4">
	    		{{ Form::label('language-1', 'Arabic', ['class'=>'checkbox-label'] ) }}
	    		{{ Form::checkbox('arabic', '1', null, ['id' => 'language-1', 'class'=>'large-checkbox']) }} 
	    	</div>
	    	<div class="col-xs-4">
	    		{{ Form::label('language-2', 'German', ['class'=>'checkbox-label']) }}
	    		{{ Form::checkbox('german', '1', null, ['id' => 'language-2', 'class'=>'large-checkbox']) }} 
	    	</div>
	    	<div class="col-xs-4">
	    		{{ Form::label('language-3', 'Russian', ['class'=>'checkbox-label']) }}
	    		{{ Form::checkbox('russian', '1', null, ['id' => 'language-3', 'class'=>'large-checkbox']) }} 
	    	</div>
	    </div>
	    <div class="form-row">
	    	<div class="col-xs-4">
	    		{{ Form::label('language-4', 'Chinese', ['class'=>'checkbox-label']) }}
	    		{{ Form::checkbox('chinese', '1', null, ['id' => 'language-4', 'class'=>'large-checkbox']) }} 
	    	</div>
	    	<div class="col-xs-4">
	    		{{ Form::label('language-5', 'Hebrew', ['class'=>'checkbox-label']) }}
	    		{{ Form::checkbox('hebrew', '1', null, ['id' => 'language-5', 'class'=>'large-checkbox']) }} 
	    	</div>
	    	<div class="col-xs-4">
	    		{{ Form::label('language-6', 'Spanish', ['class'=>'checkbox-label']) }}
	    		{{ Form::checkbox('spanish', '1', null, ['id' => 'language-6', 'class'=>'large-checkbox']) }} 
	    	</div>
    	</div>
    	<div class="form-row">
	    	<div class="col-xs-4">
	    		{{ Form::label('language-7', 'English', ['class'=>'checkbox-label']) }}
	    		{{ Form::checkbox('english', '1', null, ['id' => 'language-7', 'class'=>'large-checkbox']) }} 
	    	</div>
	    	<div class="col-xs-4">
	    		{{ Form::label('language-8', 'Italian', ['class'=>'checkbox-label']) }}
	    		{{ Form::checkbox('italian', '1', null, ['id' => 'language-8', 'class'=>'large-checkbox']) }} 
	    	</div>
	    	<div class="col-xs-4">
	    		{{ Form::label('language-9', 'Other:') }}
	    		{{ Form::text('other1', null, ['id' => 'language-9', 'class' => 'short-input-box']) }} 
	    	</div>
	    </div>
	    <div class="form-row">
	    	<div class="col-xs-4">
	    		{{ Form::label('language-10', 'French', ['class'=>'checkbox-label']) }}
	    		{{ Form::checkbox('french', '1', null, ['id' => 'language-10','class'=>'large-checkbox']) }} 
	    	</div>
	    	<div class="col-xs-4">
	    		{{ Form::label('language-11', 'Japanese', ['class'=>'checkbox-label']) }}
	    		{{ Form::checkbox('japanese', '1', null, ['id' => 'language-11','class'=>'large-checkbox']) }} 
	    	</div>
	    	<div class="col-xs-4">
	    		{{ Form::label('language-12', 'Other:') }}
	    		{{ Form::text('other2', null, ['id' => 'language-12', 'class' => 'short-input-box']) }} 
	    	</div>
	    </div>
	</div>

	<br><br>
	
	<div class="form-row"><h2>Travel Details: Directions</h2></div>
	<div class="form-row"><h4>Please give detailed, but brief, instructions for guests who will be driving to your hotel.</h4></div>
	<div class="form-row">
		{{ Form::textarea('drivingDirections', null, ['class' => 'textarea']) }} 
	</div>
@include('partial/formClose')
	{{ Form::close() }}
@stop
