@extends('layouts.formMaster', ['curPage'=>15, 'formType' => 'longForm'])

@section('title', 'Form Page 15')

@section('form')


   @include('partial/formOpen')

	<input type="hidden" name="curPage" value="15" />


	@for($i = 1; $i <= 10; $i++)

		<div data-id="{{$i}}" class="roomTypeContainer <?php echo ($i == 1)?'active':''; ?>">
		    @include('partial/roomType', [
		    	//'checkboxArr' => $configData['multiFields']['roomAmenities'.$i], 
		    	//'labelArr' => $configData['multiFieldLabels']['roomAmenities'], '
		    	'i' => $i, 

		    ])
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