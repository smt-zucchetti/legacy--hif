
<div class="form-row"><h4>**Please complete room description for EACH room type</h4></div>
<div class="form-container">
	<div class="form-row">
		<div class="col-xs-4">
			{{ Form::label('roomTypeCode'.$i, 'Room Type Code', null) }}
			{{ Form::text('roomTypeCode'.$i, null ) }} 
		</div>
		<div class="col-xs-4">
			{{ Form::label('pmsCode'.$i, 'PMS Code', null) }}
			{{ Form::text('pmsCode'.$i, null ) }} 
		</div>
	</div>
	<div class="form-row"><br></div>
	<div class="form-row">
		<div class="col-xs-2">
			{{ Form::label('roomName'.$i, 'Room Name', null) }}
		</div>
		<div class="col-xs-10">
			{{ Form::text('roomName'.$i, null, ['placeholder' => 'Example: Deluxe King'] ) }}
		</div>
	</div>
	<div class="form-row">
		<div class="col-xs-2">
			{{ Form::label('marketingLine1'.$i, 'Marketing Line 1', null) }}
		</div>
		<div class="col-xs-10">
			{{ Form::text('marketingLine1'.$i, null, ['placeholder' => '(45 Character Limit)'] ) }}
		</div>
	</div>
	<div class="form-row">
		<div class="col-xs-2">
			{{ Form::label('marketingLine2'.$i, 'Marketing Line 2', null) }}
		</div>
		<div class="col-xs-10">
			{{ Form::text('marketingLine2'.$i, null, ['placeholder' => '(45 Character Limit)'] ) }}
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
		</div>
		<div class="col-xs-8">
			{{Form::text("beddingInfo".$i)}}
		</div>
	</div>
	<div class="form-row">
		<div class="col-xs-3">
			{{Form::label("king".$i, "King")}}
			{{Form::checkbox("king".$i, 1)}} <br>
			{{Form::label("kingNum".$i, "Number")}}
			{{Form::text("kingNum".$i, null, ["class" => "very-short-input-box"])}} 
		</div>
		<div class="col-xs-3">
			{{Form::label("queen".$i, "Queen")}}
			{{Form::checkbox("queen".$i, 1)}} <br>
			{{Form::label("queenNum".$i, "Number")}}
			{{Form::text("queenNum".$i, null, ["class" => "very-short-input-box"])}} 
		</div>
		<div class="col-xs-3">
			{{Form::label("doubleFull".$i, "Double/Full")}}
			{{Form::checkbox("doubleFull".$i, 1)}} <br>
			{{Form::label("doubleFullNum".$i, "Number")}}
			{{Form::text("doubleFullNum".$i, null, ["class" => "very-short-input-box"])}} 
		</div>
		<div class="col-xs-3">
			{{Form::label("twin".$i, "Twin")}}
			{{Form::checkbox("twin".$i, 1)}} <br>
			{{Form::label("twinNum".$i, "Number")}}
			{{Form::text("twinNum".$i, null, ["class" => "very-short-input-box"])}} 
		</div>
	</div>		
	<div class="form-row">
		<div class="col-xs-12">
			{{Form::label("detailedRoomDesc".$i, "Detailed Room Description:")}}
			{{Form::textarea("detailedRoomDesc".$i, null, ["class" => "textarea"])}}
		</div>
	</div>
	<div class="form-row">
		@php 
			$x = 0; 
			$values = ['No Smoking','Balcony','Private Bathroom','Hair Dryer (on request)','Telephone','Safe Box','TV','DVD','Radio','Internet (high speed)','Laundry Service','Coffee/Tea Maker','Iron/Board','Show No Smoking Icon','Fireplace','Thermal Bath','Jetted Bath','Fax','Desk','LCD TV','VCR','Hi-Fi System','Internet (WiFi)','Bathrobe','Kitchen','Iron/Board on request','Terrace','Air Conditioning','Hair Dryer','Alarm Clock','Mini Bar','Dogs Allowed','Satellite TV','VCR (on request)','Internet (Modem)','Daily Newspaper','Pool Towels','Microwave','Trouser Press'];

			$keys = ['noSmoking','balcony','privateBathroom','hairDryer','telephone','safeBox','TV','DVD','radio','internetHighSpeed','laundryService','coffeeTeaMaker','ironBoard','showNoSmokingIcon','fireplace','thermalBath','jettedBath','fax','desk','LCDTV','VCR','hiFiSystem','internetWiFi','bathrobe','kitchen','ironBoardOnRequest','terrace','airConditioning','hairDryer2','alarmClock','miniBar','dogsAllowed','satelliteTV','VCRonRequest','internetModem','dailyNewspaper','poolTowels','microwave','trouserPress'];
			$res = array_combine($keys, $values);
		@endphp
		@foreach($res as $key => $value)
      <div class="col-xs-3">
    		{{Form::label($key.$i, $value)}}
    		{{Form::checkbox($key.$i, 1)}}
			</div>
      @php 
        $x++;
      @endphp
    @endforeach
  </div>
  <div class="form-row">
  	<div class="col-xs-1">
  		{{Form::label("other1".$i, "Other")}}
  	</div>
  	<div class="col-xs-2">
  		{{Form::text("other1".$i)}}
  	</div>
  	<div class="col-xs-1">
  		{{Form::label("other2".$i, "Other")}}
  	</div>
  	<div class="col-xs-2">
  		{{Form::text("other2".$i)}}
  	</div>
  	<div class="col-xs-1">
  		{{Form::label("other3".$i, "Other")}}
  	</div>
  	<div class="col-xs-2">
  		{{Form::text("other3".$i)}}
  	</div>
   </div>
    <div class="form-row"><br></div>
    <div class="form-row">
    	<div class="col-xs-12">Describe the view from this room (check the most appropriate descriptions):</div> 
    </div>
    <div class="form-row">
    	<div class="col-xs-3">
    		{{Form::label("lakeView".$i, "Lake View")}}
    		{{Form::checkbox("lakeView".$i, 1)}} 
    	</div>
    	<div class="col-xs-3">
    		{{Form::label("seaView".$i, "Sea View")}}
    		{{Form::checkbox("seaView".$i, 1)}}
    	</div>
    	<div class="col-xs-3">
    		{{Form::label("mtView".$i, "Mountain View")}}
    		{{Form::checkbox("mtView".$i, 1)}}
    	</div>
    	<div class="col-xs-3">
    		{{Form::label("parkView".$i, "Park View")}}
    		{{Form::checkbox("parkView".$i, 1) }}
    	</div>
    </div>
</div>