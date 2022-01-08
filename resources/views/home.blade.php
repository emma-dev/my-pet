@extends('layout')

@section('content')

    <section class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 style="font-size: 96px;"><b>Find a <span style="color:#AC87FC;">new</span></b></h1>
                    <h4 style="font-size: 46px;font-style: light;"><span class="w3-hide-small w3-text-white">pet for
                            you.</span></h4>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 ">
                    <img src="assets/img/bg.png"  alt="image_BG">
                </div>
            </div>
        </div>
    </section>

    @if (count($dogs))
        <section>
            <div class="container">

                <div class="row">
                    @foreach ($dogs as $dog)


                        <div class="col-12 col-sm-6 col-lg-3 item">
                            <div class="card">
                                <div class="image-over">
                                    <a href="/item-details/{{ $dog->id }}">
                                        <img class="card-img-top" src="{{ $dog->thumbnail }}" alt="">
                                    </a>
                                </div>
                                <!-- Card Caption -->
                                <div class="card-caption col-12 p-0">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <a href="/item-details/{{ $dog->id }}">
                                            <h5 class="mb-0">{{ $dog->name }}</h5>
                                        </a>
                                        <div class="seller d-flex align-items-center my-3">
                                            Age:<span>{{ $dog->age }}</span>
                                            </p>
                                        </div>
                                        <div class="card-bottom d-flex justify-content-between">
                                            Breed: <span>
                                                {{ $dog->breed }}
                                            </span>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

    @endif

@endsection
