@extends('layouts.app')

@section('content')
    <a href="{{ route('post.index') }}">postlar</a>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @livewire('counter')
            </div>
        </div>
    </div>
@endsection
