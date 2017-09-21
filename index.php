<!DOCTYPE html>
<html lang="de">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Clemens" >
    <link rel="icon" href="../../../../favicon.ico">
    
    <title>MI Nerdlaunch</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <!--<link href="css/cover.css" rel="stylesheet">-->
    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <script src="jquery.js"></script>
		<script>
		function uhr() {
			$.get( "load-uhr.php", function( data ) {
				$( "#uhr" ).html( data );
			});
		}

		setInterval(function(){ uhr(); }, 1000);

        window.onload = uhr();

		function messages() {
			$.get( "load-messages.php", function( data ) {
				$( "#messages" ).html( data );
			});
		}

		setInterval(function(){ messages(); }, 3000);

        window.onload = messages();


        function todo() {
			$.get( "load-todo.php", function( data ) {
				$( "#todo" ).html( data );
			});
		}

		setInterval(function(){ todo(); }, 10000);

        window.onload = todo();

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
                            <div id="todo">Laden...</div>
                        </div>
                        <div class="card-footer">
                            <div id="uhr">Laden...</div>
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
                            &copy; milchinsel.de Clemens Riese <div id="status"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="modalBenutzername" tabindex="-1" role="dialog" aria-labelledby="modalBenutzernameLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalBenutzernameLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
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
