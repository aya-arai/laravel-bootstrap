<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    .main-area{
        margin-top: 5rem;
    }
    </style>

    <title>トップページ</title>

  </head>
  <body class="d-flex flex-column h-100">
  <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">HelloWorld</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">メニュー1 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  </header>

  <main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="main-area">
            <h1>Sticky footer</h1>
            <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS.</p>
            <p>Use <a href="/docs/4.3/examples/sticky-footer-navbar/">the sticky footer with a fixed navbar</a> if need be, too.</p>
        </div>
    </div>
</main>

    {{-- JavaScript --}}
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>