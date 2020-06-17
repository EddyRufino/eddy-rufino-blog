@extends('layouts.app')

@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)

@section('content')
  <article class="p-3 md:p-0 container mx-auto my-5 pt-8 md:pt-20 card-blog-show">

    <div class="content-post">

    <div class="text-center pt-8 md:pt-0">
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

      <div class="pt-4 text-center">
        <div class="inline-block pr-1" style="width:2rem">
          <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}&quote={{ $post->excerpt }}...">
            <svg class="fill-current text-gray-800" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"></path></svg>
          </a>
        </div>

        <div class="inline-block pl-1" style="width:2rem">
        <a target="_blank" href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $post->excerpt }}... &via={{ config('app.name') }}&hashtags={{ $post->category->name }}">
          <svg class="fill-current text-gray-800" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <g><g>
            <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                  c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                  c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                  c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                  c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                  c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                  C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                  C480.224,136.96,497.728,118.496,512,97.248z"></path>
            </g></g>
          </svg>
        </a>
        </div>
      </div>

      <div class="text-xl leading-loose font-serif pt-8 text-gray-900">
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
