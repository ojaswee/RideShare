<?php

/*include("includes/functions.php");*/
include('session.php');

/*share(); */
?>

<!DOCTYPE html>
 <html class="not-ie no-js" lang="en">  <!--<![endif]-->
    <head>

        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <title>Share a ride</title>
		<h1>Trips </br> </h1>
		<div id="head_wrap"></div></br>
           <!-- Styles -->

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Forms -->
        <link href="css/jquery.idealforms.css" rel="stylesheet">
        <!-- Select  -->
        <link href="css/jquery.idealselect.css" rel="stylesheet">
        <!-- Slicknav  -->
        <link href="css/slicknav.css" rel="stylesheet">
        <!-- Main style -->
        <link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="styles/style.css" media="all"/>

        <!-- Modernizr -->
        <script src="js/modernizr.js"></script>

        <!-- Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    </head>

    <body>
         <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="search-content">

                <form action="share.php" class="idealforms searchtours" method="post">
                    <div class="col-md-3 col-sm-3 col-xs-12">                           
						<select id="destination" name="origin">
							<option value="default">From</option>
                            <option>Houston</option>
                            <option>Prairie View</option>
                            <option>College Station</option>
                            <option>Cyprus</option>
                            <option>Conroe</option>
                        </select>
            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-12">

                                                    <select id="destination" name="destination">
                                                        <option value="default">To</option>
														<option>Houston</option>
                                                        <option>Prairie View</option>
                                                        <option>College Station</option>
                                                        <option>Cyprus</option>
                                                        <option>Conroe</option>
                                                    </select>

                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="field">
                                                    <input name="date" type="text" placeholder="Date" class="datepicker">
                                                </div>
												<div class="field">
                                                    <input name="time" type="time" placeholder="Time" valur='13:02:01'>
                                                </div>


                                            </div>

                                            <div class="col-md-3 col-sm-3 col-xs-12">

                                                <div class="field">
                                                    <select id="destination" name="number">
                                                        <option value="default">Number of seats</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class='btn_submit'>
												<br/><br/><br/>
													<input type="submit" value="Share" name="btnshare" class="btnsubmit"/>
													<input type="hidden" value= "<?php echo $login_session; ?>" name="username" />
													<?php $login_session; ?>
                                            </div>
                                    </form>
									<div class='btn_search'>
										<form action= "availablerides.php" class="idealforms searchtours" method="post">
											<input type="submit" value = "Search" name="available_rides" />
										</form>
									</div>
                                </div><!-- end .search-content -->

			<div id = "tooplate_footer">
				<?php require('footer.php'); ?>
			</div>
            </div>

        <!-- Javascript -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <!-- Main jQuery -->
        <script type="text/javascript" src="js/jquery.main.js"></script>
        <!-- Form -->
        <script type="text/javascript" src="js/jquery.idealforms.min.js"></script>
        <script type="text/javascript" src="js/jquery.idealselect.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/hoverIntent.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <!-- need this Slicknav  -->
        <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>

    </body>


	</html>
