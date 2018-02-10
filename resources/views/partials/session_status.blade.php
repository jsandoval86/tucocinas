@if(session('status'))
	<div class="alert {{session('status-type')}} fade in">
		<p>
			{{session('status')}}
		</p>
	</div>
@endif