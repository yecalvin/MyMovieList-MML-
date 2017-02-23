<!DOCTYPE html>
<html lang="en">

<head>

    <!--
    BOOTSTRAP TEMPLATE FROM: https://startbootstrap.com/template-overviews/business-casual/
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BOOTSTRAP TEMPLATE FROM: https://startbootstrap.com/template-overviews/business-casual/">
    <meta name="author" content="">

    <title>MML</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="brand">MyMovieList</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">MyMovieList</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="myList.php">My List</a>
                    </li>
                    <li>
                        <a href="reviews.php">Reviews</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<div class="container">
	
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
						<strong>Review</strong>
                    </h2>
                    <hr>
					
					<center><p><form method="POST" action="reviews.php"></p></center>
					
					
					
                    <center><p><font size="3"> Name of movie/TV show
							</font></p></center>
                    <center>
						<input type="text" name="PictureName" size="30" required>
					</center>
					
					<!--
					<center><p><font size="3"> MovieID/TVShowID
							</font></p></center>
					<center>
						<input type="number" name="reviewPictureId">
					</center>	
					-->
					
					<center><p><font size="3"> ReviewID
							</font></p></center>
					<center>
						<input type="number" name="reviewId" required>
					</center>	
						
						
						
					<center><p><font size="3"> Rate
						</font></p></center>
                    <center>
							<select name="Rating">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							</select>
							<br><br>
					</center>
					
					<center><p><font size="3"> Comments
						</font></p></center>
                    <center>
							<textarea name="Comments" rows="8" cols="75" required></textarea>
					</center>
					
					<center>
					<input type="submit" value="review movie" name="reviewCombineMsubmit">
					<input type="submit" value="review TV show" name="reviewCombineTsubmit"></p>
					</center>
					</form>
					
                </div>
            </div>
        </div>
		
		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">
						Remove a <strong>review</strong>
					</h2>
					<hr>
					<center><p><form method="POST" action="reviews.php"></p></center>
					
					<center><p><font size="3"> ReviewID
						</font></p></center>
					<center>
							<input type="number" name="removereviewId" required>
					</center>
					<br />
					<center>
					<input type="submit" value="remove movie review" name="removeCombinereviewMSubmit">
					<input type="submit" value="remove TV show review" name="removeCombinereviewTSubmit"></p> <br />
					</center>
					
					</form>
					
				</div>
			</div>
		</div>
		
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        Search all <strong>movies/TV shows</strong> where <strong>ratings</strong> are at least:
                    </h2>
                    <hr>
                    <hr class="visible-xs">
					
					<center><p><font size="3">Rating</font></p></center>
	
					<center><form method="POST" action="reviews.php">
					
					<center>
						<select name="SearchRating">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						</select>
						<br>
					</center>
					<br />
					<center>
					<input type="submit" value="search movies" name="CombineMSearch">
					<input type="submit" value="search TV shows" name="CombineTSearch"></center>
					</form>
                </div>
            </div>
        </div>		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		<!--
		
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
						Review a <strong>movie</strong>
                    </h2>
                    <hr>
					<center><p><form method="POST" action="reviews.php"></p></center>
                    <center><p><font size="3"> Name of movie
							</font></p></center>
                    <center>
						<input type="text" name="MovieName" size="30">
					</center>
					
					
					<center><p><font size="3"> MovieID
							</font></p></center>
					<center>
						<input type="number" name="reviewMovieId">
					</center>	
					
					
					<center><p><font size="3"> ReviewID
							</font></p></center>
					<center>
						<input type="number" name="reviewMid">
					</center>	
						
						
						
					<center><p><font size="3"> Rate
						</font></p></center>
                    <center>
							<select name="MRating">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							</select>
							<br><br>
					</center>
					
					
					
					<center><p><font size="3"> Comments
						</font></p></center>
                    <center>
							<textarea name="MComments" rows="10" cols="75"></textarea>
					</center>
					
					<center>
					<input type="submit" value="submit" name="reviewMsubmit"></p>
					</center>
					</form>
					
                </div>
            </div>
        </div>
		
		-->
		
		
		<!--
		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">
						Remove <strong>movie</strong> review
					</h2>
					<hr>
					<center><p><form method="POST" action="reviews.php"></p></center>
					
					<center><p><font size="3"> ReviewID
						</font></p></center>
					<center>
							<input type="number" name="removereviewMid">
					</center>
					<br />
					<center>
					<input type="submit" value="remove" name="removeMreviewSubmit"></p> <br />
					</center>
					
					</form>
					
				</div>
			</div>
		</div>
		-->
		
			
		
		<!--
		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">
						Review a <strong>TV show</strong>
					</h2>
					<hr>
					
					<center><p><form method="POST" action="reviews.php"></p></center>
					
					<center><p><font size="3"> Name of TV show
							</font></p></center>
					<center>
						<input type="text" name="TVShowName" size="30">
					</center>
					
					<center><p><font size="3"> TVShowID
							</font></p></center>
					<center>
						<input type="number" name="reviewTVShowId">
					</center>
					
					
										
					<center><p><font size="3"> ReviewID
							</font></p></center>
					<center>
						<input type="number" name="reviewTid">
					</center>	
						
						
						
					<center><p><font size="3"> Rate
						</font></p></center>
					<center>
							<select name="TRating">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							</select>
							<br><br>
					</center>
					
					
					
					<center><p><font size="3"> Comments
						</font></p></center>
					<center>
							<textarea name="TComments" rows="10" cols="75"></textarea>
					</center>
					
					<center>
					<input type="submit" value="submit" name="reviewTsubmit"></p>
					</center>
					
					</form>
					
				</div>
			</div>
		</div>
		
		-->
		
		
		<!--
		<div class="row">
			<div class="box">
				<div class="col-lg-12">
					<hr>
					<h2 class="intro-text text-center">
						Remove <strong>TV show</strong> review
					</h2>
					<hr>
					<center><p><form method="POST" action="reviews.php"></p></center>
					<center><p><font size="3"> ReviewID
						</font></p></center>
					<center>
							<input type="number" name="removereviewTid">
					</center>
					<br />
					<center>
					<input type="submit" value="remove" name="removeTreviewSubmit"></p> <br />
					</center>
					
					</form>
					
				</div>
			</div>
		</div>
		-->
		
		
		<!--
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        Search all <strong>movies</strong> where <strong>ratings</strong> are at least:
                    </h2>
                    <hr>
                    <hr class="visible-xs">
					
					<center><p><font size="3">Rating</font></p></center>
	
					<center><form method="POST" action="reviews.php">
					
					<center>
						<select name="MSearchRating">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						</select>
						<br>
					</center>
					<br />
					<input type="submit" value="search" name="MSearch"></center>
					</form>
                </div>
            </div>
        </div>			
		
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        Search all <strong>TV shows</strong> where <strong>ratings</strong> are at least:
                    </h2>
                    <hr>
                    <hr class="visible-xs">
					
					<center><p><font size="3">Rating</font></p></center>
	
					<center><form method="POST" action="reviews.php">
					
					<center>
						<select name="TSearchRating">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						</select>
						<br>
					</center>
					<br />
					<input type="submit" value="search" name="TSearch"></center>
					</form>
                </div>
            </div>
        </div>			
	-->
	
	</div class="container">
	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>


