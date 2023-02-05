<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="index.html"><img src="{{ asset('site') }}/assets/img/logo/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                @if (Route::current()->getName() == 'index')
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#aboutWriter">About The Writer</a></li>
                    <li><a class="nav-link scrollto" href="#product">Our Products</a></li>
                    <li><a class="nav-link scrollto " href="#testimonials">Non-Muslim Views </a></li>
                    <li><a class="nav-link scrollto" href="{{ route('blog') }}">Blog</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                @else

                    <li><a class="nav-link scrollto" href="{{ route('index') }}#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#aboutWriter">About The Writer</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#product">Our Products</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#testimonials">Non-Muslim Views </a></li>
                    <li><a class="nav-link scrollto active" href="{{ route('blog') }}">Blog</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#contact">Contact</a></li>
                @endif

                <li class="dropdown">
                    <a href="#" style="    padding-left: 120px;"><i class="fi fi-us" style="height: 20px;"></i>
                        <span> &nbsp; {{ session()->get('locale') }}</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        {{-- <select class="form-control changeLang">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>France</option>
                            <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>
                        </select> --}}
                        @foreach ($languages as $language)
                            <li>
                                <a style="justify-content: left;" class="changeLang"
                                    href="{{ route('changeLang', $language->name) }}"><i class="fi fi-us"
                                        style="height: 20px;"></i></i>{{ $language->name }}</a>

                            </li>
                        @endforeach
                        {{-- <li>
                            <!-- <a  class="" href="#"><i class="fi fi-us" style="height: 20px;"></i>English </a> -->
                            <a style="justify-content: left;" href="#"><i class="fi fi-us"
                                    style="height: 20px;"></i></i>English</a>

                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li>
                            <a style="justify-content: left;" href="#"><i class="fi fi-gr"
                                    style="height: 20px;"></i></i>Polski</a>
                        </li>

                        <li>
                            <a style="justify-content: left;" href="#"><i class="fi fi-eg"
                                    style="height: 20px;"></i>Arabic</a>
                        </li> --}}

                    </ul>
                </li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
