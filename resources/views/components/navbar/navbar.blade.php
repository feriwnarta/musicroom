<nav class="navbar navbar-expand-lg primary-background">
    <div class="container">


        <a class="navbar-brand" href="#">
            <img src="{{ asset($logo) }}" class="logo" alt="music room logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if($slot != '')
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    {{ $slot }}
                </ul>
            </div>
        @endif

        <div class="d-sm-flex flex-row">

            <x-button.button-dropdown-outline>
                <x-slot:title>ID</x-slot:title>

                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item active" href="#">ID</a></li>
                    <li><a class="dropdown-item" href="#">EN</a></li>

                </ul>
            </x-button.button-dropdown-outline>

            <x-button.button-dark class="margin-left-1rem">Sign In</x-button.button-dark>


            <x-button.button-primary class="margin-left-1rem">Sign Up</x-button.button-primary>


        </div>


    </div>
</nav>