<?php

//this tells the system that it's no longer just parsing 
//html; it's now parsing PHP

$success = True; //keep track of errors so it redirects the page only if there are no errors
$db_conn = OCILogon("ora_r7w9a", "a26559147", "dbhost.ugrad.cs.ubc.ca:1522/ug");

// refer: http://www.w3schools.com/bootstrap/bootstrap_modal.asp
function showErrorMsg($cmd, $err) {
        echo "<div  class='modal fade in error-modal' style='display:block' role='dialog'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h4 class='modal-title'>Error</h4>
                  </div>
                  <div class='modal-body'>
                  <p>" . $cmd . "</p>
                    <p>" . $err ."</p>
                  </div>
                  <div class='modal-footer'>
                    <button class='error-modal-btn' type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                  </div>
                </div>
              </div>
            </div>
            <script>
            $('.error-modal-btn').on('click', function () {
    		$('.error-modal').remove();
			});
			</script>";
}

function executePlainSQL($cmdstr) { //takes a plain (no bound variables) SQL command and executes it
	global $db_conn, $success;
	$statement = OCIParse($db_conn, $cmdstr); //There is a set of comments at the end of the file that describe some of the OCI specific functions and how they work

	if (!$statement) {
		$e = OCI_Error($db_conn);      
		showErrorMsg($cmdstr, $e['message']);
		$success = False;
	}

	$r = OCIExecute($statement, OCI_DEFAULT);
	if (!$r) {
		$e = oci_error($statement);
		showErrorMsg($cmdstr, $e['message']);
		$success = False;
	} else {

	}
	return $statement;

}

