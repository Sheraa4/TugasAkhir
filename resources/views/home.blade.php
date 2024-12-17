@extends ('main.main')

@section('content')

<!-- Swiper -->
<section class="pt-24">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{asset('img/4.svg')}}" whidth="auto" alt="cr3">
            </div>
            <div class="swiper-slide">
                <img src="{{asset('img/5.svg')}}" whidth="auto" alt="cr2">
            </div>
            <div class="swiper-slide">
                <img src="{{asset('img/6.svg')}}" whidth="auto" alt="cr3">
            </div>
            <div class="swiper-slide">
                <img src="{{asset('img/7.svg')}}" whidth="auto" alt="cr3">
            </div>
        </div>

        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48]">
                
            </svg>
            <span></span>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        on: {
            autoplayTimeLeft(s, time, progress) {
                progressCircle.style.setProperty("--progress", 1 - progress);
                progressContent.textContent = `${Math.ceil(time / 1000)}s`;
            }
        }
    });
</script>



<div class="container mx-auto px-12">

   <div class="flex space-x-4 pt-12">
    <!-- First Item -->
    <div class="relative w-1/3 transform transition-transform duration-300 hover:scale-105 border border-transparent hover:border-black transition-all duration-300">
     <img alt=" Acara santai" class="w-full h-full object-cover transform transition-transform duration-300 hover:scale-105 border border-transparent hover:border-black transition-all duration-300" src="https://i.pinimg.com/736x/0e/24/c5/0e24c518efb9f2c010571daa19548997.jpg"/>
     <div class="absolute bottom-4 left-4 text-white">
      <h2 class="text-xl font-semibold">
      Acara santai
      </h2>
	  <a href="{{ url('card')}}">
      <button class="mt-2 px-4 py-2 bg-white text-black rounded-full">
       Tampilkan
      </button>
	  </a>
     </div>
    </div>
    
    <!-- Second Item -->
    <div class="relative w-1/3 transition-transform duration-300 hover:scale-105 border border-transparent hover:border-black transition-all duration-300">
     <img alt=" Acara semi-formal" class="w-full h-full object-cover transform transition-transform duration-300 hover:scale-105 border border-transparent hover:border-black transition-all duration-300" src="https://i.pinimg.com/736x/94/c0/e8/94c0e8fa13b072c43b0a359181f34477.jpg"/>
     <div class="absolute bottom-4 left-4 text-gray-800">
      <h2 class="text-xl font-semibold">
      Acara semi-formal
      </h2>
      <button class="mt-2 px-4 py-2 bg-white text-black rounded-full">
      Tampilkan
      </button>
     </div>
    </div>
    <div class="relative w-1/3 transform transition-transform duration-300 hover:scale-105 border border-transparent hover:border-black transition-all duration-300">
     <img alt="Momen spesial" class="w-full h-full object-cover transform transition-transform duration-300 hover:scale-105 border border-transparent hover:border-black transition-all duration-300" src="https://i.pinimg.com/736x/a3/48/c2/a348c233ea01c27c9ff44901a0c02396.jpg"/>
     <div class="absolute bottom-4 left-4 text-white1">
      <h2 class="text-xl font-semibold ">
      Momen spesial
      </h2>
	  <a href="{{ url('card')}}#adidas">
      <button class="mt-2 px-4 py-2 bg-white text-black rounded-full">
      Tampilkan
      </button>
	  </a>
     </div>
    </div>

    <!-- Third Item -->
    <div class="relative w-1/3 transform transition-transform duration-300 hover:scale-105 border border-transparent hover:border-black transition-all duration-300">
     <img alt="Santai Feminim" class="w-full h-full object-cover transform transition-transform duration-300 hover:scale-105 border border-transparent hover:border-black transition-all duration-300" src="https://i.pinimg.com/736x/c7/79/7e/c7797eaec8ca735695715aa932e68eb8.jpg"/>
     <div class="absolute bottom-4 left-4 text-gray-800 ">
      <h2 class="text-xl font-semibold">
     Santai Feminim
      </h2>
      <button class="mt-2 px-4 py-2 bg-white text-gray-800 rounded-full">
      Tampilkan
      </button>
     </div>
    </div>
   </div>
  </div>

