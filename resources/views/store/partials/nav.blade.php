<nav class="navbar navbar-default" style="background: #525067; margin-bottom: 0rem">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="font-size: 2.5rem; font-family: 'Lobster Two', cursive; padding-left: 2.5rem" class="navbar-brand main-title" href="{{ route('home') }}">Shopping Cart <i class="fa fa-shopping-cart "></i></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
      <ul class="nav navbar-nav navbar-right" >
        <li><a style="color: #ffffff; font-weight: bold; font-size: 2rem" href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart"></i></a></li>
        <li><a style="color: #ffffff; font-weight: 500; font-size: 1.9rem; font-family: 'Lobster Two', cursive" href="#">Conocenos</a></li>
        <li><a style="color: #ffffff; font-weight: 500; font-size: 1.9rem; font-family: 'Lobster Two', cursive" href="#">Contacto</a></li>
        @include('store.partials.menu-user')
      </ul>
    </div>
  </div>
</nav>