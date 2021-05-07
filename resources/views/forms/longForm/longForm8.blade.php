@extends('layouts.formMaster', ['curPage'=>8, 'formType' => 'longForm'])

@section('title', 'Form Page 8')

@section('form')

    @include('partial/formOpen')

    <input type="hidden" name="curPage" value="8" />
    
    <div class="form-row"><h2>Property Amenities</h2></div>
    
    <div class="container form-container inner-borders sticky-header">
        <div class="header-row">
            <div class="col-xs-3 table-cell">
                <h4>Property Amenities</h4>
            </div>
            <div class="col-xs-3 table-cell">
                <h4>Available On/Near Property</h4>
            </div>
            <div class="col-xs-3 table-cell">
                <h4>Fee Charged?</h4>
            </div>
            <div class="col-xs-3 table-cell">
                <h4>Additional Comments</h4>
            </div>
        </div>
    </div>

     <div class="form-container inner-borders table">
        
        @php
            $labels = ['Beach','Bicycling','Boating','Bowling','Camping','Cardio Vascular Equipment', 'Casino','Child Activities','Children\'s Playground','Driving Range', 'Extensive Health Club', 'Fishing','Game Room','Golf','Heated Outdoor Pool', 'Hiking','Horseback Riding', 'Indoor/Outdoor Pool', 'Indoor Pool','Jacuzzi','Jet Skiing','Jogging Track/Trail', 'Limited Health Club', 'Massage','Mountain Biking', 'Mountain Climbing', 'Nature Trails','Outdoor Pool','Polo','Pool Table','Putting Green', 'Racquetball Court', 'Recreation (Sports) Court', 'Safari','Sailing','Sauna','Scuba Diving', 'Ski-in/Ski-out Access', 'Snorkeling','Snow Mobiling','Snow Skiing','Spa','Squash Courts','Sun Bed','Table Tennis','Tennis Courts','Walking Track','Weightlifting Equipment','Whirlpool','Windsurfing'];

            $column_keys = ['onNearProp','feeChargedAmenities','additionalCommentsAmenities'];
        @endphp


        @for($i = 0, $k = 1; $i < count($labels); $i++, $k++)
            <div class="form-row table-row">
                <div class="col-xs-3 table-cell">
                    {{$labels[$i]}} 
                </div>
                <div class="col-xs-3 table-cell flex">
                    {{ Form::checkbox($column_keys[0].$k, 1, null, ['class' => 'large-checkbox margin-center'])}} 
                </div>
                <div class="col-xs-3 table-cell flex">
                    {{ Form::checkbox($column_keys[1].$k, 1, null, ['class' => 'large-checkbox margin-center'])}} 
                </div>
                <div class="col-xs-3 table-cell">
                    {{ Form::textarea($column_keys[2].$k, null, ['class' => 'form-control textarea']) }}
                </div>
            </div>
        @endfor






        {{--

        @foreach($configData['multiFields'] as $key => $data)
            @if ($key == 'propAmenities'):
                @php
                    $i = 0;
                    $x = 0;

                    $labels = ['Beach','Bicycling','Boating','Bowling','Camping','Cardio Vascular Equipment', 'Casino','Child Activities','Children\'s Playground','Driving Range', 'Extensive Health Club', 'Fishing','Game Room','Golf','Heated Outdoor Pool', 'Hiking','Horseback Riding', 'Indoor/Outdoor Pool', 'Indoor Pool','Jacuzzi','Jet Skiing','Jogging Track/Trail', 'Limited Health Club', 'Massage','Mountain Biking', 'Mountain Climbing', 'Nature Trails','Outdoor Pool','Polo','Pool Table','Putting Green', 'Racquetball Court', 'Recreation (Sports) Court', 'Safari','Sailing','Sauna','Scuba Diving', 'Ski-in/Ski-out Access', 'Snorkeling','Snow Mobiling','Snow Skiing','Spa','Squash Courts','Sun Bed','Table Tennis','Tennis Courts','Walking Track','Weightlifting Equipment','Whirlpool','Windsurfing'];
                @endphp
                    
                @foreach($data as $a)
                    @if($i == 3)
                        @php
                            $i = 0;
                            $x++;
                        @endphp
                    @endif
                    @if($i == 0)
                        <div class="form-row table-row">
                        <div class="col-xs-3 table-cell">
                            {{$configData['multiFieldLabels'][$x]}} 
                        </div>
                    @endif
                    @if($i < 2)
                        <div class="col-xs-3 table-cell flex">
                        {{ Form::checkbox($a, 1, null, ['class' => 'large-checkbox margin-center'])}} 
                        </div>
                    @endif
                    @if($i == 2)
                        <div class="col-xs-3 table-cell">
                            {{ Form::textarea($a, null, ['class' => 'form-control textarea']) }}
                        </div>
                        </div>
                    @endif
                    @php
                        $i++; 
                    @endphp
                @endforeach
            @endif
        @endforeach
        --}}
    </div>
@include('partial/formClose')

   

        @stop

