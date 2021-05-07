@extends('layouts.formMaster', ['curPage'=>3])

@section('title', 'New User')

@section('form')

    <div class="row">
        <div class="col-xs-12">
            <?php $url = 'newUserToken/'.$formType; ?>
            {{ Form::open(array('url' => $url )) }}
            {{ csrf_field() }}
        
            <div class="form-group row">
                <div class="col-xs-12">
                    <h2>Enter the client name to create a new account. The client name you enter will appear to them when you give them the link.</h2>
                </div>
                <div class="col-xs-6">
                    {!! Form::label('clientName', 'Client/Hotel Name') !!}
                    {!! Form::text('clientName', null, array('class' => 'form-control')) !!}
                </div>
            </div>

            {!! Form::submit('Enter', array('class' => 'btn btn-primary')) !!}
            
            {!! Form::close() !!}
        </div>
    </div>

@stop