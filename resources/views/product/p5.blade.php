@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
  <script src="http://api.map.baidu.com/api?v=2.0&ak=NwZxAeKmrzegk1Zltsex5kwvrlAjsWyo"></script>
  <script src="/js/echarts.js"></script>
  <script src="/js/china.js"></script>
@endsection

@section('content')
  <div id="p5">
    <img src="/img/dyw.png">

    <section id="introduction">
      <h3>产品介绍</h3>
      <div class="text">
        <p>2016年11月15日，土地使用权流转交易平台“地易网”上线。地易网定位于全国专业的土地交易及综合服务平台，提供土地流转信息发布、产权交易、法律咨询、资产评估、抵押融资等服务。线上以互联网+土地交易订购服务，线下以传统门店运营模式，在全国范围内，建立市、县、乡镇、村四级土地综合服务中心，一站式解决买家寻找土地、卖家流转土地、土地经纪人经营土地生意的市场痛点。</p>
        <p>地易网主要由交易平台、金融服务体系、大数据中心、综合服务实体、技术产品五大体系构成。</p>
        <p>交易平台：线上交易平台与线下服务中心结合，规范土地流转交易流程。金融服务体系：依托土地经营权抵押贷款为核心，通过农业保险助力，提供全面深入的农村金融服务。</p>
        <p>大数据中心：包括地易网各大运营平台土地数据、用户数据及中国各省市土地流转面积、价格、发布量等走势图和指数等，搭建行业唯一的土地流转数据中心，专家把脉土地流转市场行情。</p>
        <p>综合服务实体：以地易网为中心，土地流转服务中心为根据地，“县+乡+村”三级农村产权交易服务中心为着力点，土流经纪人为发力点，健全整个土地流转服务体系，打造覆盖全面范围的专业土地流转团队，实现全国各地安全快速放心的土地流转服务。</p>
        <p>技术产品：地易科研技术人才构建现代农业科技创新中心，重点突破土地流转、农村金融、智能生产等领域关键技术终端应用。</p>
      </div>
    </section>

  </div>

  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="/js/strobj.js"></script>

  <script>

  </script>
@endsection
