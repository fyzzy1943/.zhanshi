@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
  <script src="http://api.map.baidu.com/api?v=2.0&ak=NwZxAeKmrzegk1Zltsex5kwvrlAjsWyo"></script>
  <script src="/js/echarts.js"></script>
@endsection

@section('content')
  <div id="vision">

    <section id="p1">
      <h3>致力于国土资源信息化建设与服务</h3>
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
