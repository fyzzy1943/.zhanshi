@extends('layouts.layout_1')

@section('head')
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('css/simple_menu.css') }}" rel="stylesheet">
<link href="{{ elixir('css/products_1.css') }}" rel="stylesheet">

<script src="//cdn.bootcss.com/jquery-tools/1.2.7/jquery.tools.min.js"></script>
<script>
  $(function() {
    $('.tabs > ul').tabs('div.panes > section', {effect: 'fade', fadeOutSpeed: 400});
  });
</script>
@endsection

@section('content')

  <div class="header">
    <div id="site_title"><a href="/">
        <img src="img/logo.png" alt="My Site Title" /></a>
    </div>

    <ol id="menu">
      <li><a href="/">公司介绍</a></li>
      <li class="active_menu_item">
        <a href="/products">产品总览</a>
        <ol>
          <li><a href="#">国土大屏</a></li>
          <li><a href="#">国土在线</a></li>
          <li><a href="#">移动一张图</a></li>
          <li><a href="#">地易网</a></li>
          <li><a href="#">矿易网</a></li>
        </ol>
      </li>
      <li><a href="/about">关于我们</a></li>
    </ol>
  </div>

  <div id="wrapper">
    <div class="panes">
      <section>
        <img src="/img/demo.png" alt="demo" />
        <h5>国土资源全媒体云服务平台（国土大屏）</h5>
        <p>贯彻中央“八项规定”，精减传播成本，告别张贴布告和悬挂横幅，采用42吋落地触摸显示屏，实时以视频、文字、图片等全媒体形式进行分类公告展示。</p>
        <p>落实国务院信息化建设文件精神，定制国土资源部及直属机关单位、各省厅、全国各级市县局的上情下达，实现国土资源信息共享。</p>
        <p>提供国土资源系统及地矿地勘行业各类业务管理解决方案，定制工作动态、通知公告、办事流程、宣传普及政策法规、查询业务进度等应用，多元化满足全方位需求。</p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a></p>
      </section>

      <section>
        <img src="/img/4.jpg" alt="demo" />
        <h5>手机客户端“国土在线”</h5>
        <p>2016年6月25日，第26个全国土地日，手机客户端“国土在线”全面上线。 国土在线”由资讯、政务和问政三大版块构成，每周一到周五早七点刊发一期微信版《早安！国土新闻早播间来了》，填补行业新闻资讯手机客户端空白，是大数据，可视化，易互动的全媒体展示形态，服务国土资源行业的移动信息平台。</p>
        <p>资讯版块，设置了热点、锐度、视频、报刊、不动产、法制、地矿、测绘、海洋、科技等近20个频道。发布最优质的行业热点头条资讯，遵循及时有效、客观公正、独立思考的原则，为用户提供有价值、有深度的时政报道及政策解读。</p>
        <p></p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </section>

      <section>
        <img src="/img/ddd1.png" alt="demo" />
        <h5>移动一张图</h5>
        <p>“移动一张图”土地管理平台，是服务于国土资源部门业务管理的移动平台，具有移动性、便利性，安全性，高效性的特点，真正实现由被动执法到主动作为的转变。</p>
        <p>平台把遥感影像、土地利用现状、高标准农田、规划用途、遥感监测、土地变更调查等多资源信息集合一体，与土地报批、供应、执法等行政监管系统叠加，通过手机移动终端，实现地图浏览、图层控制、数据查询、属性查看、现场拍照、辅助测量、统计分析和GPS定位等功能。</p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </section>

      <section>
        <img src="/img/4.jpg" alt="demo" />
        <h5>土地使用权流转交易平台（地易网）</h5>
        <p>2016年11月15日，土地使用权流转交易平台“地易网”上线。地易网定位于全国专业的土地交易及综合服务平台，提供土地流转信息发布、产权交易、法律咨询、资产评估、抵押融资等服务。</p>
        <p>线上以互联网+土地交易订购服务，线下以传统门店运营模式，在全国范围内，建立市、县、乡镇、村四级土地综合服务中心，一站式解决买家寻找土地、卖家流转土地、土地经纪人经营土地生意的市场痛点。</p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </section>

      <section>
        <img src="/img/4.jpg" alt="demo" />
        <h5>矿业权流转交易平台（矿易网）</h5>
        <p>2016年9月22日，第十八届中国国际矿业大会开幕之际，矿业权流转交易平台“矿易网”在天津亮相并正式上线。“矿易网”共有矿权交易、矿业设备、矿业人才、矿业行情和矿金融服务五个频道。</p>
        <p>矿权交易：平台提供真实详尽的矿权交易信息，用户可即时发布矿权供需信息，平台提供一条龙专业交易委托服务，专家指导交易服务。</p>
        <p>矿业设备：聚集各大品牌矿用设备供应商，企业网上店铺即时开启即时交易，平台提供专业认证检测，保证产品质量，保障交易安全。</p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a></p>
      </section>
    </div>

    <br class="clearfix">

    <div class="tabs">
      <ul>
        <li><a href="#"><img src="/img/demo.png" class="img-thumbnail"><strong>国土大屏</strong></a></li>
        <li><a href="#"><img src="/img/demo.png" class="img-thumbnail"><strong>国土在线</strong></a></li>
        <li><a href="#"><img src="/img/demo.png" class="img-thumbnail"><strong>移动一张图</strong></a></li>
        <li><a href="#"><img src="/img/demo.png" class="img-thumbnail"><strong>地易网</strong></a></li>
        <li><a href="#"><img src="/img/demo.png" class="img-thumbnail"><strong>矿易网</strong></a></li>
      </ul>
    </div>
  </div>
@endsection
