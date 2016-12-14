@extends('layout')

@section('head')
  <link href="{{ elixir('css/main.css') }}" rel="stylesheet">

  <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="//cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
@endsection

@section('content')
<div id="pros2_bk">
  <div id="pros2" class="animated slideInUp">
    <button class="btn" id="all-show">全部显示</button>
    <button class="btn btn-danger" id="go_next">国土大屏</button>
    <div id="com">
      中地数讯
    </div>
    <div id="ps1" class="intro">
      国土大屏
    </div>
    <div id="ps2" class="intro">
      移动一张图
    </div>
    <div id="ps3" class="intro">
      国土在线
    </div>
    <div id="ps4" class="intro">
      矿易网
    </div>
    <div id="ps5" class="intro">
      地易网
    </div>
  </div>

  <nav class="pros2-nav">
    <div id="nav1">
      <h3>国土大屏</h3>
      <p>贯彻中央“八项规定”，精减传播成本，告别张贴布告和悬挂横幅，采用42吋落地触摸显示屏，实时以视频、文字、图片等全媒体形式进行分类公告展示。</p>
    </div>
    <div id="nav2">
      <h3>移动一张图</h3>
    </div>
    <div id="nav3">
      <h3>国土在线</h3>
    </div>
    <div id="nav4">
      <h3>矿易网</h3>
    </div>
    <div id="nav5">
      <h3>地易网</h3>
    </div>
  </nav>
</div>

  <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
    $(function() {
      var com = $('#com');
      var ps1 = $('#ps1');
      var ps2 = $('#ps2');
      var ps3 = $('#ps3');
      var ps4 = $('#ps4');
      var ps5 = $('#ps5');
      var next = $('#go_next');

      var nav1 = $('#nav1');
      var nav2 = $('#nav2');
      var nav3 = $('#nav3');
      var nav4 = $('#nav4');
      var nav5 = $('#nav5');

      var bottom_nav_height = 25;
      var nav1_height = 200;
      var nav2_height = 160;
      var nav3_height = 250;
      var nav4_height = 90;
      var nav5_height = 90;

      com.click(function() {
        ps1.fadeIn('slow');
        nav1.animate({marginTop:'0'}).mouseenter(function() {
          nav1.animate({marginTop:bottom_nav_height-nav1_height}, 'fast');
        }).mouseleave(function() {
          nav1.animate({marginTop:'0'}, 'fast');
        });
      });
      ps1.click(function() {
        ps2.fadeIn('slow');
        nav2.animate({marginTop:'0'}).mouseenter(function() {
          nav2.animate({marginTop:bottom_nav_height-nav2_height}, 'fast');
        }).mouseleave(function() {
          nav2.animate({marginTop:'0'}, 'fast');
        });
      });
      ps2.click(function() {
        ps3.fadeIn('slow');
        nav3.animate({marginTop:'0'}).mouseenter(function() {
          nav3.animate({marginTop:bottom_nav_height-nav3_height}, 'fast');
        }).mouseleave(function() {
          nav3.animate({marginTop:'0'}, 'fast');
        });
      });
      ps3.click(function() {
        ps4.fadeIn('slow');
        nav4.animate({marginTop:'0'}).mouseenter(function() {
          nav4.animate({marginTop:bottom_nav_height-nav4_height}, 'fast');
        }).mouseleave(function() {
          nav4.animate({marginTop:'0'}, 'fast');
        });
      });
      ps4.click(function() {
        ps5.fadeIn('slow', function() {
          next.fadeIn('slow');
        });
        nav5.animate({marginTop:'0'}).mouseenter(function() {
          nav5.animate({marginTop:bottom_nav_height-nav5_height}, 'fast');
        }).mouseleave(function() {
          nav5.animate({marginTop:'0'}, 'fast');
        });
      });

      $('#all-show').click(function() {
        ps1.fadeIn('slow', function() {
          ps2.fadeIn('slow', function() {
            ps3.fadeIn('slow', function() {
              ps4.fadeIn('slow', function() {
                ps5.fadeIn('slow', function() {
                  next.fadeIn('slow');
                });
              });
            });
          });
        });

        nav1.animate({marginTop:'0'}, function() {
          nav2.animate({marginTop:'0'}, function() {
            nav3.animate({marginTop:'0'}, function() {
              nav4.animate({marginTop:'0'}, function() {
                nav5.animate({marginTop:'0'}).mouseenter(function() {
                  nav5.animate({marginTop:bottom_nav_height-nav5_height}, 'fast');
                }).mouseleave(function() {
                  nav5.animate({marginTop:'0'}, 'fast');
                });
              }).mouseenter(function() {
                nav4.animate({marginTop:bottom_nav_height-nav4_height}, 'fast');
              }).mouseleave(function() {
                nav4.animate({marginTop:'0'}, 'fast');
              });
            }).mouseenter(function() {
              nav3.animate({marginTop:bottom_nav_height-nav3_height}, 'fast');
            }).mouseleave(function() {
              nav3.animate({marginTop:'0'}, 'fast');
            });
          }).mouseenter(function() {
            nav2.animate({marginTop:bottom_nav_height-nav2_height}, 'fast');
          }).mouseleave(function() {
            nav2.animate({marginTop:'0'}, 'fast');
          });
        }).mouseenter(function() {
          nav1.animate({marginTop:bottom_nav_height-nav1_height}, 'fast');
        }).mouseleave(function() {
          nav1.animate({marginTop:'0'}, 'fast');
        });

      });

      next.click(function() {
        $('body').animate({marginLeft:'-100%'}, 700, 'linear', function() {
          location.href='/product/dp';
        });
//        $('body').addClass('animated slideOutLeft', function() {
//          location.href='/product/dp';
//        });
      });

//      nav1.mouseenter(function() {
//        nav1.animate({marginTop:'-70px'}, 'fast');
//      }).mouseleave(function() {
//        nav1.animate({marginTop:'0'}, 'fast');
//      });
    });
  </script>
@endsection
