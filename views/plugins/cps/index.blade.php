@extends('layouts.app')

@section('title', 'cps')

@section('content')
    <div class="cps" id="faq">
        <div class="container">

            @include('elements.banner',['banner' => 'cps', 'value' => 'cps'])

            <div @include('elements.string-aos', ['pageAos' => 'cps', 'itemAos'=>'cps'])>

                <p>{{ trans('cps::messages.description') }}</p>
                <div class="clicBox hide" id="clicBox" onclick="nbclics++; updateClick()">
                    <p>{{ trans('cps::messages.click') }}</p>
                </div>
                <div class="clicBox" id="clicStart" onclick="start()">
                    <p>{{ trans('cps::messages.clickToStart') }}</p>
                </div>

                <p id="clicNumber">{{ trans('cps::messages.numberOfClick') }} 0</p>
                <p id="timer">{{ trans('cps::messages.numberOfTime') }} 10</p>
                <p id="cps"></p>

            </div>
        </div>
    </div>

    <style media="screen">
        .cps h2 {
            margin-top: 50px;
        }

        .cps .clicBox {
            width: 100%;
            background-color: rgba(0, 0, 0, .1);
            border-radius: 3px;
            padding: 50px;
            text-align: center;
            user-select: none;
            -moz-user-select: none;
            -khtml-user-select: none;
            -webkit-user-select: none;
            margin-bottom: 10px;
        }

        .cps .clicBox:hover {
            cursor: pointer;
        }

        .cps .clicBox p {
            margin: 0;
            padding: 0;
        }

        .hide {
            display: none;
        }
    </style>

    <script>
        var nbclics = 0;
        var timer = 10;

        function updateClick() {
            document.getElementById("clicNumber").innerHTML = "{{ trans('cps::messages.numberOfClick') }}" + nbclics;
        }

        function count() {
            alert("CPS: " + nbclics / 10);
            document.getElementById('clicBox').innerHTML = "<p>{{ trans('cps::messages.stop') }}</p>";
            document.getElementById('cps').innerHTML = "<p>{{ trans('cps::messages.numberOfCPS') }} " + (nbclics / 10) + "</p>";
            clearInterval(interval);
        }

        function update() {
            if (timer > 0) {
                timer = timer - 1;
                document.getElementById("timer").innerHTML = "{{ trans('cps::messages.numberOfTime') }}" + timer;
            }
        }

        function start() {
            document.getElementById("clicStart").classList.toggle("hide");
            document.getElementById("clicBox").classList.toggle("hide");
            setTimeout('count()', 10000);
            var interval = setInterval('update()', 1000);
        }
    </script>
@endsection
