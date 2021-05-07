@extends('layouts.formMaster', ['curPage'=>11, 'formType' => 'longForm'])

@section('title', 'Form Page 11')

@section('form')

   @include('partial/formOpen')
<input type="hidden" name="curPage" value="11" />

    <div class="form-row"><h2>Accessibility Features</h2></div>
    <div class="container form-container inner-borders sticky-header">
        <div class="header-row">
            <div class="col-xs-3 table-cell">
                <h4>Accessibility Features</h4>
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
        $labels = ['Accessible Baths','Accessible Wash Basins','Adapted Bathrooms','Accessible Bathing Controls','Accessible Light Switch','Accessible Elevators','Accessible Toilets','Braille / Large Print Menus','Braille / Large Print Hotel Literature','Service / Guide Dogs Allowed','Staff Trained for Disabled Guests','Disabled Emergency Plan','Emergency Codes/Buttons in Room','Hearing Induction Loops','Handrails in Bathrooms','Adapted Telephones','Pillow Alarms Available','Adapted Room Doors','Special Needs Menu','Television with subtitle or closed caption','Wide Entrance','Wide Corridors','Wide Restaurant Entrance','Fire Extinguishers','Restricted Room Access','No Kids Allowed','Group Rates','No Porn Films','Ski In / Out','Internet Free','High Speed Internet','Internet Hot Spot']; 

        $column_keys = ['accessFeatAvailOnPropYesNo','accessFeatFeeCharged'];

    ?>


        <div class="form-container inner-borders table">

            @for($i = 0, $k = 1; $i < count($labels); $i++, $k++)

                <div class="form-row table-row">


                    <div class="col-xs-3 table-cell">
                        {{$labels[$i]}}
                    </div>
                    <div class="col-xs-3 table-cell flex">
                         {{ Form::radio($column_keys[0].$k, 'featAvailYes', null) }}   
                    </div>
                    <div class="col-xs-3 table-cell flex">
                         {{ Form::radio($column_keys[0].$k, 'featAvailNo', null) }}   
                    </div>
                    <div class="col-xs-3 table-cell flex">
                        {{ Form::checkbox($column_keys[1].$k, 1, null, ['class' => 'large-checkbox margin-center']) }}   
                    </div>
                </div>
            @endfor
        </div>
        <br><br>
        <div class="form-row"><h2>Property: Property Description</h2></div>
        <div class="form-row myGrid">
            <div class="col-xs-12">
                {{ Form::textarea('propertyDescription', null, ['class' => 'form-control textarea']) }}
            </div>
        </div>

@include('partial/formClose')
    {{ Form::close() }}

@stop