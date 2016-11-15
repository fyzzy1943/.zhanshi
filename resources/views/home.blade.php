@extends('layout')

@section('head')
  <link href="{{ elixir('css/home.css') }}" rel="stylesheet">
  <script src="http://api.map.baidu.com/api?v=2.0&ak=NwZxAeKmrzegk1Zltsex5kwvrlAjsWyo"></script>
  <script src="/js/echarts.js"></script>
@endsection

@section('content')
  <div id="baidu_map"></div>
  <div id="container">
    <section id="company">
      <h3>公司介绍</h3>
      {{--<img class="logo" src="/img/logo.png">--}}
      <div class="text">
        <p>北京中地数讯文化传媒有限公司成立于2014年7月29日，是国土资源部直属事业单位中国国土资源报社下属科技公司，相继在湖南、广东和四川等省份成立办事处，2016年4月8日在北京股权交易中心挂牌。</p>
        <p>
          中地数讯公司在国土资源部提出的“国土资源云”建设总体目标下，立足国土资源系统及地勘行业，主要负责开发、建设与运营国土资源全媒体云服务平台“国土大屏”、手机客户端“国土在线”、矿业权流转交易平台“矿易网”、土地使用权流转交易平台“地易网”、土地管理平台“移动一张图”、地质灾害预警预报平台等产品业务，利用云计算、大数据及功能应用等新的信息技术和移动互联理念，从提供新闻宣传到助力国土资源部门政务公开和业务支撑，研发、推广智能硬件和软件业务，提高国土资源管理科技水平，提升服务质量和社会效益。打造新闻宣传、公众服务和行业应用三大平台，致力于国土资源信息化建设与服务。</p>
      </div>
    </section>

    <section id="p1">
      <h3>湖南省兰德信息产业有限公司</h3>
      <ul>
        <li>...</li>
        <li>...</li>
        <li>...</li>
      </ul>
    </section>

    <section id="p2">
      <h3>广东省地创信息科技有限公司</h3>
      <ul>
        <li>...</li>
        <li>...</li>
        <li>...</li>
      </ul>
    </section>

    <section id="p3">
      <h3>四川省鼎玉铉信息技术有限公司</h3>
      <ul>
        <li>...</li>
        <li>...</li>
        <li>...</li>
      </ul>
    </section>

  </div>

  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
  <script src="/js/strobj.js"></script>

  <script>
    var map = new BMap.Map("baidu_map");    // 创建Map实例
    map.centerAndZoom(new BMap.Point(110.0, 37.4), 5);  // 初始化地图,设置中心点坐标和地图级别
    map.setMapStyle({style: 'grayscale'});
    map.disableDragging();     //禁止拖拽
    map.disableScrollWheelZoom();   //禁止缩放
    map.disableDoubleClickZoom();   //禁用双击放大
    map.disableKeyboard();
    map.disablePinchToZoom();

    var data_info = [
      [116.391515, 39.968878, '北京中地数讯文化传媒有限公司'],
      [112.986625, 28.181237, "湖南省兰德信息产业有限公司"],
      [113.371799, 22.983726, "广东地创信息科技有限公司"],
      [103.975205, 30.623279, "四川省鼎玉铉信息技术有限公司"]
    ];

    for (var i = 0; i < data_info.length; i++) {
      var marker = new BMap.Marker(new BMap.Point(data_info[i][0], data_info[i][1]));  // 创建标注
      var label = new BMap.Label(data_info[i][2], {offset: new BMap.Size(20, -10)});
      marker.setLabel(label);
      map.addOverlay(marker);               // 将标注添加到地图中
    }

    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('achievement1'));

    // 指定图表的配置项和数据
    var option = {
      title: {
        text: ''
      },
      tooltip: {},
      legend: {
        data: ['终端数量']
      },
      xAxis: {
        data: ["2014", "2015", "2016"]
      },
      yAxis: {},
      series: [{
        name: '终端数量',
        type: 'bar',
        data: [70, 170, 350]
      }]
    };

    myChart.setOption(option);
  </script>
@endsection
