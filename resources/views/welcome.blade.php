@extends("layouts.main")

@section("title")
@endsection

@section("content")
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">
                            Wochenmärkte in Hamburg
                        </h1>
                        <p class="lead fw-normal text-white-50 mb-4">
                            Auf dieser Plattform finden Sie Informationen zu den Wochenmärkten in Hamburg
                        </p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">
                                Heute geöffnet
                            </a>
                            <a class="btn btn-outline-light btn-lg px-4" href="#!">
                                Alle Märkte
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <div class="" id="mapbody" style="height:400px;width: 600px;">

                    </div>
                </div>

                <script src="/assets/js/map.js"></script>
                <script>

                    @foreach(\App\Models\Event::all() as $e)
                         <?php
                             $mm = explode(";", $e->map_marker);

                             $lat = $mm[0];
                             $lng = $mm[1];
                             ?>
let marker_{{ str_replace("-", "_", $e->id) }} = L.marker([{{ $lat }}, {{ $lng }}]).addTo(map);
                    @endforeach


                </script>
            </div>
        </div>
    </header>

@endsection
