@extends('store.template')

@section('content')



<div style="text-align: center;margin-top: 1rem" class="logo col-md-12">
    <a style="font-size: 3.2rem" href="#"><span>Catalogo de </span>{{$categoria[0]->name}}</a>
</div>
<div class="container text-center" style="margin-top: 4rem; padding-top: 3.5rem">

	<div id="products">
		@foreach($products as $product)
			<div class="product white-panel">
				<h3>{{ $product->name }}</h3><hr>
				<img style="width: 200px;height: 180px !important;" src="{{url('/')}}/{{$product->image}}" width="200">
				<div class="product-info panel">

					<h3><span class="label label-success">Precio: ${{ number_format($product->price,2) }}</span></h3>
					<p style="margin-top: 1rem">
						<a class="btn btn-warning" href="{{ route('cart-add', $product->slug) }}">
							<i class="fa fa-cart-plus"></i> comprar
						</a>
						<a class="btn btn-primary" href="{{ route('product-detail', $product->slug) }}"><i class="fa fa-chevron-circle-right"></i> Leer mas</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
    <div style="text-align: center" class="col-lg-12">
        {!! $products->render() !!}
    </div>
</div>

@stop