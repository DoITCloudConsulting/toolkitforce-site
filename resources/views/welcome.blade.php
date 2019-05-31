<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Toolkit Force</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/railscasts.min.css">
      <link rel="stylesheet" href="{{ asset('scribbler/scribbler-global.css') }}">
      <link rel="stylesheet" href="{{ asset('scribbler/scribbler-landing.css') }}">
      <link rel="author" href="humans.txt">
  </head>
  <body>
    <nav>
      <div class="logo"></div>
      <ul class="menu">
        <div class="menu__item toggle"><span></span></div>
        <li class="menu__item"><a href="/documentation" class="link link--dark"><i class="fa fa-book"></i> Documentation</a></li>
        <li class="menu__item"><a href="https://github.com/DoITCloudConsulting/Salesforce-PHP" class="link link--dark"><i class="fa fa-github"></i> Github</a></li>
      </ul>
    </nav>
    <div class="hero">
      <h1 class="hero__title">Toolkit Force</h1>
      <p class="hero__description"><i>Focus on your project, skip complications, improve the performance</i></p>
      <p class="hero__description">Powered by <b>DoIT Cloud Consulting</b> </p>
    </div>
    <div class="hero__terminal">
      <pre>
        <!-- Place your demo code here -->
        <code class="shell-session demo">root ~ $ </code>
      </pre>
    </div>
    <div class="wrapper">
      <div class="installation">
         <h3 class="section__title">Installation</h3>
         <div class="tab__container">
            <ul class="tab__menu">
               <li class="tab active" data-tab="mac">Laravel</li>
               <!-- <li class="tab" data-tab="linux">linux</li>
               <li class="tab" data-tab="win">win</li> -->
            </ul>
            <pre class="nohighlight code">
               <code class="tab__pane active mac">$  composer require doitcloudconsulting/salesforce</code>
               <!-- <code class="tab__pane linux">$  apt-get install scribbler</code>
               <code class="tab__pane win">$  gem install scribbler</code> -->
            </pre>
         </div>
      </div>

      @include('sections.features')
      @include('sections.keybinding')
    </div>

    @include('sections.changelog')

    <footer class="footer">Scribbler is a free HTML template created exclusively for <a href="https://tympanus.net/codrops/" target="_blank" class="link link--light">Codrops</a>.</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="{{ asset('scribbler/scribbler.js') }}"></script>
  </body>
</html>