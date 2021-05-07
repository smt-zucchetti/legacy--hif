@extends('layouts.formMaster', ['curPage'=>17, 'formType' => 'longForm'])

@section('title', 'Submit and Save')

@section('form')
	@include('partial/formOpen', ['last_page' => true])

    	<input type="hidden" name="curPage" value="17" />


		<div class="form-row">
    		<h3>NEGOTIATED / PREFERRED RATES</h3>
    		<p>Please provide Vertical Booking USA with a list of all negotiated/preferred rates and a copy of the rate loading instructions for each of your privately negotiated or preferred rates that you would like made available via the GDS/IDS and/or website booking engine. If necessary, the corporation or consortia will be able to supply you with a copy of their most recent rate loading instructions. Please do feel free to reach out to us with any questions you may have concerning negotiated rates.</p>
	    </div>
		<div class="form-container">
		    <div class="form-row">
		    	<div class="col-xs-12">
	    			HIF COMPLETED BY: (Name and Date)
		    	</div>	
		    </div>
		    <div class="form-row">
			    <div class="col-xs-6">
			    	{{Form::label('signature1', 'Name:') }} {{Form::text('signature1', null, array('placeholder' => 'Insert Signature', 'class' => 'sig-date' )) }}
			    </div>
			    <div class="col-xs-6">
			    	{{Form::label('signature2', 'Date:') }} {{Form::text('signature2', null, array('placeholder' => 'Insert Date', 'class' => 'sig-date')) }}
			    </div>
			</div>
	    </div>
	    
		<h4>Click here when you are done with the process. Otherwise, navigate back to the pages you want and fill them out. You can also log out and return to the process at any time</h4>		


		{{ Form::label('formComplete', 'I am satisfied wth the contents of the form. Please send this to VB USA to upload to the system', ['class' => 'valign-checkbox']) }}
		{{ Form::checkbox('formComplete', 1, null, ['id' => 'formComplete', 'class' => 'large-checkbox']) }} 

		<br><br>


		<?php if(!empty($warning_message)): ?>
			<div class="alert alert-danger alert-dismissible show" id="myModal" role="alert">
	    		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	      			<span aria-hidden="true">&times;</span>
	    		</button>
	    		<strong><?php echo $warning_message; ?></strong> 
	    		<br>    
	    	</div>
	    <?php endif; ?>

		<input id="submit-button" type="submit" class="btn btn-success btn-lg" value="Save & Finish" disabled />
		<br><br><br><br>

	{{ Form::close() }}

	<script>
		$(document).ready(function(){
			if($('#formComplete').is(':checked') && $('input[name=signature1').val() != "" && $('input[name=signature2').val() != "" ){
		    	$('#submit-button').removeAttr('disabled');		    	
		    }else{
		    	$('#submit-button').attr('disabled', '');
		    }
			$('#formComplete').click(function() {
				_checkValues();
			});
			$('input.sig-date').keyup(function() {
				_checkValues();
			});

			function _checkValues(){
				if( $('#formComplete').is(':checked') && $('input[name=signature1').val() != "" && $('input[name=signature2').val() != "" ){
					$('#submit-button').removeAttr('disabled');
				}else{
					$('#submit-button').attr('disabled', '');
				}
			}
		});
	</script>

        @stop


