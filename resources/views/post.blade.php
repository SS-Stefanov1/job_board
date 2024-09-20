@extends ('layout')
@section ('content')

<div class="mx-4">
    <x-post-wrapper class='mx-64'>
        <div class="flex flex-col items-center justify-center text-center">
            <img class="w-48 mr-6 mb-6" src="{{ asset('images/no-image.png'); }}" alt=""/>

            <h3 class="text-2xl mb-2">{{ $post['title'] }}</h3>
            <div class="text-xl font-bold mb-4">By {{ $post['author'] }}</div>

            @php
                $tags = array_map('trim', explode(',', $post->tags));
            @endphp

            <ul class="flex">
                @foreach($tags as $tag)
                <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                    <a href="#">{{ $tag }}</a>
                </li>
                @endforeach
            </ul>

            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> Daytona, FL
            </div>

            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <div class="text-lg space-y-6">
                    <p>{{ $post['contents'] }}</p>
<!-- 
                    <a href="mailto:test@test.com" class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80">
                        <i class="fa-solid fa-envelope"></i>Contact Employer
                    </a>

                    <a href="https://test.com" target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80">
                        <i class="fa-solid fa-globe"></i> Visit Website
                    </a>
                -->
                </div>
            </div>
        </div>
    </x-post-wrapper>
</div>
@endsection