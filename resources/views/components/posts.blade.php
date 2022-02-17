@props(['value'])

<div {{ $attributes->merge(['class' => 'p-2 rounded overflow-scroll']) }}>
    <div>{{ $title }}</div>

    <div>{{ $body }}</div>

    <div>{{ $image }}</div>

    <div>{{ $delete }}</div>
</div>
