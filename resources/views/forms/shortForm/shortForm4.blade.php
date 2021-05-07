@extends('layouts.formMaster', ['curPage'=> 4])

@section('title', 'Form Page 4')

@section('form')

    @include('partial/formOpen')

    <input type="hidden" name="curPage" value="4" />
        
    <h3>Amenities &amp; Facilities</h3> 
    <div class="row">
     <?php 
            $data = ['amenitiesAndFacilities1' => '24 Hour Room Service', 'amenitiesAndFacilities2' => 'ADA Accessible', 'amenitiesAndFacilities3' => 'Air Conditioning', 'amenitiesAndFacilities4' => 'Bar', 'amenitiesAndFacilities5' => 'Breakfast included in all rates', 'amenitiesAndFacilities6' => 'Business Center', 'amenitiesAndFacilities7' => 'Copy Service', 'amenitiesAndFacilities8' => 'Fax Service', 'amenitiesAndFacilities9' => 'Fitness Facilities', 'amenitiesAndFacilities10' => 'Free Local Calls', 'amenitiesAndFacilities11' => 'Free Parking', 'amenitiesAndFacilities12' => 'Free WiFi in Meeting Rooms', 'amenitiesAndFacilities13' => 'Free WiFi in Public Spaces', 'amenitiesAndFacilities14' => 'Free WiFi in Room', 'amenitiesAndFacilities15' => 'Guest Laundry Facility', 'amenitiesAndFacilities16' => 'High Speed Internet', 'amenitiesAndFacilities17' => 'Indoor Pool', 'amenitiesAndFacilities18' => 'Interior Doorways to Room', 'amenitiesAndFacilities19' => 'Jacuzzi', 'amenitiesAndFacilities20' => 'Meal Plan', 'amenitiesAndFacilities21' => 'Meeting Rooms Available', 'amenitiesAndFacilities22' => 'No Adult Channels Offered','amenitiesAndFacilities23' => 'Outdoor Pool', 'amenitiesAndFacilities24' => 'Parking fee charged', 'amenitiesAndFacilities25' => 'Restaurant', 'amenitiesAndFacilities26' => 'Room Service', 'amenitiesAndFacilities27' => 'Smoke-Free Property', 'amenitiesAndFacilities28' => 'Smoking Rooms Available', 'amenitiesAndFacilities29' => 'Wheelchair Access'];

        foreach($data as $key => $value):

    ?>
            
            <div class="col-xs-4">

                {{ Form::checkbox($key, 1, null, ['class' => 'large-checkbox margin-center','id' => $key]) }}
                {{ Form::label($key, $value, ['class' => 'checkbox-label']) }}  
                
            </div>
    <?php  
        endforeach;
    ?>
    </div>

    <br>
    <br>
    <div class="row">
        <div class="col-xs-9">
            {{ Form::label('hotelDescription', 'Hotel Description') }}
            {{Form::textarea('hotelDescription', null, ['class' => 'form-control'])  }}
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-9">
            {{ Form::label('locationDescription', 'Location Description', NULL) }}
            {{Form::textarea('locationDescription', null, array('class' => 'form-control'))  }}
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-9">
            {{ Form::label('facilitiesDescription', 'Facilities Description', NULL) }}
            {{Form::textarea('facilitiesDescription', null, array('class' => 'form-control'))  }}
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-9">
            {{ Form::label('meetingFacilitiesDescription', 'Meeting Facilities Description', NULL) }}
            {{Form::textarea('meetingFacilitiesDescription', null, array('class' => 'form-control'))  }}
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-9">
            {{ Form::label('diningDescription', 'Dining Description', NULL) }}
            {{Form::textarea('diningDescription', null, array('class' => 'form-control'))  }}
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-9">
            {{ Form::label('recreationDescription', 'Recreation Description', NULL) }}
            {{Form::textarea('recreationDescription', null, array('class' => 'form-control'))  }}
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-9">
            {{ Form::label('areaAttractionsDescription', 'Area Attractions', NULL) }}
            {{Form::textarea('areaAttractionsDescription', null, array('class' => 'form-control'))  }}
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <div class="col-xs-9">
            {{ Form::label('miscellaneousInformation', 'Miscellaneous Information', NULL) }}
            {{Form::textarea('miscellaneousInformation', null, array('class' => 'form-control'))  }}
        </div>
    </div>

    @include('partial/formClose')
    {{ Form::close() }}
@stop
