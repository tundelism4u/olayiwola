<?php error_reporting(0); ?>
<div class="col-sm-3 page-sidebar">
<aside>
<div class="inner-box">
<div class="user-panel-sidebar">
<div class="collapse-box">
<h5 class="collapse-title no-border"> My Account <a href="#MyLINK" data-toggle="collapse" class="pull-right"><i class="fa fa-angle-down"></i></a></h5>
<div class="panel-collapse collapse in" id="MyLINK">
<ul class="acc-list">
<li><a class="active" href="emp-account.php"><i class="icon-home"></i> Personal Home </a></li>
</ul>
</div>
</div>
 
<div class="collapse-box">
<h5 class="collapse-title"> My Job Posts <a href="#MyAds" data-toggle="collapse" class="pull-right"><i class="fa fa-angle-down"></i></a></h5>
<div class="panel-collapse collapse in" id="MyAds">
<ul class="acc-list">
<li><a href="emp-upload.php"><i class="icon-th-thumb"></i> Uploads<span class="badge"><?= $no; ?></span> </a></li>
<li><a href="applicants.php"><i class="icon-docs"></i> Applications <span class="badge"></span> </a></li>
<!--li><a href="account-saved-search.html"><i class="icon-star-circled"></i> Saved search <span class="badge">42</span> </a></li>
<li><a href="account-archived-ads.html"><i class="icon-folder-close"></i> Archived ads <span class="badge">42</span></a></li>
<li><a href="account-pending-approval-ads.html"><i class="icon-hourglass"></i> Pending approval <span class="badge">42</span></a></li-->
</ul>
</div>
</div>
 
<div class="collapse-box">
<h5 class="collapse-title"> Terminate Account <a href="#TerminateAccount" data-toggle="collapse" class="pull-right"><i class="fa fa-angle-down"></i></a></h5>
<div class="panel-collapse collapse in" id="TerminateAccount">
<ul class="acc-list">
<li><a href="account-close.html"><i class="icon-cancel-circled "></i> Close account </a></li>
</ul>
</div>
</div>
 
</div>
</div>
 
</aside>