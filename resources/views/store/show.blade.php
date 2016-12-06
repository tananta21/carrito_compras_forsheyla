@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="page-header">
	  <h1><i class="fa fa-shopping-cart"></i> Detalle del producto</h1>
	</div>

	<div class="row">
		<div class="col-md-6">
            <div class="product-block">
                <img  style="width: 300px; height: 300px" src="{{url('/')}}/{{ $product->image }}">
            </div>
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $product->name }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $product->description }}</p>
					<h3 style="margin-top: 2rem">
						<span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span>
					</h3>
					<p>
						<a style="margin-top: 2rem; font-size: 2rem" class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug) }}">
							Agregar al Carrito <i class="fa fa-cart-plus fa-2x"></i>
						</a>
					</p>
				</div>
			</div>	
		</div>
	</div><hr>

	<p>
		<a class="btn btn-primary" href="javascript:history.back();">
			<i class="fa fa-chevron-circle-left"></i> Regresar
		</a>
	</p>
</div>
@stop