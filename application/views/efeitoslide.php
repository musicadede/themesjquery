<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Effects - Effect demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="//jquery-ui-1.11.4/jquery-ui.css">
  
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//jquery-ui-1.11.4/external/jquery/jquery.js"></script>
  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="//jquery-ui-1.11.4/jquery-ui.js"></script>
  
  
  <!--<link rel="stylesheet" href="/resources/demos/style.css">-->
  <style>
    .toggler { width: 500px; height: 200px; position: relative; }
    #button { padding: .5em 1em; text-decoration: none; }
    #effect { width: 240px; height: 135px; padding: 0.4em; position: relative; }
    #effect h3 { margin: 0; padding: 0.4em; text-align: center; }
    .ui-effects-transfer { border: 2px dotted gray; }
  </style>
  <script>
  $(function() {
      
      $( "#effect" ).effect( 'slide',{},2500);
   
  });
  </script>
</head>
<body>
 
<div class="toggler">
  <div id="effect" class="ui-widget-content ui-corner-all">
    <h3 class="ui-widget-header ui-corner-all">Effect</h3>
    <p>
      Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
    </p>
  </div>
</div>
 
 
 
</body>
</html>