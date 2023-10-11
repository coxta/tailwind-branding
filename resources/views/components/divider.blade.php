<div class="my-{{ (int) $spacing - 1 }} md:my-{{ $spacing }} relative">
    <div class="flex items-center">
        <div class="flex-grow">
            <div class="w-full border-t border-gray-200"></div>
        </div>
        @if ($label)
            <div class="flex-none">
                <span class="text-{{ $text }} {{ $color }} px-2">
                    {{ $label }}
                </span>
            </div>
        @endif
        <div class="flex-grow">
            <div class="w-full border-t border-gray-200"></div>
        </div>
    </div>
</div>