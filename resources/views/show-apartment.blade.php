{{-- @dd($apartment) --}}
@extends('layouts.app')

@section('title')
    {{$apartment->title}}
@endsection

@section('js')
    {{ asset('js/click.js') }}
@endsection

@section('content')


        <!-- section titolo MOCKUP3 -->

        <div class="container">
            <div class="card mb-3">
                <img class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Appartamento panoramico vista mare</h5>
                    {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                </div>

        </div>

        <section class="offer bg-light">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 wow animate__animated animate__fadeInLeft">
                        <img src="https://www.thespruce.com/thmb/_WJOc-34GLmc5QAzOR-3TXKumu8=/960x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/bed-and-fireplace-in-luxury-bedroom-748316169-37b1062605034b23ab6d193be9c58ef6.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="details wow animate__animated animate__fadeInRight">
                            <h2 class="py-3">Lorem</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>

                        <div class="detail_bedroom wow animate__animated animate__fadeInRight animate__delay-1s">
                            <h5 class="pt-5 pl-3">Bedroom</h5>
                            <p class="pl-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>

                        <div class="detail_rooms wow animate__animated animate__fadeInRight animate__delay-2s">
                            <h5 class="pt-5 pl-3">Bedroom</h5>
                            <p class="pl-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="offer bg-light">

            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 wow animate__animated animate__flipInX animate__delay-1s" >
                        <img src="https://www.ladige.it/sites/www.ladige.it/files/styles/798x457/public/google%20maps.jpg?itok=G0_VMHYd" class="img-fluid img-show" alt="">
                    </div>


                    <div class="col-lg-5 mb-lg-0 mb-4 wow animate__animated animate__fadeInRight animate__delay-1s">
                        <div class="card">
                            <div class="card-body">
                                <!-- Header -->
                                <div class="form-header blue accent-1">
                                    <h3 class="mt-2"><i class="fas fa-envelope"></i> Write to us:</h3>
                                </div>

                                <p class="dark-grey-text">We'll write rarely, but only the best content.</p>

                                  <!-- Body -->
                                <div class="md-form">
                                    <i class="fas fa-user prefix grey-text"></i>
                                    <input type="text" id="form-name" class="form-control">
                                    <label for="form-name">Your name</label>
                                </div>

                                <div class="md-form">
                                    <i class="fas fa-envelope prefix grey-text"></i>
                                    <input type="text" id="form-email" class="form-control">
                                    <label for="form-email">Your email</label>
                                </div>

                                <div class="md-form">
                                    <i class="fas fa-tag prefix grey-text"></i>
                                    <input type="text" id="form-Subject" class="form-control">
                                    <label for="form-Subject">Subject</label>
                                </div>

                                <div class="md-form">
                                    <i class="fas fa-pencil-alt prefix grey-text"></i>
                                    <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="form-text">Send message</label>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-light-blue">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
