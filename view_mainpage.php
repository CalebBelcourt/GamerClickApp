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

      .radio_container {
          display: block;
          position: relative;
          padding-left: 35px;
          margin-bottom: 12px;
          cursor: pointer;
          font-size: 22px;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
      }


      .radio_container input {
          position: absolute;
          opacity: 0;
          cursor: pointer;
      }

      .checkmark {
          position: absolute;
          top: 0;
          left: 0;
          height: 25px;
          width: 25px;
          background-color: #eee;
          border-radius: 50%;
      }


      .radio_container:hover input ~ .checkmark {
          background-color: #ccc;
      }

      .radio_container input:checked ~ .checkmark {
          background-color: #2196F3;
      }

      .checkmark:after {
          content: "";
          position: absolute;
          display: none;
      }

      .radio_container input:checked ~ .checkmark:after {
          display: block;
      }

      .radio_container .checkmark:after {
         	top: 9px;
        	left: 9px;
        	width: 8px;
        	height: 8px;
        	border-radius: 50%;
        	background: white;
      }


      input[type=text], select {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
          }

          input[type=submit]:hover {
              background-color: #45a049;
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
                <h1 style='text-align:center; padding-top: 10px;'>What type of player are you looking for?</h1>
            </div>
        </div>

        <div class='row'>
            <!-- Content -->
            <div class='row'>
                <div id='content'>
                        <!-- This form submits the user's preferences in a partner -->
					             <form method='post' action='controller.php'>
						                  <input type='hidden' name='page' value='MainPage'></input>
                              <?php echo '<input type="hidden" name="game" value='. $game .'></input>'; ?>

                              <div class='col-sm-6'>

                                  <h2>Competitive</h2>
                                  <label class="radio_container">Yes
                                      <input type='radio' id='competitive_yes' name='competitive' value='yes'>
                                      <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">No
                                      <input type='radio' id='competitive_no' name='competitive' value='no'>
                                      <span class="checkmark"></span>
                                  </label>

                                  <br><br>

                                  <h2>Hours Played</h2>
                                  <label class="radio_container">Doesn't matter
                                      <input type='radio' id='hours_dm' name='hours' value='hoursDm'>
                                      <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">10 - 20
                                      <input type='radio' id='hours_10' name='hours' value='hours10'>
                                      <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">20 - 50
                                    <input type='radio' id='hours_20' name='hours' value='hours20'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">50 - 70
                                    <input type='radio' id='hours_50' name='hours' value='hours50'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <br><br>

                                  <h2>Timezone</h2>
                                  <label class="radio_container">Doesn't matter
                                    <input type='radio' id='time_dm' name='time' value='timeDm'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">Eastern Time
                                    <input type='radio' id='time_east' name='time' value='timeEast'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">Central Time
                                    <input type='radio' id='time_central' name='time' value='timeCentral'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">Mountain Time
                                    <input type='radio' id='time_mountain' name='time' value='timeMountain'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">Pacific Time
                                    <input type='radio' id='time_pacific' name='time' value='timePacific'>
                                    <span class="checkmark"></span>
                                  </label>

                                </div>

                                <div class='col-sm-6'>

                                  <h2>Gender</h2>
                                  <label class="radio_container">Doesn't matter
                                    <input type='radio' id='gender_dm' name='gender' value='genderDm'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">Male
                                    <input type='radio' id='gender_male' name='gender' value='genderMale'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">Female
                                    <input type='radio' id='gender_female' name='gender' value='genderFemale'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <label class="radio_container">Other
                                    <input type='radio' id='gender_other' name='gender' value='genderOther'>
                                    <span class="checkmark"></span>
                                  </label>

                                  <br><br>

                                  <h2>Contact Info</h2>

                                  <label for='tag'>Discord Tag</label>
                                  <input type='text' id='tag' name='tag' placeholder='Your tag'><br><br>

                                  <label for='email'>Email</label>
                                  <input type='text' id='email' name='email' placeholder='Your email'><br><br>

                                  <label for='name'>What will you be called?</label>
                                  <input type='text' id='name' name='name' placeholder='Your name'><br><br>

                                  <br>

                                  <button type='submit' value='Submit' class='button'>Match</button>

                                </div>

					              </form>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