function executeBoundSQL($cmdstr, $list) {
	/* Sometimes a same statement will be excuted for severl times, only
	 the value of variables need to be changed.
	 In this case you don't need to create the statement several times; 
	 using bind variables can make the statement be shared and just 
	 parsed once. This is also very useful in protecting against SQL injection. See example code below for       how this functions is used */

	global $db_conn, $success;
	$statement = OCIParse($db_conn, $cmdstr);

	if (!$statement) {
		$e = OCI_Error($db_conn);
		showErrorMsg($cmdstr, $e['message']);
		$success = False;
	}

	foreach ($list as $tuple) {
		foreach ($tuple as $bind => $val) {
			//echo $val;
			//echo "<br>".$bind."<br>";
			OCIBindByName($statement, $bind, $val);
			unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype

		}
		$r = OCIExecute($statement, OCI_DEFAULT);
		if (!$r) {
			$e = OCI_Error($statement);
			showErrorMsg($cmdstr, $e['message']);
			$success = False;
		}
	}

}

function executeBoundSQL2($cmdstr, $list) {
	/* Sometimes a same statement will be excuted for severl times, only
	 the value of variables need to be changed.
	 In this case you don't need to create the statement several times; 
	 using bind variables can make the statement be shared and just 
	 parsed once. This is also very useful in protecting against SQL injection. See example code below for       how this functions is used */

	global $db_conn, $success;
	$statement = OCIParse($db_conn, $cmdstr);

	if (!$statement) {
		$e = OCI_Error($db_conn);
		showErrorMsg($cmdstr, $e['message']);
		$success = False;
	}

	foreach ($list as $tuple) {
		foreach ($tuple as $bind => $val) {
			//echo $val;
			//echo "<br>".$bind."<br>";
			OCIBindByName($statement, $bind, $val);
			unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype

		}
		$r = OCIExecute($statement, OCI_DEFAULT);
		if (!$r) {
			$e = OCI_Error($statement);
			showErrorMsg($cmdstr, $e['message']);
			$success = False;
		}
	}
	return $statement;
}

function printResult($result) { //prints results from a select statement
	//echo "<br>Got data from Movies:<br>";
	echo "<html>";
	echo "<div class='row'>";
    echo "<div class='box'>";
    echo "<div class='col-lg-12'>";
	echo "<center><p><font size='3'>Movie Reviews</p></centre>";
	echo "<table bgcolor='#00FF00'>";
	echo "<tr><th>Movie Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Comments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>MovieID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>ReviewID</th></tr>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo "<tr><td>" . $row[1]. "</td><td>" . $row[2]  . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>"  . $row[5] . "</td><tr>"; //or just use "echo $row[0]" 
	}
	echo "</table>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</html>";
}

