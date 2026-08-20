@extends('layouts.default')

@section('title', __('Page Not Found') . ' – ' . config('app.name'))

@section('content')
<section class="relative isolate min-h-dvh overflow-hidden">
    <div class="halftone" aria-hidden="true"></div>
    <div class="relative z-10 flex min-h-dvh flex-col items-center justify-center px-6 text-center">
        <div class="error-stage">
            <div class="error-panel" aria-hidden="true">
                <div class="error-eyes">
                    <span class="error-eye error-eye--left"></span>
                    <span class="error-eye error-eye--right"></span>
                </div>
                <p class="error-code">404</p>
            </div>
            <h1 class="text-primary text-4xl md:text-8xl leading-none mt-8">
                {{ __('Page Not Found') }}
            </h1>
            <p class="text-primary text-2xl md:text-3xl leading-snug opacity-90 max-w-xl mt-2">
                {{ __('Not a human. Not an AI. Just a page that isn’t here.') }}
            </p>
            <div class="mt-10 w-full max-w-70 mx-auto">
                <x-button :href="route('home')" :label="__('Back to Home')" />
            </div>
        </div>
    </div>
</section>
@endsection

@section('other')
<style>
.halftone {
    pointer-events: none;
    position: absolute;
    inset: 0;
    z-index: 1;
    background-image: radial-gradient(rgba(26, 16, 48, 0.16) 1.1px, transparent 1.1px);
    background-size: 10px 10px;
    mask-image: radial-gradient(ellipse 55% 50% at 50% 48%, #000 20%, transparent 75%);
    -webkit-mask-image: radial-gradient(ellipse 55% 50% at 50% 48%, #000 20%, transparent 75%);
}

.error-stage {
    animation: error-in 0.75s ease-out both;
}

.error-panel {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: min(100%, 18rem);
    padding: 1.25rem 2rem 1rem;
    background: var(--color-panel);
    border: var(--border-chunky);
    box-shadow: var(--shadow-chunky);
    animation: error-bob 3.2s ease-in-out infinite;
}

.error-eyes {
    position: absolute;
    top: -0.85rem;
    left: 50%;
    display: flex;
    gap: 0.45rem;
    transform: translateX(-50%);
    padding: 0.2rem 0.55rem;
    background: var(--color-primary);
    border: var(--border-chunky);
    border-bottom: none;
}

.error-eye {
    width: 0.85rem;
    height: 0.85rem;
    border-radius: 9999px;
    background: #fff;
    position: relative;
    overflow: hidden;
}

.error-eye::after {
    content: "";
    position: absolute;
    width: 0.38rem;
    height: 0.38rem;
    background: #ff8c38;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.error-eye--left::after {
    width: 0.55rem;
    height: 0.18rem;
    border-radius: 0;
}

.error-eye--right {
    animation: error-blink 4.5s ease-in-out infinite;
}

.error-code {
    margin: 0;
    font-size: clamp(5rem, 18vw, 8.5rem);
    line-height: 0.9;
    letter-spacing: -0.04em;
    color: var(--color-primary);
}

@keyframes error-in {
    from {
        opacity: 0;
        transform: translateY(1.25rem) scale(0.97);
    }
    to {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

@keyframes error-bob {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-6px); }
}

@keyframes error-blink {
    0%, 42%, 48%, 100% { transform: scaleY(1); }
    45% { transform: scaleY(0.12); }
}
</style>
@endsection