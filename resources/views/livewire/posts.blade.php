<div>
    <main>
        <section class="bg-shape bg-cover" style="background-image: linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%), url(https://images.unsplash.com/20/cambridge.JPG)">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                        <div class="py-lg-19 py-16 text-center">
                            <h1 class="text-white mb-3 display-4">Notícias e Novidades</h1>
                            <p class="lead text-light mb-0">Acompanhe as últimas notícias e novidades.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="pb-4">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $item)
                    <article class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="mb-8">
                            <!-- post classic block -->
                            <div class="mb-4">
                                <a href="{{ route("post", $item->slug) }}">
                                    <div class="img-zoom">
                                        <img src="{{ Storage::url($item->image) }}" alt="post" class="img-fluid rounded w-100" />
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="#" class="text-info mb-3 font-14 d-inline-block fw-semi-bold">{{ $item->category->name }}</a>
                                <a href="{{ route("post", $item->slug) }}">
                                    <h3 class="mb-3">{{ $item->name }}</h3>
                                </a>
                                <div class="mb-3">
                                    <div class="font-14">
                                        <span class="me-2">{{ date("d/m/Y H:i", strtotime($item->created_at)) }}</span>
                                        {{-- <span>
                                            Posted by
                                            <a href="#">Coach</a>
                                        </span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- post classic block -->
                    </article>
                    @endforeach
                    <!-- pagination -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-5">

                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
