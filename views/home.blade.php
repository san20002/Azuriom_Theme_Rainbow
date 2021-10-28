@extends('layouts.app')

@section('title', trans('messages.home'))

@section('content')
    @if(!empty(theme_config('sliders')[0]))
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="home--top">
                        @if(setting('background'))
                            <div class="background--top-header">
                                <img src="{{ image_url(setting('background')) }}" alt="">
                            </div>
                        @endif
                        @if(!empty(theme_config('sliders')[0]))
                            <div class="home--glide glide mt-lg-0 mt-5 d-sm-block d-none" data-component="hero">
                                <div data-glide-el="track" class="glide__track">
                                    <ul class="glide__slides">
                                        @foreach(theme_config('sliders') ?? [] as $slider )
                                            <li class="glide__slide"
                                                style="background: url('{{ isset($slider['background']) ? !empty($slider['url']) ? image_url($slider['url']) :'' :''}}') center / cover no-repeat">
                                                <div
                                                    class="row h-100 align-items-center {{isset($slider['reverse']) && $slider['reverse']? 'flex-row-reverse':''}} justify-content-center offset-1">
                                                    <div class="col-lg-5 mt-5 mt-lg-0 px-5">
                                                        @if(!empty($slider['title']) || !empty($slider['description']))
                                                            <h2 class="title">{{ !empty($slider['title']) ? $slider['title'] :''}}</h2>
                                                            <h3 class="text">{{ !empty($slider['description']) ? $slider['description'] :''}}</h3>
                                                        @endif
                                                    </div>
                                                    @if(isset($slider['url']) && !isset($slider['background']))
                                                        <div
                                                            class="col-lg-5 text-center px-lg-0 px-5 d-lg-block d-none">
                                                            <img
                                                                src="{{ !empty($slider['url']) ? image_url($slider['url']) :''}}"
                                                                alt="Card image">
                                                        </div>
                                                    @endif
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                    @if(count(theme_config('sliders')) >= 2)
                                        <div class="glide__arrows" data-glide-el="controls">
                                            <button class="glide__arrow glide__arrow--left"
                                                    data-glide-dir="<"><i
                                                    class="fas fa-chevron-left"></i></button>
                                            <button class="glide__arrow glide__arrow--right"
                                                    data-glide-dir=">"><i
                                                    class="fas fa-chevron-right"></i></button>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                        @include('elements.ip')
                        @if(!theme_config('home.particle.hidden'))
                            <div id="particles-js"></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @else
        @include('elements.background-top')
    @endif
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-8 home--post">
                @include('elements.banner',['banner' => 'home', 'value' => 'article'])
                <div class="row">
                    @php($i = 100)
                    @foreach($posts as $post)
                        <div
                            class="col-md-6"
                            @include('elements.string-aos', ['pageAos' => 'home', 'itemAos'=>'article', 'noDuration'])

                            @if(theme_config('home.items.article.aos.duration'))
                            data-aos-duration='{{theme_config('home.items.article.aos.duration') * $loop->iteration}}'
                            @endif
                        >
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
            @guest
                <div class="col-lg-4 home--info">
                    @include('auth/home-login')
                </div>
            @endguest
            <div class="col-lg-4 home--info">
                @include('elements.banner', ['banner' => 'home', 'value' => 'information'])
                @if(theme_config('home.items.discord.id') && !theme_config('home.items.discord.hidden'))
                    <div @include('elements.string-aos', ['pageAos' => 'home', 'itemAos'=>'discord'])>
                        <iframe
                            src="https://discordapp.com/widget?id={{theme_config('home.items.discord.id')}}&theme=dark"
                            width="350"
                            height="500" allowtransparency="true" frameborder="0"
                            sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
