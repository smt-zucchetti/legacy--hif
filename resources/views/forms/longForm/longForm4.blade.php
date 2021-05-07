@extends('layouts.formMaster', ['curPage'=>4,'formType' => 'longForm'])

@section('title', 'Form Page 4')

@section('form') 
     @include('partial/formOpen')

    	<input type="hidden" name="curPage" value="4" />

    
    <div class="row"><h2>Area Information: Corporate Locations</h2></div> 
	 <div class="form-row myGrid">
	    <div class="col-xs-3 small-text">{{ Form::label('Major Companies or Government Offices') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Distance from Corporation to Hotel') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Compass Direction from Corporation to Hotel') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Directions from Corporation to Hotel') }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('companyName1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCompanyToHotel1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCompanyToHotel1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCompanyToHotel1', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('companyName2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCompanyToHotel2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCompanyToHotel2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCompanyToHotel2', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('companyName3', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCompanyToHotel3', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCompanyToHotel3', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCompanyToHotel3', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('companyName4', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCompanyToHotel4', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCompanyToHotel4', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCompanyToHotel4', null, array('class' => 'form-control')) }}</div>
	</div> 
	<br><br>
	<div class="row"><h2>Area Information: Nearby Cities</h2></div> 
	 <div class="form-row myGrid">
	    <div class="col-xs-3 small-text">{{ Form::label('City and State') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Distance from City to Hotel') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Compass Direction from City to Hotel') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Directions from City to Hotel') }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('cityAndStateName1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCityToHotel1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCityToHotel1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCityToHotel1', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('cityAndStateName2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCityToHotel2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCityToHotel2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCityToHotel2', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('cityAndStateName3', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCityToHotel3', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCityToHotel3', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCityToHotel3', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('cityAndStateName4', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCityToHotel4', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCityToHotel4', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCityToHotel4', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('cityAndStateName5', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCityToHotel5', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCityToHotel5', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCityToHotel5', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('cityAndStateName6', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceCityToHotel6', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionCityToHotel6', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsCityToHotel6', null, array('class' => 'form-control')) }}</div>
	</div>
 	<br><br>
 	<div class="row"><h2>Area Information: Nearest Public Services</h2></div> 
	 <div class="form-row myGrid">
	    <div class="col-xs-4 small-text">{{ Form::label('Military Base, Hospital, Medical Facility, or Installation') }}</div>
	    <div class="col-xs-2 small-text">{{ Form::label('Distance Service to Hotel') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Compass Direction from Service to Hotel') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Directions from Service to Hotel') }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-4">{{ Form::text('serviceName1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-2">{{ Form::text('distanceServiceToHotel1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionServiceToHotel1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsServiceToHotel1', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-4">{{ Form::text('serviceName2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-2">{{ Form::text('distanceServiceToHotel2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionServiceToHotel2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsServiceToHotel2', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-4">{{ Form::text('serviceName3', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-2">{{ Form::text('distanceServiceToHotel3', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionServiceToHotel3', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsServiceToHotel3', null, array('class' => 'form-control')) }}</div>
	</div>
    <br>
	 <div class="form-row myGrid">
	    <div class="col-xs-3 small-text">{{ Form::label('Universities and Colleges') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Distance from Service to Hotel') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Compass Direction from Service to Hotel') }}</div>
	    <div class="col-xs-3 small-text">{{ Form::label('Directions from Service to Hotel') }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('schoolName1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceSchoolToHotel1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionSchoolToHotel1', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsSchoolToHotel1', null, array('class' => 'form-control')) }}</div>
	</div>
	<div class="form-row myGrid">
	    <div class="col-xs-3">{{ Form::text('schoolName2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('distanceSchoolToHotel2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('compassDirectionSchoolToHotel2', null, array('class' => 'form-control')) }}</div>
	    <div class="col-xs-3">{{ Form::text('directionsSchoolToHotel2', null, array('class' => 'form-control')) }}</div>
	</div>

	@include('partial/formClose');

        @stop