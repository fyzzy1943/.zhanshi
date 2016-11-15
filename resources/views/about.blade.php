@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">

  <link href="{{ asset('css/imageflow.css') }}" rel="stylesheet">
  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="/js/imageflow.js"></script>
@endsection

@section('content')
  <div id="about">
    <div id="LoopDiv">
      <input id="S_Num" type="hidden" value="8"/>
      <div id="starsIF" class="imageflow">
        <img src="/img/person/1p.jpg" longdesc="" width="280" height="300" alt="杨颖"/>
        <img src="/img/person/2p.jpg" longdesc="" width="280" height="300" alt="杨颖"/>
        <img src="/img/person/3p.jpg" longdesc="" width="280" height="300" alt="杨颖"/>
        <img src="/img/person/4p.jpg" longdesc="" width="280" height="300" alt="杨颖"/>
        <img src="/img/person/5p.jpg" longdesc="" width="280" height="300" alt="杨颖"/>
        <img src="/img/person/6p.jpg" longdesc="" width="280" height="300" alt="杨颖"/>
        <img src="/img/person/7p.jpg" longdesc="" width="280" height="300" alt="杨颖"/>
        <img src="/img/person/8p.jpg" longdesc="" width="280" height="300" alt="杨颖"/>
      </div>
    </div>
  </div>

  <script src="/js/strobj.js"></script>

  <script>

  </script>
@endsection
