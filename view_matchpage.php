<!--

Title: GamerClick
Author: Caleb Belcourt
Date: March 13, 2020

-->

<!DOCTYPE html>

<html>
<head>
    <title>Gamer Click</title>

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>

    <style>

		  .label {
            display:inline-block;
            width:80px;
      }

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

    </style>
</head>

<body>
    <div class='container'>
        <!-- Header -->
        <div class='row'>
            <div class='bg-primary'>
                <h1 style='text-align:center; padding-top: 10px;'>Gamer Click</h1>
            </div>
        </div>

        <div class='row'>
            <!-- Content -->
            <div class='row'>
                <div id='content'>
					             <h2><?php echo $match; ?></h2>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class='row'>
            <div>
				          <button type='button' id='back' class='button'>Match Again?</button>
            </div>
        </div>

		    <form id='form-back' method='post' action='controller.php' style='display:none'>
            <input type='hidden' name='page' value='MatchPage'>
        </form>

        <script>
            // When the 'Match Again?' button is clicked
            $('#back').click(function() {
                $('#form-back').submit();
            });
		</script>

    </div>
</body>
</html>
