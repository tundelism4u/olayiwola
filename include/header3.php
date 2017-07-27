<div class="header">
<nav class="navbar navbar-site navbar-default" role="navigation">
<div class="container">
<div class="navbar-header">
<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a href="index.php" class="navbar-brand logo logo-title">
 
<span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span> JOB<span>LINK </span> </a> </div>
<div class="navbar-collapse collapse"><?php
         
    if(!isset($_SESSION['id']) && !isset($_SESSION['emp-id'])){
      ?>
        
<ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
        <li><a style="color:white" class="btn btn-block btn-post btn-danger" href="emp-login.php"><strong>Employer? Click here</strong> <i class="fa fa-arrow-circle-o-right"></i></a></li>
</ul>
            <?php
      } 
    if(isset($_SESSION['id'])){
      ?>
        <ul class="nav navbar-nav navbar-right">
<li><a href="logout.php">Signout <i class="glyphicon glyphicon-off"></i> </a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span></span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
<ul class="dropdown-menu user-menu">
<li class="active"><a href="account.php"><i class="icon-home"></i> Personal Home </a></li>
<li><a href="cv.php"><i class="icon-th-thumb"></i> My CV </a></li>
<li><a href="application.php"><i class="icon-docs"></i> Applications </a></li>
<!--li><a href="account-saved-search.html"><i class="icon-star-circled"></i> Saved search </a></li>
<li><a href="account-archived-ads.html"><i class="icon-folder-close"></i> Archived ads </a></li>
<li><a href="account-pending-approval-ads.html"><i class="icon-hourglass"></i> Pending approval </a></li>
<li><a href="statements.html"><i class=" icon-money "></i> Payment history </a></li-->
</ul>
</li>
<!--li><a style="color:white" class="btn btn-block btn-post btn-danger" href="post_job.php"><strong>Employer? Click here</strong> <i class="fa fa-arrow-circle-o-right"></i></a></li-->
</ul>
         <?php
      } 
      
    
    else if(isset($_SESSION['emp-id'])){
      ?>
        <ul class="nav navbar-nav navbar-right">
<li><a href="emp-logout.php">Signout <i class="glyphicon glyphicon-off"></i> </a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span><?php echo $_SESSION['first_name'] ?> <?php echo $_SESSION['last_name'] ?></span> <i class="icon-user fa"></i> <i class=" icon-down-open-big fa"></i></a>
<ul class="dropdown-menu user-menu">
<li class="active"><a href="emp-account.php"><i class="icon-home"></i> Personal Home </a></li>
<li><a href="emp-upload.php"><i class="icon-th-thumb"></i> Upload</a></li>
<li><a href="applicants.php"><i class="icon-docs"></i> Applications <span class="badge"></span> </a></li>
<!--li><a href="account-saved-search.html"><i class="icon-star-circled"></i> Saved search </a></li>
<li><a href="account-archived-ads.html"><i class="icon-folder-close"></i> Archived ads </a></li>
<li><a href="account-pending-approval-ads.html"><i class="icon-hourglass"></i> Pending approval </a></li>
<li><a href="statements.html"><i class=" icon-money "></i> Payment history </a></li-->
</ul>
</li>
<!--li><a style="color:white" class="btn btn-block btn-post btn-danger" href="post_job.php"><strong>Employer? Click here</strong> <i class="fa fa-arrow-circle-o-right"></i></a></li-->
</ul>
         <?php
      } 
      ?>

</div>
 
</div>
 
</nav>
</div>