@extends('layouts.app')

@section('content')
<div class="container py-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 mb-0">
            <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $questionnaire_name }}</li>
        </ol>
    </nav>
    <div class="d-flex flex-column align-items-center">
        <h2 class="text-center mt-4 mb-3 bg-primary d-inline-block text-white rounded p-2" data-aos="zoom-in">{{ $questionnaire_name }}</h2>
        <div class="row mt-4">
            <div class="col-12">
                <form method="POST" id="questionnaireForm" class="shadow rounded p-4" data-aos="fade-up">
                    @csrf
                    @foreach ($questions as $question)
                        @if ($loop->first)
                            <div class="form-group">
                                <label for="answer-{{ $loop->index }}">{{ $question->question }}</label>
                                <input type="text" class="form-control" id="answer-{{ $loop->index }}" placeholder="Your answer for question {{ $question->id}}" autofocus required>
                            </div>
                        @else
                            <div class="form-group">
                                <label for="answer-{{ $loop->index }}">{{ $question->question }}</label>
                                <input type="text" class="form-control" id="answer-{{ $loop->index }}" placeholder="Your answer for question {{ $question->id}}" required>
                            </div>
                        @endif
                    @endforeach
                    <input type="hidden" class="hidden-user-email" value="{{ Auth::user()->email }}">
                    <input type="hidden" class="hidden-questionnaire-id" value="{{ $questionnaire_id }}">
                    <button type="submit" class="btn btn-primary w-100 questionnaire-submit-btn" id="{{ $questionnaire_slug }}Btn">Submit</button>
                </form>
            </div>
        </div>
        @if ($questionnaire_name == "Questionnaire 1") 
            <a class="mt-3" href="{{ route('questionnaire', 'questionnaire-2') }}">Questionnaire 2 &#x290F;</a>
        @elseif ($questionnaire_name == "Questionnaire 2") 
            <a class="mt-3" href="{{ route('questionnaire', 'questionnaire-3') }}">Questionnaire 3 &#x290F;</a>
        @else
            <a class="mt-3" href="{{ route('welcome') }}">Home &#x290F;</a>
        @endif
    </div>
</div>

@endsection