function printResultTV($result) { //prints results from a select statement
	//echo "<br>Got data from TVShows:<br>";
	echo "<html>";
	echo "<div class='row'>";
    echo "<div class='box'>";
    echo "<div class='col-lg-12'>";
	echo "<center><p><font size='3'>TV Show Reviews</p></centre>";
	echo "<table bgcolor='#00FF00'>";
	echo "<tr><th>TV Show Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Rating&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Comments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>TVShowID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>ReviewID</th></tr>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo "<tr><td>" . $row[1]. "</td><td>" . $row[2]  . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>"  . $row[5] . "</td><tr>"; //or just use "echo $row[0]" 
	}
	echo "</table>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</html>";
}

function printSearch($result) { 
	echo "<html>";
	echo "<div class='row'>";
    echo "<div class='box'>";
    echo "<div class='col-lg-12'>";
	echo "<center><p><font size='3'>Result of Search</p></centre>";
	echo "<table bgcolor='#00FF00'>";

	while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
		echo "<tr><td>" . $row[0]. "</td><td>" . $row[2]  . "</td><td>" . $row[3] ."</td></tr>" ; //or just use "echo $row[0]" 
	}
	echo "</table>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</html>";
}
	
function getIdFromMovieName($MovieName) {
	$query = "select movieId from Movie where name = '" . $MovieName . "'";
	$result = executePlainSQL($query);
	$row = OCI_Fetch_Array($result, OCI_BOTH);
	$id = $row[0];
	return $id;
}

function getIdFromTVShowName($TVShowName) {
	$query = "select TVShowId from TVshow where name = '" . $TVShowName . "'";
	$result = executePlainSQL($query);
	$row = OCI_Fetch_Array($result, OCI_BOTH);
	$id = $row[0];
	return $id;
}

