@extends('layouts.base')

@section('body')
     <!-- START -->
        <div id="page-container" class="page-header-fixed main-content-narrow">

            <!-- Main Container -->
            @yield('content')
            <!-- END Main Container -->

            <!-- x-Footer -->
            <x-footer></x-footer>
            <!-- x-END Footer -->
        </div>
     <!-- END -->
@endsection

