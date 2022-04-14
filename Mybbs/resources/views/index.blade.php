<x-layout>
    <x-slot name=title>
        My BBS
    </x-slot>

    <h1>My BBS</h1>
    <ul>
        @forelse ($posts as $index => $post)
        <li>
            <a href="{{ route('posts.show',$index) }}">
            {{$post}}
        </li>
        @empty
        <li>NO posts yet</li>
        @endforelse
    </ul>
</x-layout>

