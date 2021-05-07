@extends('layouts.formMaster', ['curPage'=>3])

@section('title', 'Form Page 1')

@section('form')

    @include('partial/formOpen')
    <input type="hidden" name="curPage" value="3" />


    <?php for($i=1; $i<=5;$i++): ?>
        <div data-id="{{$i}}" class="roomTypeContainer <?php echo ($i == 1)?'active':''; ?>">
            <div class="form-row">
                <h3>Room Descriptions {{$i}} (of 5) <a href="" id="rtleft" class="rtarrow"><i class="fas fa-arrow-alt-circle-left"></i></a><a href id="rtright" class="rtarrow"><i class="fas fa-arrow-alt-circle-right"></i></a></h3>
            </div>
            <h3>Room Type {{$i}}</h3>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label for="roomCode{{$i}}">Room Code</label>
                    <?php $fieldName = "roomCode".$i; ?>
                    <input type="text" name="roomCode{{$i}}" id="roomCode{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label for="roomCode{{$i}}">Room Name</label>
                    <?php $fieldName = "roomName".$i; ?>
                    <input type="text" name="roomName{{$i}}" id="roomName{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label for="maxNoRooms{{$i}}">Max No. Rooms</label>
                    <?php $fieldName = "maxNoRooms".$i; ?>
                    <input type="text" name="maxNoRooms{{$i}}" id="maxNoRooms{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label for="minRate{{$i}}">Min Rate</label>
                    <?php $fieldName = "minRate".$i; ?>
                    <input type="text" name="minRate{{$i}}" id="minRate{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label for="maxPeopleMaxBedSpaces{{$i}}">Max N. People/Max Bed Spaces</label>
                    <?php $fieldName = "maxPeopleMaxBedSpaces".$i; ?>
                    <input type="text" name="maxPeopleMaxBedSpaces{{$i}}" id="maxPeopleMaxBedSpaces{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label for="minNoPeople{{$i}}">Min No. People</label>
                    <?php $fieldName = "minNoPeople".$i; ?>
                    <input type="text" name="minNoPeople{{$i}}" id="minNoPeople{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
                </div>
            </div>
        </div>
    <?php endfor; ?>

    <script>
        $('document').ready(function(){



            $('.rtarrow').click(function(e){
                e.preventDefault();
                
                var curRT = $('.roomTypeContainer.active').data('id');

                if($(this).attr('id') == 'rtleft'){
                    if(curRT > 1){
                        $('.roomTypeContainer').removeClass('active');
                        $('.roomTypeContainer').each(function(i,e){
                            if($(e).data('id') == curRT - 1){
                                $(e).addClass('active');
                            }
                        });
                    }
                }else{
                    if(curRT < 5){
                        $('.roomTypeContainer').removeClass('active');
                        $('.roomTypeContainer').each(function(i,e){
                            if($(e).data('id') == curRT + 1){
                                $(e).addClass('active');
                            }
                        });
                    }
                }   
            });
        });
    </script>

@include('../partial/formClose')
    {{ Form::close() }}

@stop