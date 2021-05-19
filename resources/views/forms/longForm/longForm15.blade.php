@extends('layouts.formMaster', ['curPage'=>15, 'formType' => 'longForm'])

@section('title', 'Form Page 15')

@section('form')


   @include('partial/formOpen')

	<input type="hidden" name="curPage" value="15" />


	@for($i = 1; $i <= 10; $i++)

		<div data-id="{{$i}}" class="roomTypeContainer <?php echo ($i == 1)?'active':''; ?>">
		    @include('partial/roomType', [
		    	'i' => $i
		    ])
		</div>
	@endfor

	<script>
		const arrows = document.querySelectorAll('.rtarrow')
		arrows.forEach(arrow => 
		{
			arrow.addEventListener('click', (e)=>
			{
				const dir = Object.freeze({
						Left: 'left',
						Right: 'right'
				})
				let tgtClssLst = e.target.classList
				let arrowDir = tgtClssLst.contains('rtleft') ? dir.Left : tgtClssLst.contains('rtright') ? dir.Right : null
				
				if(!arrowDir)
				{
					return
				}

				const oldActiveRoomTypeContainer = document.querySelector('.roomTypeContainer.active')
				const oldId = parseInt(oldActiveRoomTypeContainer.dataset.id)

				if((arrowDir === dir.Left && oldId === 1) || (arrowDir === dir.Right && oldId === 10))
				{
					return
				}

				oldActiveRoomTypeContainer.classList.remove('active')

				const newId = arrowDir === dir.Left ? oldId - 1 : arrowDir === dir.Right ? oldId + 1 : null
				
				if(!newId)
				{
					return
				}
				const el = document.querySelector(`.roomTypeContainer[data-id='${newId}']`)
				
				if(el)
				{
					el.classList.add('active')
				}
			})
		})
	</script>





	@include('partial/formClose')
	{{ Form::close() }}
@stop