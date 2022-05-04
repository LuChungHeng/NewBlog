@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="bg-white rounded-3 p-4">
            <x-post :post="$post" />
        </div>
    </div>
@endsection
