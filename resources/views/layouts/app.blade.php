<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}" />
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.css">

  <script src="require.js"></script>
  <script>
    require.config({
      packages: [{
        name: 'froala-editor',
        main: 'js/froala_editor.min'
      }],
      paths: {
        // Change this to your server if you do not wish to use our CDN.
        'froala-editor': 'https://cdn.jsdelivr.net/npm/froala-editor@latest'
      }
    });
  </script>

  <style>
    body {
      text-align: center;
    }
    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
    .ss {
      background-color: red;
    }
  </style>
</head>
<body>
    @include('layouts._navbar')

    @include('layouts._header')

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    @include('layouts._footer')
    <script src="{{mix('/js/app.js')}}"></script>
</body>
</html>
