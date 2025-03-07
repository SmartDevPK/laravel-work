<x-header title="Latest Article $ Emmanuel Michael" />


<div>
    {{-- @isset($posts) --}}
    {{-- @foreach ($posts as $post) --}}
    <x-blog.blogitem post="$post" />
    {{-- @endforeach --}}
    {{-- @else --}}
    {{-- <p>No posts available.</p> --}}
    {{-- @endisset --}}
</div>