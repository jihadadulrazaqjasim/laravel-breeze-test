@props(['value'])

<div {{ $attributes->merge(['class' => 'p-2 rounded']) }}>
    <div>{{ $title }}</div>

    <div>{{ $body }}</div>

    <div>{{$delete}}</div>
</div>