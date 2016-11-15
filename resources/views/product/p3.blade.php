@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
  <script src="http://api.map.baidu.com/api?v=2.0&ak=NwZxAeKmrzegk1Zltsex5kwvrlAjsWyo"></script>
  <script src="/js/echarts.js"></script>
  <script src="/js/china.js"></script>
@endsection

@section('content')
  <div id="p3">
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

  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="/js/strobj.js"></script>

  <script>

  </script>
@endsection
