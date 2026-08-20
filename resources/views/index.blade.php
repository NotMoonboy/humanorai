@extends('layouts.default')

@section('title', config('app.name'))

@section('content')
<x-header />

<section class="relative isolate min-h-dvh overflow-hidden">
    <video class="absolute inset-0 size-full object-cover" autoplay loop muted playsinline aria-hidden="true">
        <source src="{{ asset('videos/orange_bg-transcode.mp4') }}" type="video/mp4">
    </video>
    <div class="relative z-10 flex flex-col min-h-dvh items-center justify-center px-6">
        <img src="{{ asset('img/hero_logo2.gif') }}" alt="{{ config('app.name') }}" loading="eager" class="w-full max-w-md md:max-w-sm lg:max-w-137 h-auto drop-shadow-lg pointer-events-none">
        <p class="text-primary text-4xl font-silver-neuebit mt-6">{{ __("Chat with someone. Figure out if it's a human or an AI!") }}</p>
        <div class="flex flex-col items-center justify-center gap-3 w-full max-w-70 mt-12">
            <x-button :label="__('Quick Play')" />
            <x-button :label="__('Ranked')" />
            <x-button :label="__('1v1 with a friend')" />
            <a href="" class="text-2xl underline hover:opacity-70 transition-opacity duration-50">{{ __('How to play') }}</a>
        </div>
    </div>
</section>
@endsection

@section('other')

@endsection