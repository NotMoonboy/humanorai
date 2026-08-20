@extends('layouts.default')

@section('title', config('app.name'))

@section('content')
<x-header />

<section class="relative overflow-hidden">
    <div class="flex min-h-dvh flex-col items-center justify-center px-6 text-center">
        <h1 class="text-primary text-4xl md:text-8xl leading-none mt-8">
            Log in
        </h1>
        <p class="text-primary text-2xl md:text-3xl leading-snug opacity-90 max-w-xl mt-2">
            {{ __('Not a human. Not an AI. Just a page that isn’t here.') }}
        </p>
        <div class="mt-10 w-full max-w-70 mx-auto">
            <x-button :href="route('home')" :label="__('Back to Home')" />
        </div>
    </div>
</section>
@endsection

@section('other')

@endsection