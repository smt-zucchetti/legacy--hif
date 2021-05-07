@extends('layouts.formMaster', ['curPage'=>3])

@section('title', 'Show User Token')

@section('form')

			<h2>A new account has been created for {{$clientName}}. Click on the link to get started:</h2><br>
            <h4><a href="{{$tokenUrl}}">{{$tokenUrl}}</a></h4>
@stop
