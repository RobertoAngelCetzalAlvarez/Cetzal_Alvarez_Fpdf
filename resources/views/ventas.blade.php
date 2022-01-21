@extends('layouts.master')
@section('titulo','VENTAS') 
@section('contenido')
<div id='apiVenta'>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Escriba el codigo del producto" aria-label="Recipent's username" aria-describedby="basic-addon2">
						<div class="input-group-append">
							<button class="btn btn-outline-secondary" type="button">Button</button>
						</div>
					
				</div>
			</div>

		</div>
	</div>
	
</div>

@endsection

@push('scripts') 
<script type="text/javascript" src="js/vue-resource.js"></script>
<script type="text/javascript" src="js/apis/apiVenta.js"></script>
@endpush 