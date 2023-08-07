@extends('home') 
@section('title', $viewData['title']) 
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/sofa.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/meja.png') }}" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{ asset('/img/lemari.png') }}" class="img-fluid rounded">
    </div>
</div> @endsection
