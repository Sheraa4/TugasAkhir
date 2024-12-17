@extends ('main.main')

@section('content')


<body class="tops bg-light">
    <!-- Tops -->
    <div class="container my-5" id="tops">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/tops1')}}">
                        <img src="{{ asset('img/tos1.svg') }}" alt="tops1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Serenity Classic</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 299.900</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/tops2')}}">
                        <img src="{{ asset('img/tops2.svg') }}" alt="tops2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blouse Breeze Charm</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 375.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/tops3')}}">
                        <img src="{{ asset('img/tops3.svg') }}" alt="tops3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Golden Glow Top</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 320.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/tops4')}}">
                        <img src="{{ asset('img/tops4.svg') }}" alt="tops4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">White Harmony Blouse</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 385.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tops -->

    <!-- Bottoms -->
    <div class="container my-5" id="bottoms">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms1')}}">
                        <img src="{{ asset('img/bottom1.svg') }}" alt="bottom1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Navy Flow Jeans</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 310.000 <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms2')}}">
                        <img src="{{ asset('img/bottom2.svg') }}" alt="bottom2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Soft Sand Pants</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 390.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms3')}}">
                        <img src="{{ asset('img/bottom3.svg') }}" alt="bottom3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Olive Belle Skirt</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 400.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/bottoms4')}}">
                        <img src="{{ asset('img/bottom4.svg') }}" alt="bottom4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Denim Bold Skirt</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 395.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottoms -->

    <!-- Outwear -->
    <div class="container my-5" id="outwear">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear1')}}">
                        <img src="{{ asset('img/outer1.svg') }}" alt="outwear1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Aurora Textured Jacket</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 450.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear2')}}">
                        <img src="{{ asset('img/outwe2.svg') }}" alt="outwear2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Noir Luxe Blazer</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 650.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear3')}}">
                        <img src="{{ asset('img/outer3.svg') }}" alt="outwear3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blush Bow Cardigan</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 350.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/outwear4')}}">
                        <img src="{{ asset('img/OUTER4.svg') }}" alt="outwear4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Shearling Warm Coat</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 700.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Outwear -->

    <!-- Dresses -->
    <div class="container my-5" id="dresses">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses1')}}">
                        <img src="{{ asset('img/Dress1.svg') }}" alt="dresses1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Ivory Grace Gown</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 469.900</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses2')}}">
                        <img src="{{ asset('img/Dress2.svg') }}" alt="dresses2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1"> White Ruffle Charm Dress</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 399.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses3')}}">
                        <img src="{{ asset('img/Dress3.svg') }}" alt="dresses3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blue Victorian Bow Dress</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 389.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/dresses4')}}">
                        <img src="{{ asset('img/Dress4.svg') }}" alt="dresses4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Blush Romantic Maxi</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 479.900</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dresses -->

    <!-- Shoes -->
    <div class="container my-5" id="Shoes">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes1')}}">
                        <img src="{{ asset('img/shoes1.jpg') }}" alt="shoes"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Classic Charm</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 469.900</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/shoes2')}}">
                        <img src="{{ asset('img/shoes2.jpg') }}" alt="shoes2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Elegance Stride</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 399.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-card">
                <a href="{{url('/shoes3')}}">
                    <img src="{{ asset('img/shoes3.jpg') }}" alt="shoes3"></a>
                </a>
                <div class="card-body">
                    <h5 class="ps-1">Midnight Luxe</h5>
                    <div class="love d-flex justify-content-between">
                        <p class="price ps-1">IDR 389.000</p>
                        <i class="fas fa-heart fav-icon m-1"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Card 4 -->
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="product-card">
                <a href="{{url('/shoes4')}}">
                    <img src="{{ asset('img/shoes4.jpg') }}" alt="shoes4"></a>
                </a>
                <div class="card-body">
                    <h5 class="ps-1">Skyline Sleek</h5>
                    <div class="love d-flex justify-content-between">
                        <p class="price ps-1">IDR 479.900</p>
                        <i class="fas fa-heart fav-icon m-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<!-- Wedding clothess -->
<div class="container my-5" id="Wedding">
        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/wedding1')}}">
                        <img src="{{ asset('img/WEDDINGDRES1.svg') }}" alt="outwear1"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Pearl Elegance Gown</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 5.500.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/wedding2')}}">
                        <img src="{{ asset('img/WEDDINGDRESS2.svg') }}" alt="outwear2"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Ocean Mist Dress</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 7.200.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/wedding3')}}">
                        <img src="{{ asset('img/WEDDINGDRESS3.svg') }}" alt="outwear3"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Lace Dream Gown</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 6.800.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/wedding4')}}">
                        <img src="{{ asset('img/WEDDINGDRESS4.svg') }}" alt="outwear4"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">Midnight Glam Gown</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">IDR 9.000.000</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Outwear -->
        
@endsection