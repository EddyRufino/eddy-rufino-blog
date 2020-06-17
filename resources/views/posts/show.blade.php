@extends('layouts.app')

@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)

@section('content')
  <article class="container mx-auto my-5 pt-8 md:pt-20 card-blog-show">

    <div class="content-post">

    <div class="text-center">
      <img class="w-10 pb-1 rounded-full mx-auto" src="/img/avatar.svg" alt="nombre">
      <span class="font-serif text-gray-700"> {{ $post->owner->name }}</span>
    </div>

    <h1 class="pt-3 text-4xl text-center font-semibold leading-snug break-all font-serif text-gray-800">{{ $post->title }}</h1>

      {{-- @include('posts.header') --}}
      <div class="flex items-center justify-center py-3">
        <span class="pr-2 flex text-gray-700 text-sm items-center">
          <svg class="fill-current text-gray-500 w-5 h-5" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" width="12px" height="12px">
            <defs><style>.cls-1{fill:#606161;}</style></defs><title/><g data-name="Layer 11" id="Layer_11"><path class="cls-1" d="M16,5A11,11,0,1,0,27,16,11,11,0,0,0,16,5Zm0,20a9,9,0,1,1,9-9A9,9,0,0,1,16,25Z"/><polygon class="cls-1" points="15 15 9.33 15 9.33 17 17 17 17 8.83 15 8.83 15 15"/></g>
          </svg>
          3 Min.
        </span>

        <span class="pl-2 flex text-gray-700 text-sm items-center">
          <svg class="pr-1 fill-current text-gray-500 w-5 h-5" id="Layer_1" enable-background="new 0 0 512 512" width="12px" height="12px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <g><path d="m446 40h-46v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-224v-24c0-8.836-7.163-16-16-16s-16 7.164-16 16v24h-46c-36.393 0-66 29.607-66 66v340c0 36.393 29.607 66 66 66h380c36.393 0 66-29.607 66-66v-340c0-36.393-29.607-66-66-66zm34 406c0 18.778-15.222 34-34 34h-380c-18.778 0-34-15.222-34-34v-265c0-2.761 2.239-5 5-5h438c2.761 0 5 2.239 5 5z"/></g>
          </svg>
          {{ optional($post->published_at)->format('M d') }}
        </span>
      </div>

      <div class="text-xl leading-loose font-serif pt-20 text-gray-900">
        {{-- <figure class="block-left"><img src="/img/img-post-2.png" alt=""></figure> --}}
        <p class="">{!! $post->body !!}</p>
      </div>

        <footer class="container-flex space-between">

          {{-- @include('partials.social-links', ['description' => $post->title]) --}}

          {{-- @include('posts.tags') --}}

      </footer>
      {{-- <div class="comments">
        <div class="divider"></div>
        <div id="disqus_thread"></div>

        @include('partials.disqus-script')

      </div><!-- .comments --> --}}
    </div>
  </article>
@endsection

{{-- @push('styles')
    <link rel="stylesheet" href="/css/twitter-bootstrap.css">
@endpush --}}

{{-- @push('scripts')
  <script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
  <script src="/js/twitter-bootstrap.js"></script>
@endpush --}}
