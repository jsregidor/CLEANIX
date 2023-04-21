@extends('layouts.app')

@section('content')
<div class="col-4 container-fluid hero-section d-flex align-items-center justify-content-end text-right">
    <div class="col-6 text-center text-#68c7e3 p-4">
        <h1 class="mb-4">YOUR #1 ONE STOP CLEANING SERVICE PROVIDER</h1>
        <button class="btn-cyan">Book Now</button>
    </div>
</div>
<div class="container-fluid px-0">
<div class="bg-cyan px-4 py-5">
   </div>
</div>

<x-cleanix-services></x-cleanix-services>
<x-about-us></x-about-us>
<x-cleanix-footer></x-cleanix-footer>

@endsection