@extends('site.layouts.master')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs" style="background-image: url('{{ asset('site') }}/assets/img/blog-bg.jpg');color: #fff;padding: 0px;">
            <div style="padding: 10px 0 24px;
        background: rgba(0, 169, 155, 0.85);">
                <div class="container">

                    <div class="d-flex pt-2 justify-content-between align-items-center">
                        <ol style="font-size: 25px;color: #3c3c3c;font-weight: 500;">
                            <li><a href="index.html" style="color: #3c3c3c;">Home</a></li>
                            <li>Blog</li>
                        </ol>
                    </div>


                </div>
            </div>

        </section><!-- End Breadcrumbs Section -->

        <!-- ======= Post Grid Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-8">

                            <div class="post-entry-1 lg">
                                <a href="{{ route('singelblog', $blog->slug) }}"><img
                                        src="{{ url('media/' . $blog->image->name) }}"
                                        alt="" class="img-fluid pb-4"></a>
                                <div class="post-meta">
                                    <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/M/Y') }}</span>

                                </div>
                                <h2><a href="{{ route('singelblog', $blog->slug) }}">{{ $blog->title }}</a></h2>
                                {!! $blog->short_content !!}

                                <div class="d-flex align-items-center author">
                                    <!-- <div class="photo"><img src="assets/img/ar-b.png" alt="" class="img-fluid"></div> -->
                                    <div class="name">
                                        <a class="m-0 p-0 btn btn-2 read-more" href="{{ route('singelblog', $blog->slug) }}">
                                            Read more...
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Category List</h3>
                            <ul>
                                @foreach ($categories as $category)
                                    <li style="color: #00b3a4;font-size: 20px;"><a style="color: #00b3a4;"
                                            href="jacasc">{{ $category->name }}</a> <span
                                            style="float: right;">({{ COUNT($category->blog) }})</span></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>


                </div> <!-- End .row -->
                    <div class="card col-lg-4 col-sm-12">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-sm-12">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 col-sm-12">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div> <!-- End Cards -->
            </div>
            </div>

        </section> <!-- End Post Grid Section -->

    </main><!-- End #main -->
@endsection
