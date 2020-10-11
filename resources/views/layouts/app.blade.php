@extends('layouts.base')

@section('body')
     <!-- START -->
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
            <!-- x-Side Overlay-->
            <x-aside></x-aside>
            <!-- x-END Side Overlay -->

            <!-- x-Sidebar -->
            <x-nav></x-nav>
            <!-- x-END Sidebar -->

            <!-- x-Header -->
            <x-header></x-header>
            <!-- x-END Header -->

            <!-- Main Container -->
            @yield('content')
            <!-- END Main Container -->

            <!-- x-Footer -->
            <x-footer></x-footer>
            <!-- x-END Footer -->
        </div>
     <!-- END -->
@endsection

