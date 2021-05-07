@extends('layouts.formMaster', ['curPage'=>14, 'formType' => 'longForm'])

@section('title', 'Form Page 14')

@section('form')

   @include('partial/formOpen')


		<input type="hidden" name="curPage" value="14" />
		
		<div class="form-row"><h2>Additional Information</h2></div>
		<div class="form-row">
			<div class="col-xs-3">{{ Form::label('propMgmtSystemUsed', 'Property Management System Used') }}</div>
			<div class="col-xs-9">{{ Form::text('propMgmtSystemUsed', null, ['class' => 'form-control']) }}</div>
		</div>
		<div class="form-row"><br>
			<div class="col-xs-3">{{Form::label('managementCompany', 'Management Company') }}</div>
			<div class="col-xs-9">{{ Form::text('managementCompany', null, ['class' => 'form-control']) }}</div>
		</div>
		<br><br>
		
		<div class="form-row"><h2>Hotel Classification</h2></div>
		<div class="form-row"><h4>(Please check only one)</h4></div>
		<div class="form-container">
			<div class="form-row">
				<div class="col-xs-6">{{ Form::radio('hotelClass', '1', null, ['id' => 'hotelClassr1']) }} {{ Form::label('hotelClassr1', 'Luxury / Deluxe (Superior)') }}</div>
				<div class="col-xs-6">{{ Form::radio('hotelClass', '2', null, array('id' => 'hotelClassr2')) }} {{ Form::label('hotelClassr2', 'First Class (Above Average)' ) }}</div>
			</div>
			<div class="form-row">
				<div class="col-xs-6">{{ Form::radio('hotelClass', '3', null, array('id' => 'hotelClassr3')) }} {{ Form::label('hotelClassr3', 'Standard (Moderate)') }}</div>
				<div class="col-xs-6">{{ Form::radio('hotelClass', '4', null, array('id' => 'hotelClassr4')) }} {{ Form::label('hotelClassr4', 'Tourist (Budget)' ) }}</div>
			</div>
			<div class="form-row">
				<div class="col-xs-3">{{ Form::label('hotelClass2', '% Of Corporate Business') }}</div>
				<div class="col-xs-3">{{ Form::text('hotelClass2', null) }} </div>
				<div class="col-xs-3">{{ Form::label('hotelClass3', '% Of Leisure Business' ) }}</div>
				<div class="col-xs-3">{{ Form::text('hotelClass3', null) }} </div>
			</div>
		</div>
		<br><br>
		
		<div class="form-row"><h2>Awards</h2></div>
		<div class="form-row"><h4>List any awards your hotel has received:</h4></div>
		<div class="form-container">
			<div class="form-row">
				<div class="col-xs-1">{{ Form::label('name1', 'Name:') }}</div>
				<div class="col-xs-4">{{ Form::text('name1', null, array('class' => 'form-control')) }}</div>
				<div class="col-xs-2">{{ Form::label('yearReceived1',' Year Received:') }}</div>
				<div class="col-xs-5">{{ Form::text('yearReceived1', null, array('class' => 'form-control')) }}</div>
			</div>
			<div class="form-row">
				<div class="col-xs-1">{{ Form::label('description1', 'Description:') }}</div>
				<div class="col-xs-11">{{ Form::textarea('description1', null, array('class' => 'textarea')) }}</div>
			</div>
			<div class="form-row"><br></div>
			<div class="form-row">
				<div class="col-xs-1">{{ Form::label('name2', 'Name:') }}</div>
				<div class="col-xs-4">{{ Form::text('name2', null, array('class' => 'form-control')) }}</div>
				<div class="col-xs-2">{{ Form::label('yearReceived2',' Year Received:') }}</div>
				<div class="col-xs-5">{{ Form::text('yearReceived2', null, array('class' => 'form-control')) }}</div>
			</div>	
			<div class="form-row">
				<div class="col-xs-1">{{ Form::label('description2', 'Description:') }}</div>
				<div class="col-xs-11">{{ Form::textarea('description2', null, array('class' => 'textarea')) }}</div>
			</div>
		</div>
		<br><br>
		<div class="form-row"><h2>General Information</h2></div>
		<div class="form-row"><h4>Please include any additional information about the hotel that does not fall into a previous category / section.</h4></div>
		<div class="form-row">
			{{ Form::textarea('hotelAdditionalInfo', null, array('class' => 'textarea')) }}
		</div>
		<br><br>
		<div class="form-row"><h2>Room Inventory</h2></div>
		<div class="form-container">
			<div class="form-row">
				<div class="col-xs-4">{{ Form::label('roomInventory1', 'Number of Suites:') }}</div>
				<div class="col-xs-1">{{ Form::text('roomInventory1', null, array('class' => 'form-control')) }}<br></div>
			</div>
			<div class="form-row">
				<div class="col-xs-4">{{ Form::label('roomInventory2', 'Number of Rooms:') }}</div>
				<div class="col-xs-1">{{ Form::text('roomInventory2', null, array('class' => 'form-control')) }}<br></div>
			</div>
			<div class="form-row">
				<div class="col-xs-4">{{ Form::label('roomInventory3', 'TOTAL Number of Rooms:') }}</div>
				<div class="col-xs-1">{{ Form::text('roomInventory3', null, array('class' => 'form-control')) }}<br></div>
			</div>
			<div class="form-row">
				<div class="col-xs-4">{{ Form::label('roomInventory4', 'Number of Smoking Suites:') }}</div>
				<div class="col-xs-1">{{ Form::text('roomInventory4', null, array('class' => 'form-control')) }}<br></div>
			</div>
			<div class="form-row">
				<div class="col-xs-4">{{ Form::label('roomInventory5', 'Number of Smoking Rooms:') }}</div>
				<div class="col-xs-1">{{ Form::text('roomInventory5', null, array('class' => 'form-control')) }}<br></div>
			</div>
			<div class="form-row">
				<div class="col-xs-4">{{ Form::label('roomInventory6', 'Number of Handicapped Accessible Rooms:') }}</div>
				<div class="col-xs-1">{{ Form::text('roomInventory6', null, array('class' => 'form-control')) }}</div>
			</div>
		</div>

@include('partial/formClose')
	{{ Form::close() }}


@stop

