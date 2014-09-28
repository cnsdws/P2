<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>XKCD Style Password Generator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
  
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://dwa15.com">CSCI - E15</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.dennisstevens.me">Home</a></li>
            <li><a href="http://p1.dennisstevens.me">P1 Live</a></li>
            <li><a href="https://github.com/cnsdws/P1">P1 Github</a></li>
            <li><a href="http://p2.dennisstevens.me">P2 Live</a></li>
            <li><a href="https://github.com/cnsdws/P2">P2 Github</a></li>
            <li><a href="http://p3.dennisstevens.me">P3 Live</a></li>
            <li><a href="https://github.com/cnsdws/P3">P3 Github</a></li>
            <li><a href="http://p4.dennisstevens.me">P4 Live</a></li>
            <li><a href="https://github.com/cnsdws/P4">P4 Github</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
  </div>
    <br>
    <br>
    <br>
    <div class="container">

      <div class="starter-template">
        <ul class="media-list">
          <li class="media">
            <div class="media-body">
              <h1 class="media-heading">XKCD Style Password Generator</h1>
                <h2>Project 2</h2>
                  <h3>Here is your Password:</h3>
		           <h4>
                    <?php
					    
						// Defines all of the variables collected from the POST function of the html page
					    $pWordLength = $_POST['pWordLength'];
						$addNumbers = $_POST['addNumbers'];
						$addSpecChar = $_POST['addSpecChar'];
						$addDash = $_POST['addDash'];
						$addCamel = $_POST['addCamel'];
						
						// Establishes the array of words to be used in the password generation
						$wordList = array("chicken","horse","swallow","barn","frenzy","wind","holiday","style","window","door","shark","turtle",
						 "shine", "happy","tempest","coral", "battery", "cable", "runner", "walker","guitar", "hornet", "teapot", "worker", "cattle", 
						 "widget", "wonder","tuxedo","gremlin","boat","bathtub","kitchen", "diner", "desert","nomad", "navy"); 
						
						
						print("<br>");
                        
						// Generates the password based on the length selected
						for($i = 1; $i<= $pWordLength; $i++)
						{ 
						    // Adds a dash if selected
							if ($i!= 1 && $addDash == true)
							{
							    print("-");	
							}
							
							//generates a random number used as the array index
						    $word = $wordList[rand(0,35)];
							
							// Adds camelcase if selected
							if ($addCamel == true)
							{
								print(ucwords($word));
							}
							else 
							{
								print($word);
							}
						}
						
						// Adds a number to the password if selected
						if ($addNumbers == true)
						{
						   $pwordNumber = rand(1,99);
						   print($pwordNumber);
						}
						
						// Adds a special char if selected
						if ($addSpecChar == true)
						{
						   // Uses a random number variable to choose the special char
						   $specChar = rand(1,8);
						   switch ($specChar)
						   {
						       case "1":
							       print("!");
								   break;
							   case "2":
							       print("@");
								   break;
							   case "3":
							       print("#");
								   break;
							   case "4":
							       print("$");
								   break;
							   case "5":
							       print("%");
								   break;  
							   case "6":
							       print("^");
								   break; 
							   case "7":
							       print("&");
								   break;
							   case "8":
							       print("*");
								   break;
						   }
						}
						
					?>
                   </h4>
            </div>
          </li>
       </ul>
     </div>
   </div>
    
    

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>
