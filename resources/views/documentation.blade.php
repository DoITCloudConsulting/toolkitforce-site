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
    <style type="text/css">
      .keybinding__label {
        background: var(--white-color);
        border: 1px solid var(--light-gray-color);
        box-shadow: 0 1px 0 0 var(--medium-gray-color);
        border-radius: 3px;
        font-family: Courier;
        font-size: 0.7rem;
        color: var(--dark-gray-color);
        padding: 3px 3px 1px 3px;
        vertical-align: middle;
      }
    </style>
    <link rel="author" href="humans.txt">
  </head>
  <body>
    <div class="doc__bg"></div>
    <nav class="header">
      <h1 class="logo">Toolkit <span class="logo__thin">force</span></h1>
      <ul class="menu">
        <div class="menu__item"><span><b>/ Documentation</b></span></div>
        <li class="menu__item"><a href="https://github.com/DoITCloudConsulting/Salesforce-PHP" class="link link--dark"><i class="fa fa-github"></i> Github</a></li>
        <li class="menu__item"><a href="/" class="link link--dark"><i class="fa fa-home"></i> Home</a></li>
      </ul>
    </nav>
    <div class="wrapper">
      <aside class="doc__nav">
        <ul>
          <li class="js-btn selected">Get Started</li>
          <li class="js-btn">Installation</li>
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
        </section>
        <section class="js-section">
          <h3 class="section__title">Installation</h3>
          <p>To complete the instrallation you must have installed composer, composer let you connect with the most important PHP package manager that is Packagist.org</p>
          <br />
          <p>The first step is create a larevel project, run the following command:</p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $ composer create-project --prefer-dist laravel/laravel SalesforceConnectionProject
              </code>
            </pre>
          </div>
          <p>It will create an project with the all directories necessary to work fine, the command also retrieve the last verssion estable with the <span class="keybinding__label">--prefer-dist</span> param.</p>

          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $ cd SalesforceConnectionProject
              </code>
            </pre>
          </div>

          <p>When you are into the project folder you will need install the package, just need run the following command: </p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $ composer require doitcloudconsulting/salesforce
              </code>
            </pre>
          </div>

          <p>Wait a moment and you see on the composer.json a new element:</p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                 "require": {
                   ....
                      "doitcloudconsulting/salesforce": "^0.0.2",
                   ....
                  }
              </code>
            </pre>
          </div>

        </section>

        <section class="js-section">
          <h3 class="section__title">Configuration</h3>
          <p>When you have installed the package, only remains to configure It. Add the service providers, go to config/app.php and add the next line in the providers array:</p>

          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                DoITCloudConsulting\Salesforce\SalesforceServiceProvider::class,
              </code>
            </pre>
          </div>

          <!-- <table id="customers">
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
          </table> -->
          <p>To init session is neccesary add some parameters and a file wsdl, set the credentials on the config file app/SalesforceConfig.php . You will must run the next command to see the file on the config folder.</p>

          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $ php artisan vendor:publish --tag=config
              </code>
            </pre>
          </div>

          Result: 
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                Copied File 
            [/myProject/DoITCloudConsulting/Salesforce/src/config/SalesforceConfig.php] 
            To [/config/SalesforceConfig.php]
              </code>
            </pre>
          </div>


          <p>Set the credentials</p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                return [

                  /*
                    |--------------------------------------------------------------------------
                    | Data Access
                    |--------------------------------------------------------------------------
                    |
                    | Set credenctials to login on salesforce platform.
                    | 
                    */

                  'Username' => '********@doitcloud.consulting',
                  'Password' => '**********',
                  'Token' => '******************************',
              </code>
            </pre>
          </div>


          <p>Now export the demo file to connect through a wsdl. It will show a file wsdl into config/partner.wsdl.xml, just you need replace it. Run the next command:</p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $ php artisan vendor:publish --tag=wsdlconfig
              </code>
            </pre>
          </div>

          <p>Go to <span class="keybinding__label">Settings >[find box write] API > Download Partner / Enterprise</span> then you will download a file xml that must be replaced inside of config/partner.wsdl.xml</p>

          <p>Depending of connection type selected, in config/SalesforceConfig.php you must set what type connection you want use.</p>
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                /*
                |--------------------------------------------------------------------------
                | WSDL 
                |--------------------------------------------------------------------------
                |
                | To connect to salesforce definition objects is necessary set a connect 
                | mode, partner or enterprise is the options. Download the WSDL from 
                | Salesforce > Settings > API. Click on the option that you need and 
                | replace the files demo on the package.
                | 
                */


                'Mode' => 'partner',
              </code>
            </pre>
          </div>
          <hr />
        </section>
        
        <section class="js-section">
          <h3 class="section__title">Inserts</h3>
          <p>The toolkitforce create method accepts one or a array set of generic PHP objects and their type, where PHP object properties correspond to record fields. The create method returns an array containing the result for each record creation:</p>


          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $salesforce = new Salesforce();
                $salesforce->insert(array('Name' => 'Axalta CS'), 'Account');
              </code>
            </pre>
          </div>
          OR
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $salesforce = new Salesforce();
                $salesforce->insert(array(
                  &nbsp;&nbsp;array('Name' => 'Axalta CS'),
                  &nbsp;&nbsp;array('Name' => 'Refinish Tech'),
                  &nbsp;&nbsp;array('Name' => 'Axalta CS Mex')
                ), 'Account');
              </code>
            </pre>
          </div>
          <hr />
        </section>

        <section class="js-section">
          <h3 class="section__title">Updates</h3>
          <p>The toolkitforce update method accepts one or a array set of generic PHP objects and their type, where PHP object properties correspond to record fields. The create method returns an array containing the result for each record update:</p>

          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $salesforce = new Salesforce();
                $salesforce->update(array('Name' => 'DoIT Acc ', 'id' => '001f400000yNY0LAAW'), 'Account');
              </code>
            </pre>
          </div>
          OR
          <div class="code__block code__block--notabs">
            <pre class="code code--block">
              <code>
                $salesforce = new Salesforce();
                $salesforce->insert(array(
                  &nbsp;&nbsp;array('Name' => 'Axalta CS', 'id' => '001f400000yNY0123W'),
                  &nbsp;&nbsp;array('Name' => 'Refinish Tech', 'id' => '001f412300yNY0LAAW'),
                  &nbsp;&nbsp;array('Name' => 'Axalta CS Mex', 'id' => '001f400000yNY0LA8W')
                ), 'Account');
              </code>
            </pre>
          </div>
          <hr />
        </section>

        <section class="js-section">
          <h3 class="section__title">Upserts</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Deletes</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Undeletes</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Validations</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">SOQL</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">SOSL</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Describe Global</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Describe layout</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Describe SObject</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Convert Lead</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Get me all updated</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Get me all Deleted</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Get me all Deleted</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Server Requirements</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
        <section class="js-section">
          <h3 class="section__title">Issues</h3>
          <p>The toolkitforce updateeach record update:</p>
        </section>
      </article>
    </div>

    <footer class="footer">Scribbler is a free HTML template created exclusively for <a href="https://tympanus.net/codrops/?p=33686" target="_blank" class="link link--light">Codrops</a>.</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="{{ asset('scribbler/scribbler.js') }}"></script>
  </body>
</html>