function console_log( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

// Connect Oracle...
if ($db_conn) {
	
	if (array_key_exists('reset', $_POST)) {
		// Drop old table...
		echo "<br> dropping table <br>";
		executePlainSQL("Drop table tab1");

		// Create new table...
		echo "<br> creating new table <br>";
		executePlainSQL("create table tab1 (nid number, name varchar2(30), primary key (nid))");
		OCICommit($db_conn);

	} /*else
		if (array_key_exists('reviewMsubmit', $_POST)) {
							$tuple1 = array (
							":bind1" => $_POST['reviewMid'],
							":bind2" => $_POST['reviewMovieId'],
							":bind3"=> $_POST['MComments'],
							":bind4"=> $_POST['MRating']);
							$alltuples1 = array ($tuple1);
							executeBoundSQL("insert into ReviewsmDisplays values (:bind1, :bind2, :bind3, :bind4)", $alltuples1);
							OCICommit($db_conn);
		} else
			if (array_key_exists('MSearch', $_POST)) {
						$tuple = array (
						":bind1" => $_POST['MSearchRating']);
						$alltuples = array ($tuple);
						$result = executeBoundSQL2("select name 
													from Movie
													where movieId IN
														(select movieid 
														from reviewsmdisplays 
														where rating >= :bind1 minus 
															(select movieid 
															from reviewsmdisplays 
															where rating < :bind1))", $alltuples);
						printSearch($result);
						OCICommit($db_conn);
			} else
				if (array_key_exists('TSearch', $_POST)) {
							$tuple = array (
							":bind1" => $_POST['TSearchRating']);
							$alltuples = array ($tuple);
							$result = executeBoundSQL2("select name 
														from TVShow
														where TVShowId IN
															(select TVShowId 
															from reviewstdisplays 
															where rating >= :bind1 minus 
																(select TVShowId 
																from reviewstdisplays 
																where rating < :bind1))", $alltuples);
							printSearch($result);
							OCICommit($db_conn);
					
				} else 
					if(array_key_exists('searchsubmit', $_POST)) {
						
					} else 
						if(array_key_exists('reviewTsubmit', $_POST)) {
							$tuple = array (
							":bind1" => $_POST['reviewTid'],
							":bind2" => $_POST['reviewTVShowId'],
							":bind3"=> $_POST['TComments'],
							":bind4"=> $_POST['TRating']);
							$alltuples = array ($tuple);
							executeBoundSQL("insert into ReviewstDisplays values (:bind1, :bind2, :bind3, :bind4)", $alltuples);
							OCICommit($db_conn);
						} else
							if(array_key_exists('removeMreviewSubmit', $_POST)) {
								$tuple = array (
								":bind1" => $_POST['removereviewMid']);
								$alltuples = array ($tuple);
								executeBoundSQL("delete from ReviewsmDisplays where reviewId = :bind1 ", $alltuples);
								OCICommit($db_conn);		
							} else 
								if (array_key_exists('removeTreviewSubmit', $_POST)) {
									$tuple = array (
									":bind1" => $_POST['removereviewTid']);
									$alltuples = array ($tuple);
									executeBoundSQL("delete from ReviewstDisplays where reviewId = :bind1 ", $alltuples);
									OCICommit($db_conn);		
								}*/ else
									if (array_key_exists('reviewCombineMsubmit', $_POST)) {
										$tuple1 = array (
										":bind1" => $_POST['reviewId'],
										":bind2" => getIdFromMovieName($_POST['PictureName']),
										
										//":bind2" => $_POST['reviewPictureId'],
										":bind3"=> $_POST['Comments'],
										":bind4"=> $_POST['Rating']);
										$alltuples1 = array ($tuple1);
										executeBoundSQL("insert into ReviewsmDisplays values (:bind1, :bind2, :bind3, :bind4)", $alltuples1);
										OCICommit($db_conn);
									} else
										if (array_key_exists('reviewCombineTsubmit', $_POST)) {
											$tuple1 = array (
											":bind1" => $_POST['reviewId'],
											":bind2" => getIdFromTVShowName($_POST['PictureName']),
											
											//":bind2" => $_POST['reviewPictureId'],
											":bind3"=> $_POST['Comments'],
											":bind4"=> $_POST['Rating']);
											$alltuples1 = array ($tuple1);
											executeBoundSQL("insert into ReviewstDisplays values (:bind1, :bind2, :bind3, :bind4)", $alltuples1);
											OCICommit($db_conn);
										} else
											if (array_key_exists('removeCombinereviewMSubmit', $_POST)) {
												$tuple1 = array (
												":bind1" => $_POST['removereviewId']);
												$alltuples1 = array ($tuple1);
												executeBoundSQL("delete from ReviewsmDisplays where reviewId = :bind1", $alltuples1);
												OCICommit($db_conn);
											} else
												if (array_key_exists('removeCombinereviewTSubmit', $_POST)) {
													$tuple1 = array (
													":bind1" => $_POST['removereviewId']);
													$alltuples1 = array ($tuple1);
													executeBoundSQL("delete from ReviewstDisplays where reviewId = :bind1", $alltuples1);
													OCICommit($db_conn);
												} else
													if (array_key_exists('CombineMSearch', $_POST)) {
																$tuple = array (
																":bind1" => $_POST['SearchRating']);
																$alltuples = array ($tuple);
																$result = executeBoundSQL2("select name 
																							from Movie
																							where movieId IN
																								(select movieid 
																								from reviewsmdisplays 
																								where rating >= :bind1 minus 
																									(select movieid 
																									from reviewsmdisplays 
																									where rating < :bind1))", $alltuples);
																printSearch($result);
																OCICommit($db_conn);
													} else
														if (array_key_exists('CombineTSearch', $_POST)) {
																	$tuple = array (
																	":bind1" => $_POST['SearchRating']);
																	$alltuples = array ($tuple);
																	$result = executeBoundSQL2("select name 
																								from TVShow
																								where TVShowId IN
																									(select TVShowId 
																									from reviewstdisplays 
																									where rating >= :bind1 minus 
																										(select TVShowId 
																										from reviewstdisplays 
																										where rating < :bind1))", $alltuples);
																	printSearch($result);
																	OCICommit($db_conn);
														}
								
								
	if ($_POST && $success) {
		//POST-REDIRECT-GET -- See http://en.wikipedia.org/wiki/Post/Redirect/Get
		
		header("location: reviews.php");		
		$result = executePlainSQL("select r.rating, m.name, r.rating, r.comments, m.movieId, r.reviewId
								   from ReviewsmDisplays r, Movie m
								   where m.movieId = r.movieId");
		
		$resultTV = executePlainSQL("select r.rating, t.name, r.rating, r.comments, t.TVShowId, r.reviewId
								     from ReviewstDisplays r, TVShow t
									 where r.TVShowId = t.TVShowId");
		printResult($result);
		printResultTV($resultTV);
	} else {
		// Select data...
		$result = executePlainSQL("select r.rating, m.name, r.rating, r.comments, m.movieId, r.reviewId
								   from ReviewsmDisplays r, Movie m
								   where m.movieId = r.movieId");
								   
		$resultTV = executePlainSQL("select r.rating, t.name, r.rating, r.comments, t.TVShowId, r.reviewId
								     from ReviewstDisplays r, TVShow t
									 where r.TVShowId = t.TVShowId");
		printResult($result);
		printResultTV($resultTV);
	}

	//Commit to save changes...
	OCILogoff($db_conn);
} else {
	echo "cannot connect";
	$e = OCI_Error(); // For OCILogon errors pass no handle
	echo htmlentities($e['message']);
}

/*
	SELECT m.name
	FROM Movie m, 
	WHERE NOT EXISTS 
	(SELECT rw.reviewId
	 FROM ReviewsWrites rw
	 WHERE NOT EXISTS
	 (SELECT m.movieId
	  FROM Review_m_Displays rd
	  WHERE m.movieId = rd.movieId AND rd.reviewId = rw.reviewId AND rd.rating >= :bind1))
*/

/* OCILogon() allows you to log onto the Oracle database
     The three arguments are the username, password, and database
     You will need to replace "username" and "password" for this to
     to work. 
     all strings that start with "$" are variables; they are created
     implicitly by appearing on the left hand side of an assignment 
     statement */

/* OCIParse() Prepares Oracle statement for execution
      The two arguments are the connection and SQL query. */
/* OCIExecute() executes a previously parsed statement
      The two arguments are the statement which is a valid OCI
      statement identifier, and the mode. 
      default mode is OCI_COMMIT_ON_SUCCESS. Statement is
      automatically committed after OCIExecute() call when using this
      mode.
      Here we use OCI_DEFAULT. Statement is not committed
      automatically when using this mode */

/* OCI_Fetch_Array() Returns the next row from the result data as an  
     associative or numeric array, or both.
     The two arguments are a valid OCI statement identifier, and an 
     optinal second parameter which can be any combination of the 
     following constants:

     OCI_BOTH - return an array with both associative and numeric 
     indices (the same as OCI_ASSOC + OCI_NUM). This is the default tLooksUp have reference to TVShowstHave but TVShowstHave need TVShowId and workerId as primary key so im gonna add two more table to seperate Movies and ShowId
     behavior.  
     OCI_ASSOC - return an associative array (as OCI_Fetch_Assoc() 
     works).  
     OCI_NUM - return a numeric array, (as OCI_Fetch_Row() works).  
     OCI_RETURN_NULLS - create empty elements for the NULL fields.  
     OCI_RETURN_LOBS - return the value of a LOB of the descriptor.  
     Default mode is OCI_BOTH.  */
?>
