<span class="required">Note: To preserve the data on the current page, be sure to save the current form before logging out or stepping away from the computer.</span>
<div class="form-row">
    <h3>{{$formsName}} <span class="curFormNo">1</span> (of {{$formCount}}) 
        <i class="rtarrow rtleft fas fa-arrow-alt-circle-left"></i>
        <i class="rtarrow rtright fas fa-arrow-alt-circle-right"></i>
    </h3>
</div>
@for($i = 1; $i <= $formCount; $i++)
	<div data-id="{{$i}}" class="paginatedForm <?php echo ($i == 1)?'active':''; ?>">
		@include('partial/paginatedForms/forms/'.$formsFile)
	</div>
@endfor
<script src="{{ asset('./public/js/modules/paginatedForms.js')}}"></script>