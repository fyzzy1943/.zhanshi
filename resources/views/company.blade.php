@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">

  <script src="/js/echarts.js"></script>
  <script src="/js/china.js"></script>
@endsection

@section('content')
  <div id="company">
    <div id="bmap"></div>

    <div id="introduce">
      <h3>北京中地数讯文化传媒有限公司</h3>
      <p>北京中地数讯文化传媒有限公司成立于2014年7月29日，是国土资源部直属事业单位中国国土资源报社下属科技公司，相继在湖南、广东和四川等省份成立办事处，2016年4月8日在北京股权交易中心挂牌。</p>

    </div>

    <a href="/products" class="go-next">产品介绍</a>

  </div>

  <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>

  <script>
    var bmap = echarts.init(document.getElementById('bmap'));

    var geoMap = {
      '北京中地数讯文化传媒有限公司': [116.391515, 39.968878],
      '湖南省兰德信息产业有限公司': [112.986625, 28.181237],
      '广东省地创信息科技有限公司': [113.371799, 22.983726],
      '四川省鼎玉铉信息技术有限公司': [103.975205, 30.623279]
    };

    var GJDate = [
      [{name:'北京中地数讯文化传媒有限公司'}, {name:'湖南省兰德信息产业有限公司',value:95}],
      [{name:'北京中地数讯文化传媒有限公司'}, {name:'广东省地创信息科技有限公司',value:75}],
      [{name:'北京中地数讯文化传媒有限公司'}, {name:'四川省鼎玉铉信息技术有限公司',value:55}]
    ];

    var AllDate = [
      [{name:'北京中地数讯文化传媒有限公司'}, {name:'北京中地数讯文化传媒有限公司',value:95}],
      [{name:'北京中地数讯文化传媒有限公司'}, {name:'湖南省兰德信息产业有限公司',value:55}],
      [{name:'北京中地数讯文化传媒有限公司'}, {name:'广东省地创信息科技有限公司',value:55}],
      [{name:'北京中地数讯文化传媒有限公司'}, {name:'四川省鼎玉铉信息技术有限公司',value:55}]
    ];

    var convertData = function (data) {
      var res = [];
      for (var i = 0; i < data.length; i++) {
        var dataItem = data[i];
        var fromCoord = geoMap[dataItem[0].name];
        var toCoord = geoMap[dataItem[1].name];
        if (fromCoord && toCoord) {
          res.push({
            fromName: dataItem[0].name,
            toName: dataItem[1].name,
            coords: [fromCoord, toCoord]
          });
        }
      }
      return res;
    };

    var option = {
      backgroundColor: '#404a59',
      title: {
        text: ''
      },
      geo: {
        map: 'china',
        label: {
          emphasis: {
            show: false
          }
        },
        itemStyle: {
          normal: {
            areaColor: '#323c48',
            borderColor: '#404a59'
          },
          emphasis: {
            areaColor: '#2a333d'
          }
        }
      },
      series: [
        {
          name: 'shux',
          type: 'lines',
          zlevel: 1,
          effect: {
            show: true,
            period: 6,
            trailLength: 0.7,
            color: '#fff',
            symbolSize: 3
          },
          lineStyle: {
            normal: {
              color: '#a6c84c',
              width: 0,
              curveness: 0.1
            }
          },
          data: convertData(GJDate)
        },
        {
          name: 'shux',
          type: 'lines',
          zlevel: 2,
          effect: {
            show: true,
            period: 6,
            trailLength: 0,
            symbol: 'circle',
            symbolSize: 7
          },
          lineStyle: {
            normal: {
              color: '#a6c84c',
              width: 1,
              opacity: 0.7,
              curveness: 0.1
            }
          },
          data: convertData(GJDate)
        },
        {
          name: 'shux',
          type: 'effectScatter',
          coordinateSystem: 'geo',
          zlevel: 2,
          rippleEffect: {
            brushType: 'stroke'
          },
          label: {
            normal: {
              show: true,
              position: 'right',
              formatter: '{b}'
            }
          },
          symbolSize: function (val) {
            return val[2] / 8;
          },
          itemStyle: {
            normal: {
              color: '#a6c84c'
            }
          },
          data: AllDate.map(function (dataItem) {
            return {
              name: dataItem[1].name,
              value: geoMap[dataItem[1].name].concat([dataItem[1].value])
            };
          })
        }]
    };

    bmap.setOption(option);
  </script>
@endsection
