@extends('_layouts.master')

@section('body')
    <div class="w-3/4 mt-32 mx-auto">
        <h1 class="font-normal text-center text-white text-5xl">We are here to help</h1>
        <div class="flex flex-row mt-24 -mx-5">
            @include('_components.home_card', [
                            'image' => 'assets/svg/questions.svg',
                            'title' => 'Ask Questions',
                            'desc' => 'Cant find your question make sure to ask for it.',
                            'link' => '/questions'
                            ])


            @include('_components.home_card', [
                            'image' => 'assets/svg/faq.svg',
                            'title' => 'Faqs',
                            'desc' => 'Cant find your question make sure to ask for it.',
                            'link' => '/faq'
                            ])

            @include('_components.home_card', [
                            'image' => 'assets/svg/tutorials.svg',
                            'title' => 'Tutorials',
                            'desc' => 'Cant find your question make sure to ask for it.',
                            'link' => '/tutorials'
                            ])
        </div>
    </div>
@endsection
