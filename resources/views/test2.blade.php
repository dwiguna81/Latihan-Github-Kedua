<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
</head>
<body>
<div>
    <a href="test2"><label class="judul-dashboard">Reflect Engineer</label></a>
    <label class="destinasi">
        <a href="#" class="tujuan">HOME</a>
        <a href="#" class="tujuan">TABLES</a>
        <a href="test3" class="tujuan">PRODUCT</a>
        <a href="#" class="tujuan">REPORT</a>
        <a href="#" class="tujuan">ABOUT</a>
        
        @if (Route::has('login'))
                <!-- <div class="diri"> -->
                    @auth
                        <a href="{{ url('/home') }}"><input type="button" value="Profile" class="diri"></a>
                    @else
                        <a href="{{ route('login') }}" ><input type="button" value="Login" class="diri"></a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                <!-- </div> -->
            @endif
    </label>
    <div class="diri">
            
</div>
<div>
   <center><img src="{{asset('storage/images/banner.png')}}"></center>
</div>
<div>
    <label class="title-dashboard">New Product</label>
    <a href="#" class="see">Show All</a>
</div>
<div class="product-dashboard">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}">
</div>
<div class="text-product">
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
</div>
<div>
    <label class="title-dashboard">Most Popular Product</label>
    <a href="#" class="see">Show All</a>
</div>
<div class="product-dashboard">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}" class="product-rules">
    <img src="{{asset('storage/images/product.png')}}">
</div>
<div class="text-product">
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
    <label class="text-rules">Dessert 1</label>
</div>
<div>
    <label class="title-dashboard">Sale For One Week</label>
</div>
<div>
    <img src="{{asset('storage/images/grapik.png')}}" class="grapik-dashboard">
</div>



<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/popper.js') }}"></script>
<script src="{{ url('js/bootstrap.js') }}"></script>
</body>
</html>