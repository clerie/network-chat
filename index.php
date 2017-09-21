<!DOCTYPE html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="milchinsel.de Clemens Riese" >
    <link rel="icon" href="favicon.ico">
    
    <title>MI Nerdlaunch</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <!--<link href="css/cover.css" rel="stylesheet">-->
    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <script src="jquery.js"></script>
		<script>
		function clock() {
			$.get( "load-clock.php", function( data ) {
				$( "#clock" ).html( data );
			});
		}

		setInterval(function(){ clock(); }, 1000);

        window.onload = clock();

		function messages() {
			$.get( "load-messages.php", function( data ) {
				$( "#messages" ).html( data );
			});
		}

		setInterval(function(){ messages(); }, 3000);

        window.onload = messages();


        function info() {
			$.get( "load-info.php", function( data ) {
				$( "#info" ).html( data );
			});
		}

		setInterval(function(){ info(); }, 10000);

        window.onload = info();

        function message_send() {
            var text = $('#text').val();
            var benutzername = $('#benutzername').val();
            $.ajax({
                type: "POST",
                url: "exe-message.php",
                data: "benutzername=" + benutzername + "&text=" + text,
                dataType: "text/plain"
            });
            $('#text').val("");
        }
    </script>
    </head>
    
    <body class="bg-dark" style="margin: 1vh">
        <div class="conatiner-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="height: 96vh;">
                        <div class="card-header">
                            <h4 class="card-title">MI Nerdlaunch</h4>
                        </div>
                        <div class="card-body" style="overflow: auto;">
                            <div id="info">Laden...</div>
                        </div>
                        <div class="card-footer">
                            <div id="clock">Laden...</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card" style="height: 96vh;">
                        <div class="card-header">
				                <input id="text" type="text" name="text" placeholder="Nachricht" class="form-control">
                                <br>
                                <div class="row">
                                    <div class="col-md-8">
				                <button type="submit" onclick="message_send();" class="btn btn-secondary btn-block">Senden</button>
                                    </div>
                                    <div class="col-md-4">
                                        <input id="benutzername" type="text" name="benutzername" placeholder="Benutzername" class="form-control">
                                    </div>
                                </div>
                        </div>
                        <div class="card-body" style="overflow: auto;">
                            <div id="messages">Laden...</div>
                        </div>
                        <div class="card-footer">
				&copy; <a href="https://milchinsel.de>milchinsel.de</a> Clemens Riese <div id="status"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
