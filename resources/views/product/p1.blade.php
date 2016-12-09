@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">
  <link href="/css/pageSwitch.min.css" rel="stylesheet">
  <script src="http://api.map.baidu.com/api?v=2.0&ak=NwZxAeKmrzegk1Zltsex5kwvrlAjsWyo"></script>
  <script src="/js/echarts.js"></script>
  <script src="/js/china.js"></script>

  <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
  <div id="p1">

    <div id="chart1"></div>

    <section id="introduction">
      <h3>产品介绍</h3>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                项目介绍
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <p>贯彻中央“八项规定”，精减传播成本，告别张贴布告和悬挂横幅，采用42吋落地触摸显示屏，实时以视频、文字、图片等全媒体形式进行分类公告展示。</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                项目介绍
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <p>落实国务院信息化建设文件精神，定制国土资源部及直属机关单位、各省厅、全国各级市县局的上情下达，实现国土资源信息共享。</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                项目介绍
              </a>
            </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
              <p>提供国土资源系统及地矿地勘行业各类业务管理解决方案，定制工作动态、通知公告、办事流程、宣传普及政策法规、查询业务进度等应用，多元化满足全方位需求。</p>
              <p>阳光国土，政务公开，转变信息公开方式，满足公众需求，实现国土资源信息化“大屏管理、大屏查询、大屏监管、大屏公开、大屏服务”的四级全服务目标。</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="achievement">
      <div id="achievement1"></div>
      <div id="achievement2"></div>
    </section>

    <div id="demo_mask"></div>

    <div id="demo">
      <div class="c1">
        <video src="/video/1.mp4" autoplay loop></video>
      </div>
      <div class="c2">
        <img src="/img/logo1.png">
        <img src="/img/tianqi.png">
        <marquee>今天是个好天气。今天是个好天气。今天是个好天气。</marquee>
      </div>
      <div class="c3">
        <div class="c4">
          <div class="sections">
            <div class="section" id="section0"></div>
            <div class="section" id="section1"></div>
            <div class="section" id="section2"></div>
            <div class="section" id="section3"></div>
          </div>
        </div>
        <div class="c5">
          <img src="/img/p1/xia/01.jpg">
        </div>
        <div class="c6">
          <img src="/img/p1/xia/02.png">
        </div>
      </div>
      <div class="c7">
        <img src="/img/p1/btn/u.png">
        <div id="nav">
          <img src="/img/p1/btn/1.png">
          <img src="/img/p1/btn/2.png">
          <img src="/img/p1/btn/3.png">
          <img src="/img/p1/btn/4.png">
          <img src="/img/p1/btn/5.png">
        </div>
        <img src="/img/p1/btn/d.png">
      </div>
    </div>
  </div>

  @include('product.p1.modal')

  <script src="/js/pageSwitch.min.js"></script>
  <script src="/js/strobj.js"></script>

  <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
    $(function(){
      $('.c1').click(function(){
        $('#s1').modal('show');
      });
      $('.c2').click(function(){
        $('#s2').modal('show');
      });
      $('.c4').click(function(){
        $('#s3').modal('show');
      });
      $('.c5,.c6').click(function(){
        $('#s4').modal('show');
      });
      $('.c7').click(function(){
        $('#s5').modal('show');
      });
    });

    $(".c4").PageSwitch({
      direction:'horizontal',
      easing:'ease-in',
      duration:1000,
      autoPlay:true,
      loop:'true'
    });

    function randomData() {
      return Math.round(Math.random()*50);
    }
    var chart1 = echarts.init(document.getElementById('chart1'));
    option = {
      title: '',
      tooltip: {
      },
      legend: {
//      orient: 'vertical',
//      left: 'left',
//      data:['iphone3','iphone4','iphone5']
      },
      visualMap: {
        min: 0,
        max: 100,
        left: '289px',
        top: '570px',
        text: ['',''],           // 文本，默认为数值文本
        calculable: true
      },
      toolbox: {
        show: false,
        orient: 'vertical',
        left: 'right',
        top: 'center',
        feature: {
          dataView: {readOnly: false},
          restore: {},
          saveAsImage: {}
        }
      },
      series: [
        {
          name: '国土大屏',
          type: 'map',
          mapType: 'china',
          roam: false,
          label: {
            normal: {
              show: true
            },
            emphasis: {
              show: true
            }
          },
          data:[
            {name: '北京',value: 1 },
            {name: '天津',value: 1 },
            {name: '上海',value: 1 },
            {name: '重庆',value: 1 },
            {name: '河北',value: 1 },
            {name: '河南',value: 1 },
            {name: '云南',value: 1 },
            {name: '辽宁',value: 1 },
            {name: '黑龙江',value: 1 },
            {name: '湖南',value: 1 },
            {name: '安徽',value: 1 },
            {name: '山东',value: 1 },
            {name: '新疆',value: 1 },
            {name: '江苏',value: 100 },
            {name: '浙江',value: 1 },
            {name: '江西',value: 1 },
            {name: '湖北',value: 90 },
            {name: '广西',value: 1 },
            {name: '甘肃',value: 1 },
            {name: '山西',value: 1 },
            {name: '内蒙古',value: 1 },
            {name: '陕西',value: 1 },
            {name: '吉林',value: 1 },
            {name: '福建',value: 1 },
            {name: '贵州',value: 1 },
            {name: '广东',value: 1 },
            {name: '青海',value: 1 },
            {name: '西藏',value: 1 },
            {name: '四川',value: 1 },
            {name: '宁夏',value: 1 },
            {name: '海南',value: 1 },
            {name: '台湾',value: 1 },
            {name: '香港',value: 1 },
            {name: '澳门',value: 1 }
          ]
        }
      ]
    };

    chart1.setOption(option);

    // 基于准备好的dom，初始化echarts实例
    var achievement1 = echarts.init(document.getElementById('achievement1'));

    // 指定图表的配置项和数据
    option = {
      title: {
        text: '终端分布情况',
        left: 'center',
        top: 0
      },

      tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
      },

      visualMap: {
        show: false,
        min: 80,
        max: 600,
        inRange: {
          colorLightness: [0, 1]
        }
      },
      series : [
        {
          name:'终端分布情况',
          type:'pie',
          radius : '55%',
          center: ['50%', '50%'],
          data:[
            {value:335, name:'华北区'},
            {value:310, name:'华中区'},
            {value:274, name:'东北区'},
            {value:235, name:'华南区'},
            {value:400, name:'西南区'}
          ].sort(function (a, b) { return a.value - b.value}),
          roseType: 'angle',
          label: {
            normal: {
              textStyle: {
                color: 'rgba(0, 0, 0, 0.9)'
              }
            }
          },
          labelLine: {
            normal: {
              lineStyle: {
                color: 'rgba(0, 0, 0, 0.7)'
              },
              smooth: 0.2,
              length: 10,
              length2: 20
            }
          },
          itemStyle: {
            normal: {
              color: '#c23531'
            }
          }
        }
      ]
    };

    // 使用刚指定的配置项和数据显示图表。
    achievement1.setOption(option);


    var achievement2 = echarts.init(document.getElementById('achievement2'));

    option = {
      title: {
        text: '终端在线率',
        left: 'center',
        top: 0
      },
      tooltip : {
        formatter: "{a} <br/>{b} : {c}%"
      },
      toolbox: {
        show: false,
        feature: {
          restore: {},
          saveAsImage: {}
        }
      },
      series: [
        {
          name: '终端在线率',
          type: 'gauge',
          detail: {formatter:'{value}%'},
          data: [{value: 100, name: ''}]
        }
      ]
    };

    achievement2.setOption(option);
  </script>
@endsection
