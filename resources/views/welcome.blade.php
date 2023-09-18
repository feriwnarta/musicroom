@extends('templates.app')


@section('content')
    {{-- Navbar content --}}
    <x-navbar.navbar logo="svg/musicroom-logo.svg">

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Artist</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Community</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Videos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Events</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Store</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
    </x-navbar.navbar>



    <div class="container">

        <div class="position-relative" style="height: 500px;">
            <div class="hero-rect1 position-absolute" style="left: 0%; top: 100%; z-index: 1;">
                <img src="{{ asset('img/Ellipse 1.png') }}"
                    class="position-absolute start-100 translate-middle profile-hero" style="top: -30%;">
                <div class="text-white body-text-1-bold text-center">Bridging Social Frenzy <br>
                    to Music Streams</div>

                <div class="d-flex flex-row align-items-center mt-137 justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <i class="tiktok-hero-icon"></i>

                        <div class="d-flex flex-column">
                            <div>
                                <i class="play-icon">
                                    <p class="caption-regular ml-1-25 text-white">461.1K</p>
                                </i>
                            </div>
                            <div>
                                <i class="like-icon">
                                    <p class="caption-regular ml-1-25 text-white">641.3K</p>
                                </i>
                            </div>

                        </div>
                    </div>


                    <div class="d-flex flex-row align-items-center">
                        <i class="spotify-icon"></i>
                        <i class="trending-up-icon ml-025"></i>
                        <div class="text-white caption-regular ml-025">1.9M</div>
                    </div>


                </div>

            </div>

            <div class="hero-rect2 position-absolute" style="left: 50%; top: 0%; z-index: 2;">
                <div class="rect-bg">
                    <p class="body-text-1-bold text-white">Ignite Virality,
                        Boost Awareness.
                        Turn Up the Spotlight!</p>
                    <img src="{{ asset('img/Ellipse 1.png') }}" class="position-absolute" style="left: -40%;">
                </div>
            </div>

            <div class="hero-rect3 position-absolute" style="right: 0%; top: 55%; z-index: 3;">

                <div class="text-white body-text-1-bold text-center">Bridging Social Frenzy <br>
                    to Music Streams</div>

                <div class="d-flex flex-row align-items-center mt-137 justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <i class="tiktok-hero-icon"></i>

                        <div class="d-flex flex-column">
                            <div>
                                <i class="play-icon">
                                    <p class="caption-regular ml-1-25 text-white">461.1K</p>
                                </i>
                            </div>
                            <div>
                                <i class="like-icon">
                                    <p class="caption-regular ml-1-25 text-white">641.3K</p>
                                </i>
                            </div>

                        </div>
                    </div>


                    <div class="d-flex flex-row align-items-center">
                        <i class="spotify-icon"></i>
                        <i class="trending-up-icon ml-025"></i>
                        <div class="text-white caption-regular ml-025">1.9M</div>
                    </div>


                </div>


                <img src="{{ asset('img/Ellipse 1.png') }}" class="position-absolute" style="left: -15%; bottom: -65%;">

            </div>

            <div style="z-index: 4; position: absolute; top: 40%; left: 15%;">

                <div class="display-extra-bold text-white text-center">
                    Discover the Sound <br>of Virality
                </div>
                <div class="heading-6-medium text-center text-white mt-1-5">Amplify Your Music, Energize Your Fanbase.
                    <br>Welcome
                    to Your Music Revolution.
                </div>
                <div class="body-text-1-regular text-center neutral-70 mt-1-5">Combining Distinctive UGC Content, Active
                    Music
                    Community, and Result-driven Promotion,<br>
                    We Empower Your Artist's Journey to Virality.</div>

                <x-button.button-primary class="reach-out-btn mt-2-5">Reach Out, We're Ready</x-button.button-primary>


            </div>
        </div>

    </div>
@endsection









{{-- <x-button.button-primary>TEST</x-button.button-primary> --}}
{{-- <x-button.button-secondary>TEST</x-button.button-secondary> --}}
{{-- <x-button.button-dark>TEST</x-button.button-dark> --}}

{{-- <x-button.button-dropdown-outline> --}}
{{--        <x-slot:title>EN</x-slot:title> --}}

{{--        <ul class="dropdown-menu dropdown-menu-dark"> --}}
{{--            <li><a class="dropdown-item active" href="#">Action</a></li> --}}
{{--            <li><a class="dropdown-item" href="#">Another action</a></li> --}}
{{--            <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
{{--            <li><hr class="dropdown-divider"></li> --}}
{{--            <li><a class="dropdown-item" href="#">Separated link</a></li> --}}
{{--        </ul> --}}
{{-- </x-button.button-dropdown-outline> --}}

{{-- <x-button.button-input-primary placeHolder="test">Test</x-button.button-input-primary> --}}





{{-- <div class="container d-sm-flex flex-column align-items-center"> --}}
{{--    <h1>Button</h1> --}}

{{--    <div class="d-sm-flex flex-row flex-wrap"> --}}
{{--        <button type="button" class="btn-primary">Log in</button> --}}
{{--        <button type="button" class="btn-primary">See How We Work</button> --}}

{{--        <button type="button" class="btn-secondary">See How We Work</button> --}}

{{--        <button type="button" class="btn-dark">Sign In</button> --}}
{{--        <button type="button" class="btn-primary">Sign Up</button> --}}

{{--        <div class="dropdown"> --}}
{{--            <button class="btn btn-dropdown-outline" type="button" data-bs-toggle="dropdown" aria-expanded="false"> --}}
{{--                EN --}}
{{--                <i class="bottom-chevron"></i> --}}
{{--            </button> --}}
{{--            </button> --}}
{{--            <ul class="dropdown-menu dropdown-menu-dark"> --}}
{{--                <li><a class="dropdown-item active" href="#">Action</a></li> --}}
{{--                <li><a class="dropdown-item" href="#">Another action</a></li> --}}
{{--                <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
{{--                <li><hr class="dropdown-divider"></li> --}}
{{--                <li><a class="dropdown-item" href="#">Separated link</a></li> --}}
{{--            </ul> --}}
{{--        </div> --}}

{{--        <div class="input-group btn-input-primary"> --}}
{{--            <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2"> --}}
{{--            <button class="btn-primary" type="button" id="button-addon2">Subscribe Now</button> --}}
{{--        </div> --}}

{{--    </div> --}}

{{-- </div> --}}

{{-- <div class="container d-sm-flex flex-column align-items-center"> --}}
{{--    <h1>Text</h1> --}}

{{--    <div class="extra-bold">HE/Extra Bold</div> --}}
{{--    <h1>HE/Extra Bold</h1> --}}
{{--    <h2>HE/Extra Bold</h2> --}}
{{--    <h3>HE/Extra Bold</h3> --}}
{{--    <h4>HE/Extra Bold</h4> --}}
{{--    <h5>HE/Extra Bold</h5> --}}
{{--    <h5 class="semi-bold">HE/Extra Bold</h5> --}}
{{--    <p class="subtitle-1-regular">Subtitle 1/Regular</p> --}}
{{--    <p class="subtitle-2-regular">Subtitle 2/Regular</p> --}}
{{--    <p class="p1-regular">paragraf 1/Regular</p> --}}
{{--    <p class="p2-regular">paragraf 2/Regular</p> --}}
{{--    <p class="p3-regular">paragraf 3/Regular</p> --}}

{{-- </div> --}}
