@extends ('layout')
@section ('content')
@include ('partials._hero')

    @if(count($posts) == 0) 
        {{ "No jobs found"; }}
    @else
    <div class="flex flex-wrap -mx-4 px-6">
        @foreach ($posts as $post)
            <x-post-content :post="$post"/>
        @endforeach
    </div>
    @endif
@endsection