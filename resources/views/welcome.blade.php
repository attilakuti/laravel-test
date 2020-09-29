@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4" data-aos="zoom-in">Questionnaires</h1>
    <div class="row">
        @foreach ($questionnaires as $questionnaire)
            <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card border-0 shadow-lg mb-4 mb-lg-0">
                    <img class="card-img-top" src="{{ asset('img/card_header.jpg') }}" alt="Card image cap">
                    <h5 class="card-header font-weight-bold">{{ $questionnaire->name }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">Lorem Ipsum</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="{{ route('questionnaire', $questionnaire->slug) }}" class="btn btn-primary">Complete {{ $questionnaire->name }} &#x290F;</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
