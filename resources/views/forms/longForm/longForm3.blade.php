@extends('layouts.formMaster', ['curPage'=>3, 'formType' => 'longForm'])

@section('title', 'Form Page 3')

@section('form')

       @include('partial/formOpen')

            <input type="hidden" name="curPage" value="3" />

            <div class="row"><h1>Descriptions</h1></div>
            <div class="row"><h2>Area Information: Location</h2></div>                    
            <div class="form-row myGrid">
                <div class="col-xs-6">
                    {{ Form::checkbox('airportNearby', 1, null, ['id' => 'airportNearby']) }}   
                    {{ Form::label('airportNearby', 'Airport Vicinity (within 5 miles)') }}
                </div>
                <div class="col-xs-6">
                    {{ Form::checkbox('inTheMountains', 1, null, ['id' => 'inTheMountains']) }} 
                    {{ Form::label('inTheMountains', 'In the Mountains') }}
                </div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::checkbox('outerArea', 1, null, ['id' => 'outerArea']) }}   {{ Form::label('outerArea', 'Outer Area (30 miles+ from City)') }}</div>
                <div class="col-xs-6">{{ Form::checkbox('inTheCountry', 1, null, ['id' => 'inTheCountry']) }}   {{ Form::label('inTheCountry', 'In The Country') }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::checkbox('businessDistrict', 1, null, ['id' => 'businessDistrict']) }}   {{ Form::label('businessDistrict', 'Business District') }}</div>
                <div class="col-xs-6">{{ Form::checkbox('onOrNearLake', 1, null, ['id' => 'onOrNearLake']) }}   {{ Form::label('onOrNearLake', 'On / Near Lake') }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::checkbox('city', 1, null, ['id' => 'city']) }}   {{ Form::label('city', 'City') }}</div>
                <div class="col-xs-6">{{ Form::checkbox('onBeach', 1, null, ['id' => 'onBeach']) }}   {{ Form::label('onBeach', 'On the Beach') }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::checkbox('downtown', 1, null, ['id' => 'downtown']) }}   {{ Form::label('downtown', 'Downtown') }}</div>
                <div class="col-xs-6">{{ Form::checkbox('perimeterSuburban', 1, null, ['id' => 'perimeterSuburban']) }}   {{ Form::label('perimeterSuburban', 'Perimeter / Suburban') }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::checkbox('entertainmentDistrict', 1, null, ['id' => 'entertainmentDistrict']) }}   {{ Form::label('entertainmentDistrict', 'Entertainment District') }}</div>
                <div class="col-xs-6">{{ Form::checkbox('resort', 1, null, ['id' => 'resort']) }}   {{ Form::label('resort', 'Resort') }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">{{ Form::checkbox('financialDistrict', 1, null, ['id' => 'financialDistrict']) }}   {{ Form::label('financialDistrict', 'Financial District') }}</div>
                <div class="col-xs-6">{{ Form::checkbox('highway', 1, null, ['id' => 'highway']) }}   {{ Form::label('highway', 'Highway') }}</div>                     
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-6">
                    {{ Form::checkbox('other', 1, null, ['id' => 'other']) }}   {{ Form::label('other', 'Other') }}
                    {{ Form::text('areaExplained', null, array('class' => 'form-control short-input-box','placeholder'=>'Explain')) }}
                </div>
                <div class="col-xs-6"></div>
            </div>                    
            <br><br>
            <div class="row"><h2>Area Information: Area Attractions</h2></div> 
             <div class="form-row myGrid">
                <div class="col-xs-3 small-text">{{ Form::label('Area Attraction (Name)') }}</div>
                <div class="col-xs-3 small-text">{{ Form::label('Distance from Attraction to Hotel') }}</div>
                <div class="col-xs-3 small-text">{{ Form::label('Compass Direction from Attraction to Hotel') }}</div>
                <div class="col-xs-3 small-text">{{ Form::label('Directions from Attraction to Hotel') }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions1', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions2', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions3', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions4', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions5', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions6', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions7', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions8', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions9', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions10', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions11', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions12', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions13', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions14', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions15', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions16', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions17', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions18', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions19', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions20', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions21', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions22', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions23', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions24', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions25', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions26', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions27', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions28', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions29', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions30', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions31', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions32', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions33', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions34', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions35', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions36', null, array('class' => 'form-control')) }}</div>
            </div>
            <div class="form-row myGrid">
                <div class="col-xs-3">{{ Form::text('areaAttractions37', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions38', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions39', null, array('class' => 'form-control')) }}</div>
                <div class="col-xs-3">{{ Form::text('areaAttractions40', null, array('class' => 'form-control')) }}</div>
            </div>

        @include('partial/formClose');

@stop