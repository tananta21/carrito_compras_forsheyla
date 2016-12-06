@extends('store.template')

@section('content')

@include('store.partials.slider')

<div class="content">
    <div class="col-md-12" style="text-align: center">
        <h3 style="color: #525067; font-weight: bold; font-family:'Lobster Two', cursive; font-size: 4rem ">¿Que estas Buscando?</h3>
    </div>
    <div class="categories">
        <div class="container">
            @foreach($categorias as $categoria)
            <div class="col-md-2 focus-grid">
                <a href="{{route('catalogo-producto',$categoria->slug)}}">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image"><i class="{{$categoria->icon}}"></i></div>
                            <h4 class="clrchg">{{$categoria->name}}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@stop