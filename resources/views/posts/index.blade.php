<x-layout>
    <h1>Posts 인덱스 페이지입니다.</h1>
    <p>name : {{ $name }}</p>
    <p>age : {{ $age }}</p>
    <ul>
        @foreach ($postList as $post)
        <li>{{ $post }}</li>
        @endforeach
    </ul>
</x-layout>