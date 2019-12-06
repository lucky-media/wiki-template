@php

    $posts = $posts->filter(function($value, $key) {
       return $value->category == "question";
    });

@endphp

@extends('_layouts.master')

@section('body')
    <div class="w-4/6 mt-10 mx-auto">
        <div class="bg-white shadow-lg rounded-lg px-8 py-10 flex flex-col">
            <div class="flex flex-row items-center">
                <a href="/" class="text-sm text-gray-600">Home /</a>
                <span class="text-gray-900 font-normal ml-1">Questions</span>
            </div>

            <div class="flex flex-col my-5">
                <h3 class="text-3xl text-gray-900 font-bold mt-5">Questions</h3>
                <p class="text-gray-700 text-sm">Frequently asked questions</p>
            </div>

            @include('_partials.loop')
        </div>
    </div>
@endsection
