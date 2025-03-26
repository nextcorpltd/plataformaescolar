<div>

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{ Storage::url($slide->image) ?? null }}" style="min-width: 450px" class="d-block w-100 " alt="...">
                </div>
                @foreach ($slides as $item)
                <div class="carousel-item">
                    <img src="{{ Storage::url($item->image) ?? null }}" style="min-width: 450px" class="d-block w-100 " alt="...">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- start about section -->
        <section class="py-xxl-16 py-lg-8 pt-6">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="offset-xxl-3 col-xxl-6 col-lg-8 offset-lg-2 col-md-12 col-12">
                        <div class="mb-8 text-center">
                            <!-- heading -->
                            <h2 class="mb-3 h1">Bem-vindo ao ISPEL</h2>
                            <!-- para -->
                            <p class="lead">O Instituto Superior Politécnico Evangélico do Lubango (ISPEL) é uma instituição de ensino superior comprometida com a formação de profissionais altamente qualificados.</p>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-end">
                    <div class="col-xl-7 col-lg-12 col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-4 mb-2 mb-lg-2">
                                <!-- image -->
                                <img src="https://plus.unsplash.com/premium_photo-1713296255442-e9338f42aad8?q=80&w=1322&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="porfile" class="img-fluid rounded h-100 w-100 img-hover-zoom--basic" />
                            </div>
                            <div class="col-md-8 mb-2 mb-lg-2">
                                <!-- image -->
                                <img src="https://images.unsplash.com/20/cambridge.JPG" alt="profile" class="img-fluid rounded h-100 w-100" />
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-xl-5 col-lg-12 col-md-12 col-12 mt-3 mt-xl-0">
                        <!-- para -->
                        <p class="mb-9">
                            Preparados para enfrentar os desafios do mercado de trabalho com ética, inovação e excelência. Nosso diferencial está na integração do conhecimento técnico-científico com princípios cristãos, promovendo uma educação transformadora.
                        </p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-2 mb-lg-2">
                                <!-- image -->
                                <img src="https://images.unsplash.com/photo-1606761568499-6d2451b23c66?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile" class="img-fluid h-100 rounded w-100" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 mb-2 mb-lg-2">
                                <!-- image -->
                                <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="profile" class="img-fluid h-100 rounded w-100" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- start podcast -->
        <section class="py-xxl-16 py-lg-8 py-6 bg-primary">
            <div class="container">
                <!-- row -->
                <div class="row d-xl-flex align-items-xl-center gy-4">
                    <!-- col -->
                    <div class="col-lg-6 col-md-12">
                        <div class="text-white pe-xl-10 mb-4 mb-xl-0">
                            <h2 class="display-4 text-white mb-3">Eventos, cursos, livros e mais</h2>
                            <!-- para -->
                            <p class="lead mb-0">Explore o nosso conteúdo com exclusividade, e esteja por dentro de tudo que acontece em nosso campus.</p>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-6 col-md-6">
                        <!-- image -->
                        <div class="img-overlay img-zoom">
                            <a href="#">
                                <img class="rounded img-fluid w-100" src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="podcast" />
                            </a>
                            <!-- button -->
                            <div class="caption">
                                <a href="/biblioteca" class="btn btn-outline-white btn-lg">Biblioteca</a>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-6 col-md-6">
                        <!-- image -->
                        <div class="img-overlay img-zoom">
                            <a href="#">
                                <img class="rounded img-fluid w-100" src="assets/images/course-img-2.png" alt="events" />
                            </a>
                            <!-- button -->
                            <div class="caption">
                                <a href="/eventos" class="btn btn-outline-white btn-lg">Eventos</a>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-6 col-md-4 d-md-none d-lg-block">
                        <!-- image -->
                        <div class="img-overlay img-zoom">
                            <a href="#">
                                <img class="rounded img-fluid w-100" src="assets/images/course-img-3.png" alt="course" />
                            </a>
                            <!-- button -->
                            <div class="caption">
                                <a href="/cursos/pos-graduacao" class="btn btn-outline-white btn-lg">Cursos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of podcast -->

        <section class="py-lg-8 py-xxl-16 py-6">
            <div class="container">
                <div class="row">
                    <div class="offset-xxl-3 col-xxl-6 col-lg-8 offset-lg-2 col-md-12">
                        <div class="text-center mb-8">
                            <!-- content -->
                            <h2 class="mb-3 h1">
                                Eventos
                            </h2>
                            <p class="lead">Explore os últimos eventos da Instutuição.</p>
                        </div>
                    </div>
                </div>
                <div class="row gy-lg-10 gy-6">
                    @foreach ($events as $item)
                    <div class="col-md-6">
                        <!-- card -->
                        <div class="card border-0">
                            <a href="{{ route("event", $item->slug) }}" class="img-zoom">
                                <!-- image -->
                                <img class="rounded img-fluid w-100" src="{{ Storage::url($item->image) ?? null }}" alt="events" />
                            </a>
                        </div>
                        <div class="card border-0">
                            <!-- card body -->
                            <div class="card-body mt-n10 bg-white me-6 rounded-end p-5">
                                <!-- heading -->
                                <a href="{{ route("event", $item->slug) }}">
                                    <h3 class="mb-3 h3">{{ $item->name }}</h3>
                                </a>
                                {{-- <p class="small mb-2">
                                    <!-- icon -->
                                    <span><i class="fas fa-calendar-alt me-2 text-danger"></i></span>
                                    November 6, 2024 12:16 PM
                                </p>
                                <p class="small mb-4">
                                    <!-- icon -->
                                    <span><i class="fas fa-map-marker-alt me-2 text-danger"></i></span>
                                    2972 Westheimer Rd undefined Santa Ana,
                                </p> --}}
                                <a href="{{ route("event", $item->slug) }}" class="btn-secondary-link">Detalhes</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- start program section -->
        <section class="py-6 py-xxl-16 py-lg-8">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="offset-xxl-3 col-xxl-6 col-lg-8 offset-lg-2 col-md-12">
                        <div class="text-center mb-8">
                            <!-- content -->
                            <h2 class="mb-3 h1">
                                Notícias
                            </h2>
                            <p class="lead">Acompanhe as últimas notícias e novidades.</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach ($posts as $item)
                    <div class="col-lg-4 d-lg-block d-md-none col-12">
                        <!-- card -->
                        <div class="card border-0">
                            <a href="{{ route("post", $item->slug) }}" class="img-zoom"><img class="rounded img-fluid w-100" src="{{ Storage::url($item->image) ?? null }}" alt="thumb-img" /></a>
                        </div>
                        <div class="card border-0">
                            <!-- card body -->
                            <div class="card-body mt-n16 bg-white me-6 rounded-end p-4">
                                <h3 class="mb-3"><a href="{{ route("post", $item->slug) }}" class="text-inherit">{{ $item->category->name }}</a></h3>
                                <p>{{ $item->title }}</p>
                                <a href="{{ route("post", $item->slug) }}" class="btn-primary-link">Leia mais</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- end of program section -->
    </main>

</div>
