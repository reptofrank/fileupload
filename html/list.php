<?php
require('../session.php');

$files = fopen('links.txt', 'r');

$contents = fread($files, filesize('links.txt'));
fclose($files);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Obinna's Files</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Upload to Obinna</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="logout.php">Logout</a></li>
                    
                </ul>
            </div>
        </nav>
        <div class="container">
        	<div id="container" class="col-xs-8 col-xs-offset-2">
        		<?php echo $contents ?>
        	</div>
        </div>

        <script type="text/javascript">
        	var cont = document.getElementById('container');
        	var conts = JSON.parse(cont.innerHTML);
        	
        	output = "<table class='table'><tr><th>Date</th><th>Backup File</th></tr>";
        	for(var key in conts){
			$keys = key.split('-');
        		output += "<tr><td>" + $keys[1] + "</td><td>" + $keys[0] + "</td><td> <a href='" + conts[key] + "' class='btn btn-success'>Download</a></td></tr>";
        	}

        	output += "</table>";

        	cont.innerHTML = output;
        	
        </script>
    </body>
</html>
