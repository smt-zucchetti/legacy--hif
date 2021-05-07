@extends('layouts.formMaster', ['curPage'=>10, 'formType' => 'longForm'])

@section('title', 'Form Page 10')

@section('form')

    @include('partial/formOpen')
        <input type="hidden" name="curPage" value="10" />

    <div class="form-row"><h2>Services & Amenities</h2></div>
    <div class="container form-container inner-borders sticky-header">
        <div class="header-row">
            <div class="col-xs-3 table-cell">
                <h4>Services & Amenities</h4>
            </div>
            <div class="col-xs-3 table-cell">
                <h4>Yes</h4>
            </div>
            <div class="col-xs-3 table-cell">
                <h4>No</h4>
            </div>
            <div class="col-xs-3 table-cell">
                <h4>Fee Charged?</h4>
            </div>
        </div>
    </div>


    <?php
        $labels = ['Airline Desk','Airport 1 Shuttle','AV Equipment','Barber Shop','Beauty Shop','Bellman','Beverage / Cocktail','Breakfast Buffet','Breakfast Continental','Breakfast Full','Business Center','Business Center Services','Car Rental Desk','Catering Services','Cellular Phone Rental','Childcare','Children Programs','Clothing Store','Coffee / Tea','Computer Rental','Concierge','Copy Service','Credit Card Access','Cribs','Currency Exchange','Day Rate','Doctor On Call','Dry Cleaning','Dry Cleaning Same Day','Early Check-in','Early Check-in Guarantee','Early Check-out Fee','Evening Turn Down','Express Check-in Fee','Express Check-out','Faxing Incoming','Faxing Outgoing','Florist','Food and Beverage Discount','Hair Salon','Handicap Parking','Grocery Shopping Service','Late Check-out','Late Check-out Guarantee','Laundry / Valet','Local Calls','Long Distance Access','Local Faxes','Luggage Hold','Newspaper','Notary Public','Office Rental','Parking','Garage/Covered Parking','Parking - Lot','Parking - Side Street','Parking - Valet','PC and Printer Available','Pool Side Service','Room Upgrade Confirmed','Room Upgrade on Availability','Shuttle to Local Attractions','Shuttle to Local Businesses','Secretary Service','Shoe Shine','Social Hour','Tour Desk','Translation','Video Billing','Video Rentals','Wakeup Calls','Welcome Gift'];


            $column_keys = ['servicesAmenYesNo','servicesAmenFeeCharged'];
    ?>

        <div class="form-container inner-borders table">

            @for($i = 0, $k = 1; $i < count($labels); $i++, $k++)

                <div class="form-row table-row">


                    <div class="col-xs-3 table-cell">
                        {{$labels[$i]}}
                    </div>
                    <div class="col-xs-3 table-cell flex">
                        {{ Form::radio($column_keys[0].$k, 'servicesAmenYes', false, ['class' => 'field']) }}
                    </div>
                    <div class="col-xs-3 table-cell flex">
                        {{ Form::radio($column_keys[0].$k, 'servicesAmenNo', true, ['class' => 'field']) }}   
                    </div>
                    <div class="col-xs-3 table-cell flex">
                         {{ Form::checkbox($column_keys[1].$k, 1, null, ['class' => 'large-checkbox margin-center']) }}   
                    </div>

                </div>

            @endfor

        </div>

   
@include('partial/formClose')
    {{ Form::close() }}

@stop
