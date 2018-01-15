@if(session('status'))
	<div class="alert {{session('status-type')}}">
		<p>
			{{session('status')}}
		</p>
	</div>
@endif