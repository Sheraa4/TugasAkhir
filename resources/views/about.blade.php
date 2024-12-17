@extends ('main.main')

@section('content')


<section>
    <div class="container about">
        <div class="store-section">
            <div class="store-image-1">
                <a href="{{url('/about')}}"><img src="{{asset('img/store.png')}}" whidth="auto" alt="store"></a>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="headline text-center">Sentuhan kemewahan dalam<br>setiap potongan busana</h1>
        <p class="subheadline text-center">Eleganna bukan sekadar butik biasa. Kami adalah perwujudan gaya dan keanggunan,<br> menghadirkan busana pilihan yang memancarkan pesona Anda di setiap kesempatan. <br> Koleksi kami memadukan desain klasik dan modern, dipadukan dengan bahan <br>berkualitas tinggi dan keahlian penjahit yang tak tertandingi.</p>
    </div>

</section>





@endsection