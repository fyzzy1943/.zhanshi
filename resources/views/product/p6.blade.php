@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">

  <script src="/js/echarts.js"></script>
  <script src="/js/china.js"></script>
@endsection

@section('content')
  <div id="p6">
    <button id="go_rotate">X</button>

    <div id="all">
      <div id="op2">
        <img src="/img/ydyzt1.png">

        <div id="demo">
          <img src="/img/yzt/1.png">
          <img src="/img/yzt/2.png">
          <img src="/img/yzt/3.png">
          <img src="/img/yzt/4.png">
          <img src="/img/yzt/5.png">
          <img src="/img/yzt/6.png">
        </div>

        <section id="introduction">
          {{--<h3>产品介绍</h3>--}}
          <div class="text">
            <p>“移动一张图”土地管理平台，是服务于国土资源部门业务管理的移动平台，具有移动性、便利性，安全性，高效性的特点，真正实现由被动执法到主动作为的转变。</p>
            <p>平台把遥感影像、土地利用现状、高标准农田、规划用途、遥感监测、土地变更调查等多资源信息集合一体，与土地报批、供应、执法等行政监管系统叠加，通过手机移动终端，实现地图浏览、图层控制、数据查询、属性查看、现场拍照、辅助测量、统计分析和GPS定位等功能。</p>
            <p>案例：山东昌邑市移动一张图、云南普洱市移动一张图、江苏涟水县局移动一张图等</p>
          </div>
        </section>
      </div>

      <div id="op3">
        <img src="/img/gtzx1.png">

        <section id="introduction">
          <h3>产品介绍</h3>
          <div class="text">
            <p>2016年6月25日，第26个全国土地日，手机客户端“国土在线”全面上线。 国土在线”由资讯、政务和问政三大版块构成，每周一到周五早七点刊发一期微信版《早安！国土新闻早播间来了》，填补行业新闻资讯手机客户端空白，是大数据，可视化，易互动的全媒体展示形态，服务国土资源行业的移动信息平台。</p>
            <p>资讯版块，设置了热点、锐度、视频、报刊、不动产、法制、地矿、测绘、海洋、科技等近20个频道。发布最优质的行业热点头条资讯，遵循及时有效、客观公正、独立思考的原则，为用户提供有价值、有深度的时政报道及政策解读，还有资深专家实时解读不动产统一登记政策，实时发布各地不动产新闻资讯、工作动态和政策法规。除行业视频资讯外，我们还强力打造《国土一周吐槽》，认真吐槽行业奇葩事，拍摄原创微喜剧，活跃用户，轻松工作。</p>
            <p>政务版块，以政务大厅、机构推荐和政务服务为主要栏目，展示部及直属单位、省、市、县、乡镇所五级国土资源管理部门的工作动态、政务公开、通知公告，为国土资源系统搭建信息公开和查询服务的直通车。</p>
            <p>问政版块，全国范围内，求助、咨询或投诉涉及地籍、征地、规划和耕保等各类问题，点开提交到平台，当地国土资源管理部门将作出官方回复，平台上的专家、读者及入驻律师事务所也会在线诊断。</p>
          </div>
        </section>

      </div>

      <div id="op4">
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

      <div id="op5">
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
    </div>
  </div>

  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="/js/strobj.js"></script>
  <script src="/js/jquery-bigSlider.js"></script>

  <script>
    $(function(){
      $('#demo').bigSlider({
        focusType: 'enlarge',
        animationDuration: 400
      });

      var angle = 1;
      var all = $('#all');

      var op2 = $('#op2');
      var op3 = $('#op3');
      var op4 = $('#op4');
      var op5 = $('#op5');

      $('#go_rotate').click(function() {
        all.css('transform', 'rotate('+(angle*180)+'deg');

        switch (angle%4)
        {
          case 1:
            op3.css('zIndex', '5');
            op5.css('zIndex', '1');
            op2.css('zIndex', '1');
            op4.css('zIndex', '1');

            break;
          case 2:
            op4.css('zIndex', '5');
            op2.css('zIndex', '1');
            op5.css('zIndex', '1');
            op3.css('zIndex', '1');
            break;
          case 3:
            op5.css('zIndex', '5');
            op3.css('zIndex', '1');
            op2.css('zIndex', '1');
            op4.css('zIndex', '1');
            break;
          case 0:
            op2.css('zIndex', '5');
            op5.css('zIndex', '1');
            op3.css('zIndex', '1');
            op4.css('zIndex', '1');
            break;
        }

        angle++;
      });
    });
  </script>
@endsection
