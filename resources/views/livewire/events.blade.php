<div>
    <main>
        <section class="bg-shape bg-cover" style="background-image: linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%), url(https://images.unsplash.com/20/cambridge.JPG)">
            <div class="container">
                <div class="row">
                    <div class="offset-xxl-2 col-xxl-8 col-lg-10 offset-lg-1 col-md-12 col-12">
                        <div class="py-lg-19 py-16 text-light text-center">
                            <!-- heading -->
                            <h1 class="text-white mb-3 display-4">Eventos</h1>
                            <p class="lead mb-0">
                                Aconpanhe os últimos eventos da Instituição.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-lg-8 py-xxl-16 py-6">
            <div class="container">
                <div class="row gy-lg-10 gy-6">
                    @foreach ($events as $item)
                    <div class="col-md-6">
                        <!-- card -->
                        <div class="card border-0">
                            <a href="{{ route("event", $item->slug) }}" class="img-zoom">
                                <!-- image -->
                                <img class="rounded img-fluid w-100" src="{{ Storage::url($item->image) }}" alt="events" />
                            </a>
                        </div>
                        <div class="card border-0">
                            <!-- card body -->
                            <div class="card-body mt-n10 bg-white me-6 rounded-end p-5">
                                <!-- heading -->
                                <a href="{{ route("event", $item->slug) }}">
                                    <h3 class="mb-3 h3">{{ $item->name }}</h3>
                                </a>
                                <a href="{{ route("event", $item->slug) }}" class="btn-secondary-link">Detalhes</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</div>
