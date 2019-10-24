@if(count($errors)>0)
<div class="row">
	<div class="col col-md-6 col-md-offset-3 alert-danger">
		<ul>
			@foreach($errors->all() as $err)
				<li>{{ $err }}</li>
			@endforeach
		</ul>
	</div>
</div>
@endif