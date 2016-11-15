@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
  <script src="http://api.map.baidu.com/api?v=2.0&ak=NwZxAeKmrzegk1Zltsex5kwvrlAjsWyo"></script>
  <script src="/js/echarts.js"></script>
  <script src="/js/china.js"></script>
@endsection

@section('content')
  <div id="p4">
    <img src="/img/kyw1.png">

    <section id="introduction">
      <h3>产品介绍</h3>
      <div class="text">
        <p>2016年9月22日，第十八届中国国际矿业大会开幕之际，矿业权流转交易平台“矿易网”在天津亮相并正式上线。“矿易网”共有矿权交易、矿业设备、矿业人才、矿业行情和矿金融服务五个频道。</p>
        <p>矿权交易：平台提供真实详尽的矿权交易信息，用户可即时发布矿权供需信息，平台提供一条龙专业交易委托服务，专家指导交易服务。</p>
        <p>矿业设备：聚集各大品牌矿用设备供应商，企业网上店铺即时开启即时交易，平台提供专业认证检测，保证产品质量，保障交易安全。</p>
        <p>矿业人才：借助平台资源优势，汇聚各方矿业人才，提供最新的企业招聘，人才招聘，企业推广信息。</p>
        <p>矿业行情：全行业热点新闻、最新科研成果、专家评论、专题报道、矿业价格参数等资讯一网打尽。</p>
        <p>线上以矿易智库，发布和收集矿权信息、行业动态和价格指数矿业资讯，线下以行业大会，评估和推荐优质矿权，咨询和委托矿权交易。两大抓手，四大服务核心，运用互联网+矿业权流转交易的思路，以全新的网页、内容信息、功能布局和运营模式，打破传统矿权供求信息平台的格局，成为一站式矿业权流转交易服务提供商。</p>
      </div>
    </section>

  </div>

  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="/js/strobj.js"></script>

  <script>

  </script>
@endsection
