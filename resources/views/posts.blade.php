<!-- Laravel Blade style -->
@extends ('layout')
@section ('content')

    @if(count($posts) == 0) 
        {{ "No jobs found"; }}
    @else
    <div class="flex flex-wrap -mx-4 px-6">
        @foreach ($posts as $post)
        <div class="w-full md:w-1/2 lg:w-1/2 px-2 mb-4">
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/no-image.png'); }}" alt=""/>
                    <div>
                        <h3 class="text-2xl"><a href='/posts/{{ $post['id'] }}'>{{ $post['title'] }}</a></h3>
                        <div class="text-xl font-bold mb-2">{{ $post['contents'] }}</div>

                        <ul class="flex">
                            @php 
                                $tags = array_map('trim', explode(',', $post->tags));
                            @endphp

                            @foreach ($tags as $tag)
                            <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                <a href="#">{{ $tag }}</a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-user"></i> {{ $post['author'] }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
@endsection


<!-- Regular PHP style --> 
<?php 
/*
if (count($posts) == 0) { echo "No posts found"; }
else {
    foreach ($posts as $post) {
        echo "<h2>" . $post['id'] . " " . $post['title']. "</h2> <div style='max-width:25%;'>" . $post['description'] . "</div>";
    }
}
*/
?>