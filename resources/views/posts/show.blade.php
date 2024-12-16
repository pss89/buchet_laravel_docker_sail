<x-layout>
    <section class="my-5 flex justify-end">
        <a href="{{ route('posts.edit', $post->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
            focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 
            dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">수정하기</a>
        {{-- <a href="{{ route('posts.destroy', $post->id) }}" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 
            focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 
            dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">삭제하기</a> --}}
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 
            focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 
            dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">삭제하기</button>
        </form>
    </section>
    {{-- <h1>글 보기 페이지입니다.</h1> --}}
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 bg-gray-200 rounded-lg font-semibold py-5">
        <h1 class="text-3xl text-indigo-700 pt-5">{{ $post->title }}</h1>
        <main class="max-w-6xl mx-auto mt-5 lg:mt-6">
            <p class="text-gray-700 mb-3">{{ $post->content }}</p>
        </main>
    </div>
</x-layout>