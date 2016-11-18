<nav class="main">
  <ul class="left">
    <li><a href="{{ url('home') }}">公司总览</a></li>
    <li><a href="{{ url('products') }}">产品总览</a></li>
    <li><a href="{{ url('vision') }}">服务愿景</a></li>
    <li><a href="{{ url('about') }}">关于我们</a></li>
  </ul>
  <div class="back"></div>
  <h1>{!! $title or '中地数讯' !!}</h1>
  <ul class="right">
    <li><a href="{{ url('product/dp') }}">大屏</a></li>
    <li><a href="{{ url('product/yz') }}">一张图</a></li>
    <li><a href="{{ url('product/zx') }}">国土在线</a></li>
    <li><a href="{{ url('product/kyw') }}">矿易网</a></li>
    <li><a href="{{ url('product/dyw') }}">地易网</a></li>
  </ul>
</nav>
