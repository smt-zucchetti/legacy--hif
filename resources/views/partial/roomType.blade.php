	<div class="form-row">
		<h4 style='color:red;'>Remember to click Save & Continue before exiting page. Clicking on the arrows below will not save your current work.</h4>
		<h3>Room Descriptions {{$i}} (of 10) 
			<i id="rtleft" class="rtleft rtarrow fas fa-arrow-alt-circle-left"></i>
			<i id="rtright" class="rtright rtarrow fas fa-arrow-alt-circle-right"></i>
		</h3>
	</div>
	<div class="form-row"><h4>**Please complete room description for EACH room type</h4></div>
	<div class="form-container">
		<div class="form-row">
			<div class="col-xs-4">
				{{ Form::label('roomTypeCode'.$i, 'Room Type Code', null) }}
				{{ Form::text('roomTypeCode'.$i, null ) }} 
				<!--<label for="roomTypeCode">Room Type Code</label>-->
				{{--<input type="text" name="roomTypeCode{{$i}}" id="roomTypeCode" value="roomTypeCode{{$i}}" />--}}
			</div>
			<div class="col-xs-4">
				{{ Form::label('pmsCode'.$i, 'PMS Code', null) }}
				{{ Form::text('pmsCode'.$i, null ) }} 
				{{--<label for="pmsCode">PMS Code</label>
				<input type="text" name="pmsCode{{$i}}" id="pmsCode" value="{{$roomDescriptions['pmsCode'.$i] }}" />--}}
			</div>
		</div>
		<div class="form-row"><br></div>
		<div class="form-row">
			<div class="col-xs-2">
				{{ Form::label('roomName'.$i, 'Room Name', null) }}
				{{--<label for="roomName">Room Name</label>--}}
			</div>
			<div class="col-xs-10">
				{{ Form::text('roomName'.$i, null, ['placeholder' => 'Example: Deluxe King'] ) }}
				{{--<input type="text" name="roomName{{$i}}" id="roomName" placeholder="Example: Deluxe King" value="{{$roomDescriptions['roomName'.$i] }}" />--}}
			</div>
		</div>
		<div class="form-row">
			<div class="col-xs-2">
				{{ Form::label('marketingLine1'.$i, 'Marketing Line 1', null) }}
				{{--<label for="marketingLine1">Marketing Line 1</label>--}}
			</div>
			<div class="col-xs-10">
				{{ Form::text('marketingLine1'.$i, null, ['placeholder' => '(45 Character Limit)'] ) }}
				{{--<input type="text" name="marketingLine1{{$i}}" id="marketingLine1" placeholder="(45 Character Limit)" value="{{$roomDescriptions['marketingLine1'.$i] }}" />--}}
			</div>
		</div>
		<div class="form-row">
			<div class="col-xs-2">
				{{ Form::label('marketingLine2'.$i, 'Marketing Line 2', null) }}
				{{--<label for="marketingLine2">Marketing Line 2</label>--}}
			</div>
			<div class="col-xs-10">
				{{ Form::text('marketingLine2'.$i, null, ['placeholder' => '(45 Character Limit)'] ) }}
				{{--<input type="text" name="marketingLine2{{$i}}" id="marketingLine2" placeholder="(45 Character Limit)" value="{{$roomDescriptions['marketingLine2'.$i] }}" />--}}
			</div>
		</div>
		<div class="form-row">
			<div class="col-xs-2">
				<label>Room Type</label>
			</div>
			<?php 
				$prop = "roomType".$i; 
			?>
			<div class="col-xs-2">
				{{ Form::label("deluxe".$i, 'Deluxe', null) }}
				{{ Form::radio($prop, 1, null, [$UserData->$prop == 1 ? "checked" : "", "id" => "deluxe".$i]) }}
			</div>
			<div class="col-xs-2">
				{{ Form::label("superior".$i, 'Superior', null) }}
				{{ Form::radio($prop, 2, null, [$UserData->$prop == 2 ? "checked" : "", "id" => "superior".$i]) }}
			</div>
			<div class="col-xs-2">
				{{ Form::label("standard".$i, 'Standard', null) }}
				{{ Form::radio($prop, 3, null, [$UserData->$prop == 3 ? "checked" : "", "id" => "standard".$i]) }}
			</div>
			<div class="col-xs-2">
				{{ Form::label("moderate".$i, 'Moderate', null) }}
				{{ Form::radio($prop, 4, null, [$UserData->$prop == 4 ? "checked" : "", "id" => "moderate".$i]) }}
			</div>
		</div>

		<div class="form-row">
			<div class="col-xs-3">
				{{ Form::label("numRooms".$i, "Number of Rooms (of this type)", null) }}
			</div>	
			<div class="col-xs-3">
				{{ Form::text("numRooms".$i, null ) }}
			</div>
			<div class="col-xs-3">
				{{ Form::label("numBedrooms".$i, "Number of Bedrooms", null) }}
			</div>	
			<div class="col-xs-3">
				{{ Form::text("numBedrooms".$i, null ) }}
			</div>
		</div>
		<div class="form-row">
			<div class="col-xs-3">
				{{ Form::label("maxPersons".$i, "Maximum # Persons w/o Rollaway:") }}
			</div>	
			<div class="col-xs-3">
				{{ Form::text("maxPersons".$i, null) }}
			</div>
			<div class="col-xs-3">
				{{Form::label("maxRollaways".$i, "Maximum # Rollaways") }}
			</div>	
			<div class="col-xs-3">
				{{Form::text("maxRollaways".$i, null)}}
			</div>
		</div>
		<div class="form-row">
			<div class="col-xs-4">
				{{Form::label("beddingInfo".$i, "Bedding Configuration and Number of Beds:")}}
				{{--<label for="beddingInfo">Bedding Configuration and Number of Beds:</label>--}}
			</div>
			<div class="col-xs-8">
				{{Form::text("beddingInfo".$i)}}
				{{--<input type="text" name="beddingInfo{{$i}}" id="beddingInfo" value="{{ $roomDescriptions['beddingInfo'.$i] }}" />--}}
			</div>
		</div>
		<div class="form-row">
			<div class="col-xs-3">
				{{Form::label("king".$i, "King")}}
				{{--<label for="king">King</label>--}}
				{{Form::checkbox("king".$i, 1)}} <br>
				{{--<input type="checkbox" name="king{{$i}}" id="king" value="1" {{ $roomDescriptions["king".$i] == 1 ? "checked":"" }} /><br>--}}
				
				{{Form::label("kingNum".$i, "Number")}}
				{{--<label for="kingNum">Number</label>--}}
				{{Form::text("kingNum".$i, null, ["class" => "very-short-input-box"])}} 
				{{--<input type="text" name="kingNum{{$i}}" class="very-short-input-box" value="{{ $roomDescriptions["kingNum".$i] }}" />--}}
			</div>
			<div class="col-xs-3">
				{{Form::label("queen".$i, "Queen")}}
				{{--<label for="queen">Queen</label>--}}
				{{Form::checkbox("queen".$i, 1)}} <br>
				{{--<input type="checkbox" name="queen{{$i}}" id="queen" value="1" {{ $roomDescriptions["queen".$i] == 1 ? "checked":"" }} /><br>--}}
				
				{{Form::label("queenNum".$i, "Number")}}
				{{--<label for="queenNum">Number</label>--}}
				{{Form::text("queenNum".$i, null, ["class" => "very-short-input-box"])}} 
				{{--<input type="text" name="queenNum{{$i}}" class="very-short-input-box" value="{{ $roomDescriptions["queenNum".$i] }}" />--}}
			</div>
			<div class="col-xs-3">
				{{Form::label("doubleFull".$i, "Double/Full")}}
				{{--<label for="doubleFull">Double/Full</label>--}}
				{{Form::checkbox("doubleFull".$i, 1)}} <br>
				{{--<input type="checkbox" name="doubleFull{{$i}}" id="doubleFull" value="1" {{ $roomDescriptions["doubleFull".$i] == 1 ? "checked":"" }} /><br>--}}

				{{Form::label("doubleFullNum".$i, "Number")}}
				{{--<label for="doubleFullNum">Number</label>--}}
				{{Form::text("doubleFullNum".$i, null, ["class" => "very-short-input-box"])}} 
				{{--<input type="text" name="doubleFullNum{{$i}}" class="very-short-input-box" value="{{ $roomDescriptions["doubleFullNum".$i] }}" />--}}
			</div>
			<div class="col-xs-3">
				{{Form::label("twin".$i, "Twin")}}
				{{--<label for="twin">Twin</label>--}}
				{{Form::checkbox("twin".$i, 1)}} <br>
				{{--<input type="checkbox" name="twin{{$i}}" id="twin" value="1" {{ $roomDescriptions["twin".$i] == 1 ? "checked":"" }} /><br>--}}

				{{Form::label("twinNum".$i, "Number")}}
				{{--<label for="twinNum">Number</label>--}}
				{{Form::text("twinNum".$i, null, ["class" => "very-short-input-box"])}} 
				{{--<input type="text" name="twinNum{{$i}}" class="very-short-input-box" value="{{ $roomDescriptions['twinNum'.$i] }}" />--}}
			</div>
		</div>
		
		<div class="form-row">
			<div class="col-xs-12">
				{{Form::label("detailedRoomDesc".$i, "Detailed Room Description:")}}
				{{--<label for="detailedRoomDesc">Detailed Room Description:</label>--}}
				{{Form::textarea("detailedRoomDesc".$i, null, ["class" => "textarea"])}}
				{{--<textarea name="detailedRoomDesc{{$i}}" id="detailedRoomDesc" class="textarea">{{ $roomDescriptions["detailedRoomDesc".$i] }}</textarea>--}}
			</div>
		</div>
		<div class="form-row">
			@php 
				$x = 0; 
				$values = ['No Smoking','Balcony','Private Bathroom','Hair Dryer (on request)','Telephone','Safe Box','TV','DVD','Radio','Internet (high speed)','Laundry Service','Coffee/Tea Maker','Iron/Board','Show No Smoking Icon','Fireplace','Thermal Bath','Jetted Bath','Fax','Desk','LCD TV','VCR','Hi-Fi System','Internet (WiFi)','Bathrobe','Kitchen','Iron/Board on request','Terrace','Air Conditioning','Hair Dryer','Alarm Clock','Mini Bar','Dogs Allowed','Satellite TV','VCR (on request)','Internet (Modem)','Daily Newspaper','Pool Towels','Microwave','Trouser Press'];

				$keys = ['noSmoking','balcony','privateBathroom','hairDryer','telephone','safeBox','TV','DVD','radio','internetHighSpeed','laundryService','coffeeTeaMaker','ironBoard','showNoSmokingIcon','fireplace','thermalBath','jettedBath','fax','desk','LCDTV','VCR','hiFiSystem','internetWiFi','bathrobe','kitchen','ironBoardOnRequest','terrace','airConditioning','hairDryer2','alarmClock','miniBar','dogsAllowed','satelliteTV','VCRonRequest','internetModem','dailyNewspaper','poolTowels','microwave','trouserPress'];
				$res = array_combine($keys, $values);

				//dd($res);
				//dd($roomAmenities); 
			@endphp
			@foreach($res as $key => $value)
	        	@php 
	        		//$checked = ($value == 1) ? "checked":""; 
	        	@endphp
	        	<div class="col-xs-3">
	        		{{Form::label($key.$i, $value)}}
	        		{{--<label for="{{$key}}">{{$labels[$x]}}</label>--}}
	        		{{Form::checkbox($key.$i, 1)}}
	    	    	{{--<input type="checkbox" name="{{$key}}" id="{{$key}}" value="1" {{$checked}} />--}}
				</div>

	            @php 
	            	$x++;
	            @endphp
        	@endforeach
    	</div>
  
	    <div class="form-row">
	    	<div class="col-xs-1">
	    		{{Form::label("other1".$i, "Other")}}
	    		{{--<label for="other1">Other</label>--}}
	    	</div>
	    	<div class="col-xs-2">
	    		{{Form::text("other1".$i)}}
	    		{{--<input type="text" name="other1{{$i}}" id="other1" value="{{$roomDescriptions['other1'.$i]}}" />--}}
	    	</div>
	    	<div class="col-xs-1">
	    		{{Form::label("other2".$i, "Other")}}
	    		{{--<label for="other2">Other</label>--}}
	    	</div>
	    	<div class="col-xs-2">
	    		{{Form::text("other2".$i)}}
	    		{{--<input type="text" name="other2{{$i}}" id="other2" value="{{$roomDescriptions["other2".$i] }}" />--}}
	    	</div>
	    	<div class="col-xs-1">
	    		{{Form::label("other3".$i, "Other")}}
	    		{{--<label for="other3">Other</label>--}}
	    	</div>
	    	<div class="col-xs-2">
	    		{{Form::text("other3".$i)}}
	    		{{--<input type="text" name="other3{{$i}}" id="other3" value="{{$roomDescriptions["other3".$i] }}" />--}}
	    	</div>
	    </div>
	    <div class="form-row"><br></div>
	    <div class="form-row">
	    	<div class="col-xs-12">Describe the view from this room (check the most appropriate descriptions):</div> 
	    </div>
	    <div class="form-row">
	    	<div class="col-xs-3">
	    		{{Form::label("lakeView".$i, "Lake View")}}
	    		{{--<label for="lakeView">Lake View</label>--}}
	    		{{Form::checkbox("lakeView".$i, 1)}} 
	    		{{--<input type="checkbox" name="lakeView{{$i}}" value="1" id="lakeView" {{$roomDescriptions["lakeView".$i] == 1?"checked":"" }} />--}}
	    	</div>
	    	<div class="col-xs-3">
	    		{{Form::label("seaView".$i, "Sea View")}}
	    		{{--<label for="seaView">Sea View</label>--}}
	    		{{Form::checkbox("seaView".$i, 1)}}
	    		{{--<input type="checkbox" name="seaView{{$i}}" value="1" id="seaView" {{ $roomDescriptions["seaView".$i] == 1?"checked":"" }} />--}}
	    	</div>
	    	<div class="col-xs-3">
	    		{{Form::label("mtView".$i, "Mountain View")}}
	    		{{--<label for="mtView">Mountain View</label>--}}
	    		{{Form::checkbox("mtView".$i, 1)}}
	    		{{--<input type="checkbox" name="mtView{{$i}}" value="1" id="mtView" {{$roomDescriptions["mtView".$i] == 1?"checked":"" }} />--}}
	    	</div>
	    	<div class="col-xs-3">
	    		{{Form::label("parkView".$i, "Park View")}}
	    		{{--<label for="parkView">Park View</label>--}}
	    		{{Form::checkbox("parkView".$i, 1) }}
	    		{{--<input type="checkbox" name="parkView{{$i}}" value="1" id="parkView" {{ $roomDescriptions["parkView".$i] == 1?"checked":"" }} />--}}
	    	</div>
	    </div>
</div>