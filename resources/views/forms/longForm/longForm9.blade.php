@extends('layouts.formMaster', ['curPage'=>9, 'formType' => 'longForm'])

@section('title', 'Form Page 9')

@section('form')

   @include('partial/formOpen')
<input type="hidden" name="curPage" value="9" />

    <div class="form-row"><h2>Room Amenities</h2></div>
    <div class="container form-container inner-borders sticky-header">
        <div class="header-row">
            <div class="col-xs-3 table-cell">
                <h4>Room Amenities</h4>
            </div>
            <div class="col-xs-2 table-cell">
                <h4>Available In Some Rooms</h4>
            </div>
            <div class="col-xs-2 table-cell">
                <h4>Available In All Rooms</h4>
            </div>
            <div class="col-xs-2 table-cell">
                <h4>Fee Charged?</h4>
            </div>
            <div class="col-xs-3 table-cell">
                <h4>Additional Comments</h4>
            </div>
        </div>
    </div>


    <div class="form-container inner-borders table">

        <?php

            $labels  = ['Air Conditioning in all guest rooms', 'Alarm Clock','Balcony','Black-Out Curtains','Ceiling Fan','Clothes Press','Closets In Room','Coffee / Tea Maker','Dining Table and Chairs','Fireplace','Full Size Mirror','Iron / Ironing Board','Jetted Tub / Hydro Spa','Laundry Basket/Clothes Hamper', 'Mini Bar','Newspaper','Ocean Front','Pool Side','Safe','Safe can hold 17 inch or 43.2 c', 'Seating Area with Sofa/Chair', 'Self-Controlled Heating/Cooling', 'Sofa-bed','Wet bar','Bathrobe','Bathroom Amenities', 'Bathtub/shower','Bathroom shared','Bathtub only','Bidet','Hair Dryer','Private Bath in all guest rooms','Bathroom Phone','Separate Bathtub and Shower', 'Separate Toilet Area','Shower only','Shower stall','CD Player','MP3 Line-in','Radio AM/FM','Stereo','Television','Blu-ray Player','Cable News Channel', 'Cable/Satellite TV','DVD Player','HDTV','Movies','No Adult Channels or Adult Channel Lockout','Pay Per View TV','Remote Controlled TV', 'Subtitles or Closed Caption', 'VCR','Video Games','Web Enabled TV','Web TV','Wide Screen','Kitchen','Conventional Oven','Dishwasher','Microwave','Pots, Pans, Serving Dishes','Plates, Glassware','Refrigerator - Full Size','Refrigerator - Mini','Refrigerator - Does it Have Icemaker', 'Silverware','Stove','Toaster','Duvet Covers','Non-Allergenic Pillows','Automated Wakeup Call','Direct Dial Phone','Speaker Phone','Two Line Phone','Telephone Jack Adapter for International Guests','Voice Mail','Electrical Adapters for International Guests','Power Converters for International Guests','Electrical Outlet at Desk Level', 'Ergonomic Desk Chair','Fax','High Speed Internet Access Modem / Data port','Printer','Spare Electrical Outlet at Desk','Work Desk with Lamp'];

            $column_keys = ['onProperty', 'inAllRoomsProp', 'feeChargedProp', 'additionalPropComments'];
        ?>


        @for($i = 0, $k = 1; $i < count($labels); $i++, $k++)
            
            <div class="form-row table-row">
                <div class="col-xs-3 table-cell">
                    {{$labels[$i]}}
                </div>
                <div class="col-xs-2 table-cell flex">
                     {{ Form::checkbox($column_keys[0].$k, 1, null, ['class' => 'margin-center large-checkbox']) }}   
                </div>
                <div class="col-xs-2 table-cell flex">
                     {{ Form::checkbox($column_keys[1].$k, 1, null, ['class' => 'margin-center large-checkbox']) }}   
                </div>
                <div class="col-xs-2 table-cell flex">
                     {{ Form::checkbox($column_keys[2].$k, 1, null, ['class' => 'margin-center large-checkbox']) }}   
                </div>
                <div class="col-xs-3 table-cell">
                     {{ Form::textarea($column_keys[3].$k, null, ['class' => 'form-control textarea']) }}   
                </div>
            </div>
        @endfor
    </div>




    @include('partial/formClose');

@stop
