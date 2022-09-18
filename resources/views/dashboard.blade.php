@extends('layouts.app')

@section('content')
    <div class="container">
        <main class="py-4">
            <div class="row">
                <div class="col-md-2">
                    @include('user.navigation')
                </div>
                <div class="col-md-10">
                    @yield('editor')
                </div>
            </div>
        </main>
    </div>
@endsection
