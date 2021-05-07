
<div>
	Quick Jump: <select id="page_sel_dd" name="pageSel">
		@for($i = 1; $i <= $pageCount; $i++)
			<option @if($curPage === $i) selected @endif value={{$i}}>Page {{$i}}</option>
		@endfor
	</select>
	<button id="page_sel_btn" class="btn btn-success btn-sm">Go</button>
	<br>
	@php
		$prev_href = $curPage > 1 ? url('/')."/page/".($curPage - 1) : "#";
		$next_href = $curPage < $pageCount ? url('/')."/page/".($curPage + 1) : "#";
	@endphp
	<a href="{{$prev_href}}">&#10502; Prev Page</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="{{$next_href}}">Next Page &#10503;</a>
</div>


<script>
	$(document).ready(function(){

		$('#page_sel_btn').click(function(){
			var url = "{{url('/')}}/page/" + $('#page_sel_dd').find(":selected").val();

			ajaxSubmit(url);
			window.location.href = url;
		});
	});

	function ajaxSubmit(url)
	{
		$.ajax({
			type: "POST",
			url: url,
			data: $('form#myForm').serialize()
		});
	}
</script>