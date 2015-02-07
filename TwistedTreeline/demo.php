

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MagicSuggest is a multiple selection combo box built for bootstrap themes">
    <meta name="author" content="Nicolas Bize">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>MagicSuggest - Examples</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
  
    <link href="css/magicsuggest.css" rel="stylesheet">
    <link href="css/gh-fork-ribbon.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/magicsuggest.js"></script>
  
  </head>

  <body>
    <div class="github-fork-ribbon-wrapper right">
        <div class="github-fork-ribbon">
            <a href="https://github.com/nicolasbize/magicsuggest">View on GitHub</a>
        </div>
    </div>
    <a class="notice" href="http://nicolasbize.com/faviconx">Check out my new open source project, FavIconX!</a>
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">MagicSuggest</h3>
              <ul class="nav masthead-nav">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="examples.html">Examples</a></li>
                <li><a href="doc.html">Documentation</a></li>
                <li><a href="tutorial.html">Tutorial</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="container">
          <h1>Showcase</h1>
          <p>Want to take a closer look at the code for those examples? <a href="js/examples.js" target="_">Click here to view examples.js</a> </p>
          <div class="row">
            <div class="col-md-6">
              <h3>Tag box</h3>
              <p>Use this type of combo when you want to allow your user to pick any number of freely entered tags</p>
              <div class="form-group">
                <label>Tag box (free entries)</label>
                <input class="form-control" id="ms-tagbox">
              </div>
            </div>
            <div class="col-md-6">
              <h3>Filter box</h3>
              <p>Use this type of combo to allow the user to select multiple values amongst a restricted set.
                We are using custom renderers to present the selection in a familiar look and feel</p>
              <div class="form-group">
                <div class="col-xs-4">
                  <label>Filter by</label>
                  <input class="form-control" id="ms-filter">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h3>Scrabble box</h3>
              <p>Allow room for free entries but also have fixed suggestions loaded dynamically. I like to call that the scrabble box because
                I have a tendancy to make up words in addition to the existing dictionary ones whenever I play that game.</p>
              <div class="form-group">
                <label>Scrabble box (free entries + set of entries)</label>
                <input class="form-control" id="ms-scrabble">
              </div>
            </div>
            <div class="col-md-6">
              <h3>Email recipients box</h3>
              <p>Use this type of combo to present the results in the gmail recipients combo style. Note that we are only using a custom
                renderer for the items located in the combo and letting the component know which property to render when selected. </p>
              <div class="form-group">
                <label>Enter some email addresses</label>
                <input class="form-control" id="ms-emails">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h3>Complex Templating</h3>
              <p>Customized presentation, data fetched through ajax but auto filtered by the component.</p>
              <div class="form-group">
                <label>Random People</label>
                <input class="form-control" id="ms-complex-templating">
              </div>
            </div>
            <div class="col-md-6">

            </div>
          </div>
      </div>
      <div style="height:200px"></div>

    </div>
  

<script type="text/javascript">

    $('#ms-emails').magicSuggest({
        placeholder: 'Enter recipients...',
        data: [{
            name: 'Georges Washington',
            email: 'georges.washington@whitehouse.gov',
            pic: '<img src="http://placehold.it/25x25">'

        },{
            name: 'Theodore Roosevelt',
            email: 'theodore.roosevelt@whitehouse.gov',
            pic: '<img src="http://placehold.it/25x25">'
        },{
            name: 'Benjamin Franklin',
            email: 'benjamin.franlin@whitehouse.gov',
            pic: '<img src="http://placehold.it/25x25">'
        },{
            name: 'Abraham Lincoln',
            email: 'abraham.lincoln@whitehouse.gov',
            pic: '<img src="http://placehold.it/25x25">'
        }],
        valueField: 'email',
        vauleField: 'pic',
        renderer: function(data){
            return   data.pic + ' (<b>' + data.name + '</b>)' + data.email;
        },
        resultAsString: true 
        
    });
</script>

  </body>
</html>
