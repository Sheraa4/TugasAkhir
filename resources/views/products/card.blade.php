@extends ('main.main')

@section('content')


<body class="tops bg-light">
    <!-- Tops -->
    <div class="container my-5" id="tops">
        <div class="row g-4">
            <!-- Product Card 1 -->
            @forelse ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-card">
                    <a href="{{url('/tops1')}}">
                        <img src="{{ asset($product->image) }}" alt="Product Image"></a>
                    </a>
                    <div class="card-body">
                        <h5 class="ps-1">{{ $product->name }}</h5>
                        <div class="love d-flex justify-content-between">
                            <p class="price ps-1">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            <i class="fas fa-heart fav-icon m-1"></i>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                                        <tr>
                                            <td colspan="5" class="px-4 py-2 text-center text-gray-500">
                                                No record found!
                                            </td>
                                        </tr>
            @endforelse

        </div>
    </div>
    <!-- Outwear -->
        
@endsection