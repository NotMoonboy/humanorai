<header class="absolute inset-[0%_0%_auto] pt-4 z-1000">
    <div class="relative px-10">
        <div class="mx-auto">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}" loading="eager" class="w-auto h-15">
                </a>
                <div class="flex items-center gap-1" role="group" aria-label="Language">
                    <a
                        href="{{ route('locale.switch', 'en') }}"
                        hreflang="en"
                        class="text-primary text-3xl font-semibold underline underline-offset-2 cursor-pointer truncate transition-colors duration-50 {{ app()->getLocale() === 'en' ? 'decoration-primary' : 'decoration-transparent hover:decoration-primary' }}"
                        @if (app()->getLocale() === 'en') aria-current="true" @endif
                    >EN</a>
                    <div class="text-primary text-3xl pointer-events-none" aria-hidden="true">/</div>
                    <a
                        href="{{ route('locale.switch', 'sv') }}"
                        hreflang="sv"
                        class="text-primary text-3xl font-semibold underline underline-offset-2 cursor-pointer truncate transition-colors duration-50 {{ app()->getLocale() === 'sv' ? 'decoration-primary' : 'decoration-transparent hover:decoration-primary' }}"
                        @if (app()->getLocale() === 'sv') aria-current="true" @endif
                    >SV</a>
                </div>
            </div>
        </div>
    </div>
</header>
