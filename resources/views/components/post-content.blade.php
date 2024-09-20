@props(['post'])

<div class="w-full md:w-1/2 lg:w-1/2 px-2 mb-4">
    <x-post-wrapper>
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
    </x-post-wrapper>
</div>