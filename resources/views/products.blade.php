
@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
    
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- style css link-->
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="#" class="logo">
            <span>Shop</span>
        </a>
        <nav class="navbar">
            <a href="/">home</a>
            <a href="/products">OurProducts</a>
            <!-- <a href="/aboutus">AboutUs</a> -->
        </nav>

        <div class="icons">
            <a href="/login" class="fas fa-user"></a>
            <a href="/cart" class="fas fa-shopping-cart"></a>
        </div>
    </header><br><br><br>
<div class="row">
<form method="GET" action="{{ route('index') }}" class="p-3 mb-2 bg-light text-dark">
            <input type="text" name="name"  placeholder="Product Name...">
            <button type="submit" class="text-danger">Filter By Name</button>


            <label for="min-price">Min Price:</label>
            <input type="number" id="min-price" name="min_price" value="{{ request()->input('min_price') }}">
            <label for="max-price">Max Price:</label>
            <input type="number" id="max-price" name="max_price" value="{{ request()->input('max_price') }}">
             <button type="submit"  class="text-danger">Filter By Price</button>
 </form>
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->image }}" alt="" style="width:200px;height:200px">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->description }}</p>
                    <p><strong>Price: </strong> {{ $product->price }}$</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button" style="background:pink">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
</body>
    
@endsection