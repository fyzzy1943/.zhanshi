<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>中地数讯</title>

  <link href="{{ asset('css/home_1.css') }}" rel="stylesheet">
</head>
<body>
<script id="vertexShader" type="x-shader/x-vertex">

  // Uniforms
  uniform float time;
  varying vec3 vNormal;

  void main(void) {
     vec3 v = position;
     vNormal = normal;
     v.z += cos(2.0 * position.x + (time)) * 4085.5;

     gl_Position = projectionMatrix *
                  modelViewMatrix *
                  vec4(v, 1.0);
  }


</script>


<script id="fragmentShader" type="x-shader/x-fragment">
varying vec3 vNormal;
uniform float time;

void main(void) {
    vec3 light = vec3(0.1, .9, .1);

    light = normalize(light);

    float dProd = max(0.2, dot(vNormal, light));

    gl_FragColor = vec4(dProd, // R
                      dProd, // G
                      dProd, // B
                      1.0);  // A
}

</script>
<script src='/js/home/three.min.js'></script>
<script src="/js/home/index.js"></script>

<span id="title">国土资源全媒体<br>云服务平台</span>

<a href="/company"><img id="logo" src="/img/logo1.png"></a>
{{--<canvas id="text" width="1470" height="310"></canvas>--}}

{{--<script src="/js/home/text.js"></script>--}}

</body>
</html>
