@extends('layouts.formMaster', ['curPage'=> 5])

@section('title', 'Form Page 5')

@section('form')

    @include('partial/formOpen')

        <input type="hidden" name="curPage" value="5" />

        @for($i = 1; $i <= 10; $i++)
            <div data-id="{{$i}}" class="roomTypeContainer {{$i === 1 ? 'active':''}}">
                @include('partial/roomType')
            </div>
        @endfor 

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
                    if(curRT < 10){
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

    

    @include('partial/formClose')
    {{ Form::close() }}
@stop
