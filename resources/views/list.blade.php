{{-- <h1>list.blade.php</h1>

<p>화면입니다.</p> --}}

{{-- <p><?=$heading?></p> --}}
{{-- <p>{{ $heading }}</p> --}}

{{-- <ul>
    @foreach($items as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>

<p>{{ $getItem }}</p> --}}

@extends('layout')

@section('content')
<section class="post-list">
    @foreach ($lists as $row)
        <article class="post">
            <x-lists-card :row="$row" />
        </article>
    @endforeach
</section>

@if(count($lists) > 0)
    <p>자료가 {{ count($lists) }} 건이 있습니다.</p>
@endif
{{-- <h1>{{ $heading }}</h1> --}}

{{-- @if(count($lists) == 0)
    <p>게시글이 없습니다.</p>
@endif --}}
{{-- @if(count($lists) > 0)
    <p>자료가 {{ count($lists) }} 건이 있습니다.</p>
@endif --}}

{{-- @foreach ($lists as $row)
<h2><a href="/list/{{ $row['id'] }}">{{ $row['subject'] }}</a></h2>
<p>{{ $row['context'] }}</p>
@endforeach --}}

@endsection