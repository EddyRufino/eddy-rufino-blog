@extends('layouts.app')

@section('content')


<div class="container mx-auto my-5 pt-8 md:pt-20">

  <div class="my-4 font-medium lg:px-10">
    @if (isset($title))
      <h3>{{$title}}</h3>
    @endif
  </div>

  <div class="xl:flex xl:flex-row xl:flex-wrap">
    
    @foreach ($posts as $post)

    <div class="lg:flex pb-2 lg:px-10 card md:mx-auto xl:mx-0">
      <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/img/card-left.jpg')" title="Woman holding a mug">
      </div>
      <div class="w-full border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
        <div class="mb-8">
          <p class="text-sm text-gray-600 flex items-center">
            {{-- <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
            </svg> --}}
            <svg class="fill-current text-gray-500 w-3 h-3 mr-2" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="12px" height="12px">
              <path d="M 6.0097656 2 C 4.9143111 2 4.0097656 2.9025988 4.0097656 3.9980469 L 4 22 L 12 19 L 20 22 L 20 20.556641 L 20 4 C 20 2.9069372 19.093063 2 18 2 L 6.0097656 2 z M 6.0097656 4 L 18 4 L 18 19.113281 L 12 16.863281 L 6.0019531 19.113281 L 6.0097656 4 z"/>
            </svg>
            @include('posts.tags')
          </p>
          <a href="{{ route('posts.show', $post) }}" class="text-gray-800 font-bold text-xl mb-2">{{ $post->title }}</a>
          <p class="text-gray-700 text-base">{{ $post->excerpt }}</p>
        </div>
        <div class="flex items-center">
          <img class="w-10 h-10 rounded-full mr-4" src="/img/yo.svg" alt="Avatar of Jonathan Reinink">
          <div class="text-sm">
            <p class="text-gray-900 leading-none">{{ $post->owner->name }}</p>
            <p class="text-gray-600">{{ optional($post->published_at)->format('M d') }}</p>
          </div>
        </div>
      </div>
    </div>

    @endforeach
    
  </div>

</div>

  {{ $posts->appends(request()->all())->links() }}

@endsection

