<!--

Title: GamerClick
Author: Caleb Belcourt
Date: March 13, 2020

-->

<!DOCTYPE html>

<html>
<head>
    <title>Gamer Click</title>
    <style>

        .button {
          background-color: #008CBA;
          border: none;
          border-radius: 8px;
          color: white;
          padding: 10px 24px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }

        div {
          border-radius: 5px;
          padding: 0 20px 20px 20px;
        }

        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 35%;
        }

    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <div class='container'>
        <!-- Header -->
        <div class='row'>
            <div class='bg-primary'>
                <h1 style='text-align:center; padding-top: 10px;'>Welcome to Gamer Click! <br> What game did you want to play?</h1>
            </div>
        </div>

        <div class='row'>
            <!-- Content -->
            <div class='row'>
                <div id='content'>
						            <h1>Supported Games</h1>

                        <h2 style='text-align:center'>Overwatch</h2>
                        <img src="overwatch.png" id='overwatch' class='center' alt="Overwatch" onClick='submitForm1'/><br>

                        <h2 style='text-align:center'>Apex</h2>
                        <img src="apex.png" id='apex' class='center' alt="Apex Legends" onClick='submitForm2'/><br>

                        <h2 style='text-align:center'>Paladins</h2>
                        <img src="paladins.png" id='paladins' class='center' alt="Paladins" onClick='submitForm3'/><br>
                </div>
            </div>
        </div>

        <!-- These forms submit which game the user wants to play depending on the image clicked -->
        <form id='form-overwatch' method='post' action='controller.php' style='display:none'>
            <input type='hidden' name='page' value='GamePage'>
            <input type='hidden' name='game' value='overwatch'>
        </form>

        <form id='form-apex' method='post' action='controller.php' style='display:none'>
            <input type='hidden' name='page' value='GamePage'>
            <input type='hidden' name='game' value='apex'>
        </form>

        <form id='form-paladins' method='post' action='controller.php' style='display:none'>
            <input type='hidden' name='page' value='GamePage'>
            <input type='hidden' name='game' value='paladins'>
        </form>

        <script>
        $('#overwatch').click(function() {
                $('#form-overwatch').submit();
            });

        $('#apex').click(function() {
                $('#form-apex').submit();
            });

        $('#paladins').click(function() {
                $('#form-paladins').submit();
            });
		    </script>

    </div>
</body>
</html>
