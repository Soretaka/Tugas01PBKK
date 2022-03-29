<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>{{ $title }}</h1>
                    {{-- <h5>editor: {{ $name }} | {{ $email }}</h5> --}}
                      <hr/>
                      @foreach($articles as $article)
                          <article class="mb-5">
                              <h3>
                                  <a href="/article/{{ $article->slug }}">
                                  {{ $article->title }}
                                  </a>                    
                              </h3>
                              {{-- <h6>By: {{ !empty($article->user)? $article->user->name:'' }}</h6> --}}
                              <h6> by: {{ $article->user->name }}</h6>
                              <p>{{ $article->excerpt }}</p>
                          </article>
                      @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>