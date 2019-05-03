<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documentation / Toolkit force</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('scribbler/scribbler-global.css') }}">
    <link rel="stylesheet" href="{{ asset('scribbler/scribbler-doc.css') }}">

    <link rel="author" href="humans.txt">
  </head>
  <body>
    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo">Toolkit <span class="logo__thin">force</span></h1>
      <ul class="menu">
        <div class="menu__item"><span><b>/ Documentation</b></span></div>
        <li class="menu__item"><a href="" class="link link--dark"><i class="fa fa-github"></i> Github</a></li>
        <li class="menu__item"><a href="index.html" class="link link--dark"><i class="fa fa-home"></i> Home</a></li>
      </ul>
    </nav>
    <div class="wrapper">
      <aside class="doc__nav">
        <ul>
          <li class="js-btn selected">Get Started</li>
          <li class="js-btn">Configuration</li>

          <b><i> / The basics </i></b>

          <li class="js-btn">Inserts</li>
          <li class="js-btn">Updates</li>
          <li class="js-btn">Upserts</li>
          <li class="js-btn">Deletes</li>
          <li class="js-btn">Undeletes</li>
          <li class="js-btn">Validations</li>
          <li class="js-btn">SOQL</li>
          <li class="js-btn">SOSL</li>

          <b><i>/ The Metadata Methods</i></b>
          
          <li class="js-btn">Describe Global</li>
          <li class="js-btn">Describe layout</li>
          <li class="js-btn">Describe SObject</li>

          <b><i>/ Other methods</i></b>

          <li class="js-btn">Convert Lead</li>
          <li class="js-btn">Get me all updated</li>
          <li class="js-btn">Get me all Deleted</li>

          <b><i>/ More</i></b>
          <li class="js-btn">Server Requirements</li>
          <li class="js-btn">Issues</li>
        </ul>
      </aside>
      <article class="doc__content">

        <section class="js-section">
          <h3 class="section__title">Get Started</h3>
          <p>Thank you so much for the interest on the package, is very interesting to us keep a community open source to Salesforce integrations. The work on the package is sponsored by <b>DoIT Cloud Consulting</b> and to company is importatn get your feedback, please contact us throught the official page to duds or questions.</p>
          <h3 class="section__title">Installation</h3>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $ scribbler  ——config
                  {
                    “encryption”: true, 
                    “highlighting“: true,
                    “prettyTable”: false,
                    “font”: [“Helvetica”, “sans-serif”],
                    “folder”: “~/Desktop“
                  }
              </code>
            </pre>
          </div>
        </section>

        <section class="js-section">
          <h3 class="section__title">Configuration</h3>
          <p>Learn how to configure settings for Scribbler, such as your syntax highlighting preference and the default saving folder location.</p>
          <table id="customers">
            <tr>
              <th>Options</th>
              <th>Value</th>
              <th>Default</th>
            </tr>
            <tr>
              <td>encryption</td>
              <td>encrypt all notes before saving. If turned on, it requires password to open the file.</td>
              <td>false</td>
            </tr>
            <tr>
              <td>highlighting</td>
              <td>Show syntax highlight on markdown text.</td>
              <td>true</td>
            </tr>
            <tr>
              <td>prettyTable</td>
              <td>Render table with Scribbler’s pretty table style.</td>
              <td>true</td>
            </tr>
          </table>
          <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
          <hr />
        </section>
        
        <section class="js-section">
          <h3 class="section__title">Inserts</h3>
          <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex per. At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed. Porro verear eu vix, ne usu tation vituperata.</p>
          <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
          <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
          <hr />
        </section>
        <section class="js-section">
          <h3 class="section__title">Issues</h3>
          <p>Lorem ipsum dolor sit amet, scripta tibique indoctum sit ei, mel inani aeterno ad. Facer oratio ex per. At eam movet verear, in sea brute patrioque disputando, usu nonumes torquatos an. Ex his quaerendum intellegebat, ut vel homero accusam. Eum at debet tibique, in vocibus temporibus adversarium sed. Porro verear eu vix, ne usu tation vituperata.</p>
          <p>Malis percipitur an pro. Pro aperiam persequeris at, at sonet sensibus mei, id mea postulant definiebas concludaturque. Id qui malis abhorreant, mazim melius quo et. At eam altera dolorum, case dicant lobortis ius te, ad vel affert oportere reprehendunt. Quo no verterem deseruisse, mea brute postea te, ne per tacimates suavitate vituperatoribus.</p>
        </section>
      </article>
    </div>

    <footer class="footer">Scribbler is a free HTML template created exclusively for <a href="https://tympanus.net/codrops/?p=33686" target="_blank" class="link link--light">Codrops</a>.</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="{{ asset('scribbler/scribbler.js') }}"></script>
  </body>
</html>