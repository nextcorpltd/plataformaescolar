<div>
    <main>
        <section class="bg-shape bg-cover" style="background-image: linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%), url(https://images.unsplash.com/20/cambridge.JPG)">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
                        <div class="py-lg-19 py-16 text-light text-center">
                            <!-- heading -->
                            <h1 class="text-white mb-3 display-4">Cursos de {{ $section->name }}</h1>
                            <p class="lead mb-0">Explore as nossas ofertas de cursos de {{ $section->name }}.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-xxl-16 py-lg-8 py-6">
            <div class="container">

                <div class="row gy-5">
                    @foreach ($courses as $item)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                        <div>
                            <!-- image -->
                            <a href="{{ route("course", $item->slug) }}">
                                <img src="{{ Storage::url($item->image) }}" alt="course"  class="img-fluid w-100  rounded-top" />
                            </a>
                            <div class="card-body p-4 border border-top-0 rounded-bottom bg-white">
                                <!-- heading -->
                                <a href="{{ route('course', $item->slug) }}">
                                    <h4 class="mb-3">{{ $item->name }}</h4>
                                </a>
                                <p class="font-13 fw-bold">
                                    <span class="me-2">{{ $item->section->name }}</span>
                                    {{-- <span class="me-2">54 Students</span>
                                    <span>2 weeks</span> --}}
                                </p>
                                <!-- price -->
                                {{-- <span class="fw-bold text-secondary h4 mb-0">$35.00</span> --}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
</div>
