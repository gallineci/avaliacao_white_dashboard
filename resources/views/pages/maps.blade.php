@extends('layouts.app', ['page' => __('Maps'), 'pageSlug' => 'maps'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header">
                    Google Maps
                </div>
                <div class="card-body">
                    <div id="map" class="map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Google Maps Plugin (caso seja necessário) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    
    <!-- Carregar demos.js antes de usá-lo -->
    <script src="{{ asset('js/demos.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Verifica se demo.initGoogleMaps existe antes de chamar
            if (typeof demo !== 'undefined' && typeof demo.initGoogleMaps === 'function') {
                demo.initGoogleMaps();
            }
        });
    </script>
@endpush
