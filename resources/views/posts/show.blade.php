<x-layout>
    {{-- <h1>글 보기 페이지입니다.</h1> --}}
    <h1>{{ $post->title }}</h1>
    <main class="max-w-6xl mx-auto mt-5 lg:mt-20">
        <p class="text-gray-700">{{ $post->content }}</p>
    </main>
</x-layout>