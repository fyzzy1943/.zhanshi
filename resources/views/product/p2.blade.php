@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
  <script src="http://api.map.baidu.com/api?v=2.0&ak=NwZxAeKmrzegk1Zltsex5kwvrlAjsWyo"></script>
  <script src="/js/echarts.js"></script>
  <script src="/js/china.js"></script>
@endsection

@section('content')
  <div id="p2">
    <img src="/img/ydyzt1.png">

    <section id="introduction">
      <h3>产品介绍</h3>
      <div class="text">
        <p>“移动一张图”土地管理平台，是服务于国土资源部门业务管理的移动平台，具有移动性、便利性，安全性，高效性的特点，真正实现由被动执法到主动作为的转变。</p>
        <p>平台把遥感影像、土地利用现状、高标准农田、规划用途、遥感监测、土地变更调查等多资源信息集合一体，与土地报批、供应、执法等行政监管系统叠加，通过手机移动终端，实现地图浏览、图层控制、数据查询、属性查看、现场拍照、辅助测量、统计分析和GPS定位等功能。</p>
        <p>案例：山东昌邑市移动一张图、云南普洱市移动一张图、江苏涟水县局移动一张图等</p>
      </div>
    </section>

  </div>

  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="/js/strobj.js"></script>

  <script>

  </script>
@endsection
