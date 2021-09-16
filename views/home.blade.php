@extends('layouts.app')

@section('title', trans('messages.home'))

@section('content')
    @if(!empty(config('theme.sliders')))
        @if(!empty(config('theme.sliders')[0]['url']))
            <div class="container-fluid px-0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="home--top">
                            @if(setting('background'))
                                <div class="background--top-header">
                                    <img src="{{ image_url(setting('background')) }}" alt="">
                                    <div id="particles-js"></div>
                                </div>
                            @endif
                            <div id="particles-js"></div>
                            <div class="home--glide glide" data-component="hero">
                                <div data-glide-el="track" class="glide__track">
                                    <ul class="glide__slides">
                                        @foreach(config('theme.sliders') ?? [] as $slider )
                                            <li class="glide__slide"
                                                style="background: {{ !empty($slider['url']) ? image_url($slider['url']) :''}}') center / cover no-repeat">
                                                <div
                                                    class="row h-100 align-items-center justify-content-md-start justify-content-center offset-lg-3">
                                                    <div class="col-lg-4 mt-5 mt-lg-0 px-lg-0 px-5">
                                                        @if(!empty($slider['title']) || !empty($slider['description']))
                                                            <h2 class="title">{{ !empty($slider['title']) ? $slider['title'] :''}}</h2>
                                                            <h3 class="text">{{ !empty($slider['description']) ? $slider['description'] :''}}</h3>
                                                        @endif
                                                    </div>
                                                    @if(!isset($slider['background']))
                                                        <div class="col-lg-6 text-center px-lg-0 px-5">
                                                            <img
                                                                src="{{ !empty($slider['url']) ? image_url($slider['url']) :''}}"
                                                                alt="Card image">
                                                        </div>
                                                    @endif
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                    <div class="glide__arrows" data-glide-el="controls">
                                        <button class="glide__arrow glide__arrow--left"
                                                data-glide-dir="<"><i
                                                class="fas fa-chevron-left"></i></button>
                                        <button class="glide__arrow glide__arrow--right"
                                                data-glide-dir=">"><i
                                                class="fas fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(config('theme.footer.download'))
                    <div class="btn-wrapper-home">
                        <a class="btn btn-download" href="/{{config('theme.footer.download')}}"
                           title="{{ trans('theme::lang.config.download.name')}}">
                            {{ trans('theme::lang.config.download.name')}}
                        </a>
                    </div>
                @endif
            </div>
        @endif
    @else
        @include('elements.background-top')
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-8 home--post">
                @php($banner = 'news')
                @include('elements.banner')
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-6">
                            <div class="post-preview card mb-3 shadow-sm">
                                @if($post->hasImage())
                                    <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="card-img-top">
                                @endif
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                                    </h3>
                                    <small>{{ trans('messages.posts.posted', ['date' => format_date($post->published_at), 'user' => $post->author->name]) }}</small>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                                    <a class="btn btn-primary"
                                       href="{{ route('posts.show', $post) }}">{{ trans('messages.posts.read') }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 home--info">
                @guest
                    @include('auth/home-login')
                @endguest
                @if(config('theme.discord.id'))

                        @php($banner = 'info')
                        @include('elements.banner')

                        <iframe src="https://discordapp.com/widget?id={{config('theme.discord.id')}}&theme=dark"
                            width="350"
                            height="500" allowtransparency="true" frameborder="0"
                            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
            </div>
            @endif
        </div>
    </div>
@endsection
