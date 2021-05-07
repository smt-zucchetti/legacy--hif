@extends('layouts.formMaster', ['curPage'=> 5])

@section('title', 'Form Page 5')

@section('form')

   @include('partial/formOpen')

    <input type="hidden" name="curPage" value="5" />

    <?php for($i=1; $i<=3;$i++): ?>
        <div data-id="{{$i}}" class="roomTypeContainer <?php echo ($i == 1)?'active':''; ?>">
            <div class="form-row">
                <h3>Product Rate {{$i}} (of 3) <a href="" id="rtleft" class="rtarrow"><i class="fas fa-arrow-alt-circle-left"></i></a><a href id="rtright" class="rtarrow"><i class="fas fa-arrow-alt-circle-right"></i></a></h3>
            </div>

            <div class="form-group row">
                <div class="col-xs-6">
                    <label name="rateCode{{$i}}">Rate Code</label>
                    <?php $fieldName = "rateCode".$i; ?>
                    <input type="text" name="rateCode{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label name="rateName{{$i}}">Rate Name</label>
                    <?php $fieldName = "rateName".$i; ?>
                    <input type="text" name="rateName{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label name="validityDates{{$i}}">Validity Dates (usually 10 years out)</label>
                    <?php $fieldName = "validityDates".$i; ?>
                    <input type="text" name="validityDates{{$i}}" value="<?php echo $UserData->$fieldName ?>" class="form-control" />
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-6">
                    <label name="rateDerivedDesc{{$i}}">Should this rate be derived off anohter rate? If so, how?</label>
                    <?php $fieldName = "rateDerivedDesc".$i; ?>
                    <textarea name="rateDerivedDesc{{$i}}"  class="form-control"><?php echo $UserData->$fieldName ?></textarea>
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
                    if(curRT < 3){
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