@extends('web.client.charity.layout.app')

@section('content')

<style>
    .welcomeText {
        -webkit-text-stroke: 1px rgba(255, 255, 255, 0.86);
        text-shadow: 1px 1px 3px black;
    }

    .line-1 {
        position: relative;
        /* top: 50%;   */
        width: 24em;
        margin: 0 auto;
        border-right: 2px solid rgba(255, 255, 255, .75);
        /* font-size: 180%; */
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        /* transform: translateY(-50%);     */
    }

    /* Animation */
    .anim-typewriter {
        /* background-color: green; */
        animation: typewriter 4s steps(44) 1s infinite normal both,
            blinkTextCursor 500ms steps(44) infinite normal;
    }

    @keyframes typewriter {
        from {
            width: 0;
        }

        to {
            width: 100%;
        }
    }

    @keyframes blinkTextCursor {
        from {
            border-right-color: rgba(255, 255, 255, .75);
        }

        to {
            border-right-color: transparent;
        }
    }
</style>

<div class="text-center">

    <h3 class="title-translate-font text-primary welcomeText line-1 anim-typewriter py-2" style="">សូមស្វាគមន៍​
        មកកាន់ មូលនិធិសប្បុរសធម៍ប៊ែលធី</h3>
    {{-- <p class="line-1 anim-typewriter">Animation typewriter style using css steps()</p> --}}
    <div>
        <a href="https://www.facebook.com/belteicharity">
            <img src="{{ asset('asset/img/charity/facebook.jpg') }}" alt="">
        </a>
        <img src="{{ asset('asset/img/construction/youtube.jpg') }}" alt="">
    </div>

    <div class="py-2">
        <iframe class="w-100" style="aspect-ratio: 16 / 9;" src="https://www.youtube.com/embed/Lp2sQ83uXrU?si=6jTvQPc_Q8wd3-fM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <livewire:share.poster-component :poster_id="7" />
    
</div>


    @include('web.client.charity.layout.share.news')
@endsection