<!-- <div class="container contact-section">
        <div class="contact-info">
        <img src="{{asset('img/contact.svg')}}" alt="cr3">
            <div class="contact-info-content">
                <h2>Contact us</h2>
                <p><i class="fas fa-phone"></i> 470-601-1911</p>
                <p><i class="fas fa-envelope"></i> Pagedone1234@gmail.com</p>
                <p><i class="fas fa-map-marker-alt"></i> 654 Sycamore Avenue, Meadowville, WA 76543</p>
            </div>
        </div>
        <div class="contact-form">
            <h2>Send Us A Message</h2>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Preferred method of communication</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="communication" id="email" value="email">
                            <label class="form-check-label" for="email">Email</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="communication" id="phone" value="phone" checked>
                            <label class="form-check-label" for="phone">Phone</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send</button>
            </form>
        </div>
    </div> -->

<!-- <form action="https://fabform.io/f/xxxxx" method="post" class="container">
    <section class="py-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 grid-cols-1">
                <div class="lg:mb-0 mb-10">
                    <div class="group w-full h-full">
                        <div class="relative h-full">
                            <img src="{{asset('img/contact.svg')}}" alt="ContactUs tailwind section"
                                class="w-full h-full lg:rounded-l-2xl rounded-2xl bg-blend-multiply bg-neutral-300" />
                            <h1 class="font-manrope text-white text-4xl font-bold leading-10 absolute top-11 left-11">
                                Contact us</h1>
                            <div class="absolute bottom-0 w-full lg:p-11 p-5">
                                <div class="bg-white rounded-lg p-6 block">
                                    <a href="javascript:;" class="flex items-center mb-6">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M22.3092 18.3098C22.0157 18.198 21.8689 18.1421 21.7145 18.1287C21.56 18.1154 21.4058 18.1453 21.0975 18.205L17.8126 18.8416C17.4392 18.9139 17.2525 18.9501 17.0616 18.9206C16.8707 18.891 16.7141 18.8058 16.4008 18.6353C13.8644 17.2551 12.1853 15.6617 11.1192 13.3695C10.9964 13.1055 10.935 12.9735 10.9133 12.8017C10.8917 12.6298 10.9218 12.4684 10.982 12.1456L11.6196 8.72559C11.6759 8.42342 11.7041 8.27233 11.6908 8.12115C11.6775 7.96998 11.6234 7.82612 11.5153 7.5384L10.6314 5.18758C10.37 4.49217 10.2392 4.14447 9.95437 3.94723C9.6695 3.75 9.29804 3.75 8.5551 3.75H5.85778C4.58478 3.75 3.58264 4.8018 3.77336 6.06012C4.24735 9.20085 5.64674 14.8966 9.73544 18.9853C14.0295 23.2794 20.2151 25.1426 23.6187 25.884C24.9335 26.1696 26.0993 25.1448 26.0993 23.7985V21.2824C26.0993 20.5428 26.0993 20.173 25.9034 19.8888C25.7076 19.6046 25.362 19.4729 24.6708 19.2096L22.3092 18.3098Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <h5 class="text-black text-base font-normal leading-6 ml-5">(029) 4444-2023</h5>
                                    </a>
                                    <a href="https://veilmail.io/irish-geoff" class="flex items-center mb-6">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.81501 8.75L10.1985 13.6191C12.8358 15.2015 14.1544 15.9927 15.6032 15.9582C17.0519 15.9237 18.3315 15.0707 20.8905 13.3647L27.185 8.75M12.5 25H17.5C22.214 25 24.5711 25 26.0355 23.5355C27.5 22.0711 27.5 19.714 27.5 15C27.5 10.286 27.5 7.92893 26.0355 6.46447C24.5711 5 22.214 5 17.5 5H12.5C7.78595 5 5.42893 5 3.96447 6.46447C2.5 7.92893 2.5 10.286 2.5 15C2.5 19.714 2.5 22.0711 3.96447 23.5355C5.42893 25 7.78595 25 12.5 25Z"
                                                stroke="#000000" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        <h5 class="text-black text-base font-normal leading-6 ml-5">
                                        info@eleganna.com</h5>
                                    </a>
                                    <a href="javascript:;" class="flex items-center">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M25 12.9169C25 17.716 21.1939 21.5832 18.2779 24.9828C16.8385 26.6609 16.1188 27.5 15 27.5C13.8812 27.5 13.1615 26.6609 11.7221 24.9828C8.80612 21.5832 5 17.716 5 12.9169C5 10.1542 6.05357 7.5046 7.92893 5.55105C9.8043 3.59749 12.3478 2.5 15 2.5C17.6522 2.5 20.1957 3.59749 22.0711 5.55105C23.9464 7.5046 25 10.1542 25 12.9169Z"
                                                stroke="#000000" stroke-width="2" />
                                            <path
                                                d="M17.5 11.6148C17.5 13.0531 16.3807 14.219 15 14.219C13.6193 14.219 12.5 13.0531 12.5 11.6148C12.5 10.1765 13.6193 9.01058 15 9.01058C16.3807 9.01058 17.5 10.1765 17.5 11.6148Z"
                                                stroke="#000000" stroke-width="2" />
                                        </svg>
                                        <h5 class="text-black text-base font-normal leading-6 ml-5">Jl.Kemang Raya No.28, Kemang,JakSel
                                        </h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-5 lg:p-11 lg:rounded-r-2xl rounded-2xl">
                    <h2 class="text-black font-manrope text-4xl font-semibold leading-10 mb-11">Send Us A Message
                    </h2>
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400  shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10"
                        placeholder="Name">
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10"
                        placeholder="Email">
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 shadow-sm bg-transparent text-lg font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10"
                        placeholder="Phone">
                    <div class="mb-10">
                        <h4 class="text-gray-500 text-lg font-normal leading-7 mb-4">Preferred method of communication
                        </h4>
                        <div class="flex">
                            <div class="flex items-center mr-11">
                                <input id="radio-group-1" type="radio" name="radio-group"
                                    class="hidden checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100">
                                <label for="radio-group-1"
                                    class="flex items-center cursor-pointer text-gray-500 text-base font-normal leading-6">
                                    <span class="border border-gray-300 rounded-full mr-2 w-4 h-4  ml-2 "></span> Email
                                </label>
                            </div>
                            <div class="flex items-center">
                                <input id="radio-group-2" type="radio" name="radio-group"
                                    class="hidden checked:bg-no-repeat checked:bg-center checked:border-indigo-500 checked:bg-indigo-100">
                                <label for="radio-group-2"
                                    class="flex items-center cursor-pointer text-gray-500 text-base font-normal leading-6">
                                    <span class="border border-gray-300  rounded-full mr-2 w-4 h-4  ml-2 "></span> Phone
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="text"
                        class="w-full h-12 text-gray-600 placeholder-gray-400 bg-transparent text-lg shadow-sm font-normal leading-7 rounded-full border border-gray-200 focus:outline-none pl-4 mb-10"
                        placeholder="Message">
                    <button
                        class="w-full h-12 text-white text-base font-semibold leading-6 rounded-full transition-all duration-700 hover:bg-indigo-800 bg-black shadow-sm">Send</button>
                </div>
            </div>
    </section>
</form> -->

<div class="container py-5">
    <div class="row g-5 align-items-center">
        <!-- Left Section: Form -->
        <div class="col-lg-6">
            <div class="bg-light p-4 rounded shadow">
                <h2 class="fs-1 fw-bold mb-4">Send Us A Message</h2>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Preferred Method of Communication</label>
                        <div d-flex>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="communication" id="emailComm"
                                    value="Email" required>
                                <label class="form-check-label" for="emailComm">Email</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="communication" id="phoneComm"
                                    value="Phone" required>
                                <label class="form-check-label" for="phoneComm">Phone</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4"
                            placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark w-100">Send</button>
                </form>
            </div>
        </div>
        <!-- Right Section: Image -->
        <div class="col-lg-6">
            <div class="text-center">
                <img src="{{asset('img/contact.svg')}}" alt="Contact Us" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>


@endsection