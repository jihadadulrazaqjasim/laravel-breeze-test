@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{ __('Whoops! You entered below incorrectly:') }}
        </div>

        <ul>
            @foreach ($errors->all() as $error)
                <li class="mt-3 list-disc list-inside text-sm text-red-600">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
