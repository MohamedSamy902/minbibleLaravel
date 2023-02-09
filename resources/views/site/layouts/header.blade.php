<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="index.html"><img src="{{ asset('site') }}/assets/img/logo/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                @if (Route::current()->getName() == 'index')
                    <li><a class="nav-link scrollto active" href="#hero">{{ $homeTranslations->translation }}</a></li>
                    <li><a class="nav-link scrollto" href="#aboutWriter">{{ $aboutTheWriterTranslations->translation }}</a></li>
                    <li><a class="nav-link scrollto" href="#product">{{ $productsTranslations->translation }}</a></li>
                    <li><a class="nav-link scrollto " href="#testimonials">{{ $nonMuslimViewsTranslations->translation }} </a></li>
                    <li><a class="nav-link scrollto" href="{{ route('blog') }}">{{ $blogTranslations->translation }}</a></li>
                    <li><a class="nav-link scrollto" href="#contact">{{ $contactTranslations->translation }}</a></li>
                @else

                    <li><a class="nav-link scrollto" href="{{ route('index') }}#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#aboutWriter">{{ $aboutTheWriterTranslations->translation }}</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#product">{{ $productsTranslations->translation }}</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#testimonials">{{ $nonMuslimViewsTranslations->translation }} </a></li>
                    <li><a class="nav-link scrollto active" href="{{ route('blog') }}">{{ $blogTranslations->translation }}</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('index') }}#contact">{{ $contactTranslations->translation }}</a></li>
                @endif

                <li class="dropdown">
                    <a href="#" style="    padding-left: 120px;"><i class="{{ session()->get('locale') ? session()->get('locale') : 'fi fi-us' }}" style="height: 20px;"></i>
                        <span> &nbsp; {{ session()->get('locale') ? session()->get('locale') : $languages[0]->name }}</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        @foreach ($languages as $language)
                            <li>
                                <a style="justify-content: left;" class="changeLang"
                                    href="{{ route('changeLang', $language->name) }}"><i class="{{ $language->flag }}"
                                        style="height: 20px;"></i></i>{{ $language->name }}</a>

                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
