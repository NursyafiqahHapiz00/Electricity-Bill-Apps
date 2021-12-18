
	<!-- To create navigation bar header -->
	<nav class="navbar navbar-inverse navbar-fixed-top" > <!-- To create black navigation bar -->
		<div class="navbar-header" ><!-- Navigation bar place at top of the page -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" > <!-- To collapse or hide the admin navigation bar -->
				<span class="sr-only" >Toggle Navigation</span> <!-- Hide the elements of toggle navigation except for the screen readers -->
				<span class="icon-bar" ></span> <!-- To create icon at navigation bar -->
				<span class="icon-bar" ></span>
				<span class="icon-bar" ></span>
			</button>
				<a class="navbar-brand" href="index.php?dashboard">Bill</a> <!-- To appear the brand of company name -->
		</div>

		<!-- To create navigation top right -->
		<ul class="nav navbar-right top-nav" > <!-- To create admin elements at top right -->
			<li class="dropdown" > <!-- To create dropdown elements -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" >
					<i class="fa fa-gear" ></i> Setting <!-- To create icon user -->
				</a>

	<!-- To create dropdown menu admin top right -->
	<ul class="dropdown-menu" >
		<li>
			<a href="index.php?record_bills" >
				<i class="fa fa-fw fa-balance-scale" ></i> Record Bills <!-- To create profile dropdown menu -->
			</a>
		</li>

		<li>
			<a href="index.php?manage_bills" >
				<i class="fa fa-fw fa-money" ></i> Manage Bills <!-- To create products dropdown menu -->
			</a>
		</li>

		</ul>
	</li>
</ul>

	<!-- To create side navigation bar-->
	<div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse Starts -->
		<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

	<li>
		<img src="image/user_icon.png" class="imgc" width="100" height="100" > <!-- To create admin image at side bar -->		 		
	</li>

	<li>
		<a href="index.php?dashboard">
			<i class="fa fa-fw fa-dashboard"></i> Home
		</a>
	</li>
	
	<li>
		<a href="index.php?record_bills">
			<i class="fa fa-fw fa-balance-scale"></i> Record Bills
		</a>
	</li>
	
	<li>
		<a href="index.php?manage_bills">
			<i class="fa fa-fw fa-money"></i> Manage Bills
		</a>
	</li>

		</ul>
	</div>
</nav>

