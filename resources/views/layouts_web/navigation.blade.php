    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <div class="nav-logo">
                <h2>Pre Owned & Co</h2>
                <span class="tagline">Sustainable Fashion</span>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.home') }}/#categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.home') }}/#policies">Policies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.home') }}/#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="nav-link cta-btn" href="#">Shop Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>