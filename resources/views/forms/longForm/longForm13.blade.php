@extends('layouts.formMaster', ['curPage'=>13, 'formType' => 'longForm'])

@section('title', 'Form Page 13')

@section('form')

    @include('partial/formOpen')
    <input type="hidden" name="curPage" value="13" />

    	<div class="form-row"><h2>Directions</h2></div>
		<div class="form-row"><h4>Directions from a Major City to your Hotel: Please give detailed, but brief, instructions for guests who will be driving to your hotel.</h4></div>
		<div class="form-container">
			<div class="form-row">
				<div class="col-xs-12">
					Directions from {{ Form::text('directionsFrom1', null, array('class' => 'short-input-box')) }} to your hotel:<br><br>
				</div>
				<div class="col-xs-12">
					{{ Form::textarea('extraDirections1', null, array('class' => 'textarea')) }} 
				</div>
			</div>
			<br>
			<div class="form-row">
				<div class="col-xs-12">
					Directions from {{ Form::text('directionsFrom2', null, array('class' => 'short-input-box')) }} to your hotel:<br><br>
				</div>
				<div class="col-xs-12">
					{{ Form::textarea('extraDirections2', null, array('class' => 'textarea')) }} 
				</div>
			</div>
		</div>
		<br><br>
		<div class="form-row"><h2>Travel Details: Parking</h2></div>
		<div class="form-row">
			{{ Form::textarea('parkingDetails', null, array('class' => 'textarea')) }}
		</div>
		<br><br>

		<div class="form-row"><h2>Travel Details: Transportation</h2></div>
		<div class="form-row"><h4>Ground Transportation Costs: Please indicate the highest applicable cost for each form of transportation or if available at N/C (no charge).</h4></div>
		<div class="form-container table inner-borders">
			<div class="form-row table-row">
				<div class="col-xs-2 table-cell flex-center">
					&nbsp;
				</div>
				<div class="col-xs-2 table-cell flex-center">
					TAXI
				</div>
				<div class="col-xs-2 table-cell flex-center">
					LIMO
				</div>
				<div class="col-xs-2 table-cell flex-center">
					HOTEL SHUTTLE
				</div>
				<div class="col-xs-2 table-cell flex-center">
					CITY BUS
				</div>	
				<div class="col-xs-2 table-cell flex-center">
					TRAIN
				</div>
			</div>
			<div class="form-row table-row text-center">
				<div class="col-xs-2 table-cell flex-center">
					From Primary Airport to Hotel
				</div>
				<div class="col-xs-2 table-cell flex-center">
					{{ Form::checkbox('taxi1', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					<div class="cont">
						{{ Form::text('taxiCost1', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}					
					</div>
				</div>
				<div class="col-xs-2 table-cell flex-center">
					{{ Form::checkbox('limo1', '1', null, array('class' => 'large-checkbox margin-center')) }}
					{{ Form::text('limoCost1', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }} 
				</div>
				<div class="col-xs-2 table-cell flex-center">
					{{ Form::checkbox('shuttle1', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('shuttleCost1', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
				<div class="col-xs-2 table-cell flex-center">
					{{ Form::checkbox('bus1', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('busCost1', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>	
				<div class="col-xs-2 table-cell flex-center">
					{{ Form::checkbox('train1', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('trainCost1', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
			</div>
			<div class="form-row table-row">
				<div class="col-xs-2 table-cell">
					From Secondary Airport to Hotel
				</div>
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('taxi2', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('taxiCost2', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('limo2', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('limoCost2', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('shuttle2', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('shuttleCost2', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('bus2', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('busCost2', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>	
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('train2', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('trainCost2', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
			</div>
			<div class="form-row table-row">
				<div class="col-xs-2 table-cell">
					From City Center to Hotel
				</div>
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('taxi3', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('taxiCost3', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('limo3', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('limoCost3', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('shuttle3', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('shuttleCost3', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('bus3', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('busCost3', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>	
				<div class="col-xs-2 table-cell flex">
					{{ Form::checkbox('train3', '1', null, array('class' => 'large-checkbox margin-center')) }} 
					{{ Form::text('trainCost3', null, array('class' => 'form-control', 'placeholder' => 'Cost')) }}
				</div>
			</div>
			<div class="form-row table-row">
				<div class="col-xs-12 table-cell">
					{{ Form::label('rentalCarAvail', 'Rental Car Available', array('class'=>'checkbox-label')) }}
					{{ Form::checkbox('rentalCarAvail', '1', null, array('class' => 'large-checkbox')) }} 
				</div>
			</div>
			<div class="form-row table-row">
				<div class="col-xs-12 table-cell">
					Additional Transportation: Please provide any additional details – hours of operation for hotel shuttle, for example – or any additional modes of transportation, such as a subway or ferry. <br><br>{{ Form::textarea('additionalTrans', null, array('class' => 'textarea')) }}
				</div>
			</div>
		</div>
		<div class="form-row">
			<h2>Arrival Requirements</h2>
		</div>
		<div class="form-container">
			<div class="form-row">
				<div class="col-xs-4">{{ Form::label('arrivalReq1', 'Minimum Night Stays:') }}</div>
				<div class="col-xs-8">{{ Form::text('arrivalReq1', null, array('class' => 'form-control')) }}</div>
			</div>
			<div class="form-row">
				<div class="col-xs-4">{{ Form::label('arrivalReq2', 'Front Desk Arrangements (if not open 24 hours):' ) }}</div>
				<div class="col-xs-8">{{ Form::text('arrivalReq2', null, array('class' => 'form-control')) }}</div>
			</div>
		</div>
		<br>
		<br>
		<div class="form-row">
				<h2>Payment Methods</h2>
			</div>
		<div class="form-container">
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod1', 'American Express') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod1', '1', null, array('id' => 'paymentMethod1', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod2', 'Carte Blanche') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod2', '1', null, array('id' => 'paymentMethod2', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod3', 'Diners Club') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod3', '1', null, array('id' => 'paymentMethod3', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod4', 'Discover') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod4', '1', null, array('id' => 'paymentMethod4', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod5', 'JCB International') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod5', '1', null, array('id' => 'paymentMethod5', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod6', 'MasterCard') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod6', '1', null, array('id' => 'paymentMethod6', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod7', 'VISA') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod7', '1', null, array('id' => 'paymentMethod7', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod8', 'En Route') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod8', '1', null, array('id' => 'paymentMethod8', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod9', 'Euro Card') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod9', '1', null, array('id' => 'paymentMethod9', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod10', 'Mail Deposit') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod10', '1', null, array('id' => 'paymentMethod10', 'class' => 'large-checkbox')) }} </div>
			</div>
			<div class="form-row">
				<div class="col-xs-2">{{ Form::label('paymentMethod11', 'Direct Bill') }}</div>
				<div class="col-xs-1">{{ Form::checkbox('paymentMethod11', '1', null, array('id' => 'paymentMethod11', 'class' => 'large-checkbox')) }} </div>
			</div>
		</div>
@include('partial/formClose')
	{{ Form::close() }}


@stop
