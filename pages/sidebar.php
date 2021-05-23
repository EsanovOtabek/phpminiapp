<?
$uri=$_SERVER['REQUEST_URI'];
$pi="";$pa="";
switch ($uri) {
	case '/index.php':
		$pi="active";
		break;
	case '/addpage.php':
		$pa="active";
		break;
}

?>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse text-white bg-dark pt-5 p-2">
	<div class="position-sticky pt-3">
		<ul class="nav flex-column nav-pills mb-auto">
			<li class="nav-item">
				<a class="nav-link text-white <?=$pi?>" href="index.php">Home</a>
			</li>

			<li class="nav-item">
				<a class="nav-link text-white <?=$pa?>" href="addpage.php">Add page</a>
			</li>
			
			
		</ul>

		<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
			<span>Settings</span>
			<a class="link-secondary" href="#" aria-label="Add a new report">
				<span data-feather="plus-circle"></span>
			</a>
		</h6>
		<ul class="nav flex-column mb-2"><ul class="nav flex-column mb-2">
			<li class="nav-item">
	            <a class="nav-link text-white" href="logout.php">
	              Logout
	        	</a>
	        </li>
		</ul>
		</ul>
	</div>
</nav>