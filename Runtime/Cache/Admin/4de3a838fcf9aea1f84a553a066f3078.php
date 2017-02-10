<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>SimpliQ - Flat & Responsive Bootstrap Admin Template</title>
	<meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template." />
	<meta name="author" content="Łukasz Holeczek" />
	<meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link href="<?php echo (ADMIN_CSS_URL); ?>bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo (ADMIN_CSS_URL); ?>bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo (ADMIN_CSS_URL); ?>style.min.css" rel="stylesheet" />
	<link href="<?php echo (ADMIN_CSS_URL); ?>style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo (ADMIN_CSS_URL); ?>retina.css" rel="stylesheet" />
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="<?php echo (ADMIN_CSS_URL); ?>ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="<?php echo (ADMIN_CSS_URL); ?>ie9.css" rel="stylesheet">
	<![endif]-->
	
	<!-- start: Favicon and Touch Icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo (ADMIN_ICO_URL); ?>apple-touch-icon-144-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo (ADMIN_ICO_URL); ?>apple-touch-icon-114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo (ADMIN_ICO_URL); ?>apple-touch-icon-72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo (ADMIN_ICO_URL); ?>apple-touch-icon-57-precomposed.png" />
	<link rel="shortcut icon" href="<?php echo (ADMIN_ICO_URL); ?>favicon.png" />
	<!-- end: Favicon and Touch Icons -->	
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a id="main-menu-toggle" class="hidden-phone open"><i class="icon-reorder"></i></a>		
				<div class="row-fluid">
				<a class="brand span2" href="index.html"><span>SimpliQ</span></a>
				</div>		
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">Transaction was canceled</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li>
									<span class="dropdown-menu-title">You have 17 tasks in progress</span>
                            	</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressBlue">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressYellow">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Django Project For Google</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressRed">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">SEO for new sites</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressGreen">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">New blog posts</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressPink">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li>
									<span class="dropdown-menu-title">You have 9 messages</span>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (ADMIN_IMG_URL); ?>avatar.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Łukasz Holeczek
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (ADMIN_IMG_URL); ?>avatar2.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Megan Abott
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (ADMIN_IMG_URL); ?>avatar3.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Kate Ross
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (ADMIN_IMG_URL); ?>avatar4.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Julie Blank
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo (ADMIN_IMG_URL); ?>avatar5.jpg" alt="Avatar" /></span>
										<span class="header">
											<span class="from">
										    	Jane Sanders
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="icon-wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn account dropdown-toggle" data-toggle="dropdown" href="#">
								<div class="avatar"><img src="<?php echo (ADMIN_IMG_URL); ?>avatar.jpg" alt="Avatar" /></div>
								<div class="user">
									<span class="hello">Welcome!</span>
									<span class="name">Łukasz Holeczek</span>
								</div>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
									
								</li>
								<li><a href="#"><i class="icon-user"></i> Profile</a></li>
								<li><a href="#"><i class="icon-cog"></i> Settings</a></li>
								<li><a href="#"><i class="icon-envelope"></i> Messages</a></li>
								<li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				
				<div class="row-fluid actions">
													
					<input type="text" class="search span12" placeholder="..." />
				
				</div>	
				
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
						<li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Example Pages</span> <span class="label">3</span></a>
							<ul>
								<li><a class="submenu" href="infrastructure.html"><i class="icon-hdd"></i><span class="hidden-tablet"> Infrastructure</span></a></li>
								<li><a class="submenu" href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
								<li><a class="submenu" href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
							</ul>	
						</li>
						<li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
						<li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
						
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<div class="row-fluid">
				
				<div class="box">
					<div class="box-header">
						<h2><i class="icon-list-alt"></i><span class="break"></span>Chart with points</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div id="sincos" class="center" style="height:300px;"></div>
						<p id="hoverdata">Mouse position at (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>
					</div>
				</div>
				
				<div class="box">
					<div class="box-header">
						<h2><i class="icon-list-alt"></i><span class="break"></span>Flot</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div id="flotchart" class="center" style="height:300px"></div>
					</div>
				</div>
				
				<div class="box">
					<div class="box-header">
						<h2><i class="icon-list-alt"></i><span class="break"></span>Stack Example</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						 <div id="stackchart" class="center" style="height:300px;"></div>

						<p class="stackControls center">
							<input class="btn" type="button" value="With stacking" />
							<input class="btn" type="button" value="Without stacking" />
						</p>

						<p class="graphControls center">
							<input class="btn-primary" type="button" value="Bars" />
							<input class="btn-primary" type="button" value="Lines" />
							<input class="btn-primary" type="button" value="Lines with steps" />
						</p>
					</div>
				</div>

			</div><!--/row-->
			
			<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="icon-list-alt"></i><span class="break"></span>Pie</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
							<div id="piechart" style="height:300px"></div>
					</div>
				</div>
			
				<div class="box span6">
					<div class="box-header" data-original-title="">
						<h2><i class="icon-list-alt"></i><span class="break"></span>Donut</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						 <div id="donutchart" style="height: 300px;"></div>
					</div>
				</div>
			
			</div><!--/row-->
		
			<hr />
		
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-list-alt"></i><span class="break"></span>Realtime</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						 <div id="realtimechart" style="height:190px;"></div>
						 <p>You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
						 <p>Time between updates: <input id="updateInterval" type="text" value="" style="text-align: right; width:5em" /> milliseconds</p>
					</div>
				</div>
			</div><!--/row-->
			
			<div class="row-fluid">
				
				<div class="box span3 noMargin" ontablet="span6" ondesktop="span3">
					<div class="box-header">
						<h2><i class="icon-bar-chart"></i> Browsers</h2>
					</div>
					<div class="box-content">
						<div class="browserStat big">
							<img src="<?php echo (ADMIN_IMG_URL); ?>browser-chrome-big.png" alt="Chrome" />
							<span>34%</span>
						</div>
						<div class="browserStat big">
							<img src="<?php echo (ADMIN_IMG_URL); ?>browser-firefox-big.png" alt="Firefox" />
							<span>34%</span>
						</div>
						<div class="browserStat">
							<img src="<?php echo (ADMIN_IMG_URL); ?>browser-ie.png" alt="Internet Explorer" />
							<span>34%</span>
						</div>
						<div class="browserStat">
							<img src="<?php echo (ADMIN_IMG_URL); ?>browser-safari.png" alt="Safari" />
							<span>34%</span>
						</div>
						<div class="browserStat">
							<img src="<?php echo (ADMIN_IMG_URL); ?>browser-opera.png" alt="Opera" />
							<span>34%</span>
						</div>	
					</div>
				</div>
				
				<div class="box span4" ontablet="span6" ondesktop="span4">
					<div class="box-header">
						<h2><i class="icon-bar-chart"></i> Weekly Stat</h2>
					</div>
					<div class="box-content">
						<div class="sparkLineStats">

	                        <ul class="unstyled">
	                            
	                            <li><span class="sparkLineStats3"></span> 
	                                Pageviews: 
	                                <span class="number">781</span>
	                            </li>
	                            <li><span class="sparkLineStats4"></span>
	                                Pages / Visit: 
	                                <span class="number">2,19</span>
	                            </li>
	                            <li><span class="sparkLineStats5"></span>
	                                Avg. Visit Duration: 
	                                <span class="number">00:02:58</span>
	                            </li>
	                            <li><span class="sparkLineStats6"></span>
	                                Bounce Rate: <span class="number">59,83%</span>
	                            </li>
	                            <li><span class="sparkLineStats7"></span>
	                                % New Visits: 
	                                <span class="number">70,79%</span>
	                            </li>
	                            <li><span class="sparkLineStats8"></span>
	                                % Returning Visitor: 
	                                <span class="number">29,21%</span>
	                            </li>

	                        </ul>
	
	                    </div><!-- End .sparkStats -->
					</div>
				</div><!--/span-->
			
			</div>
			
			<div class="row-fluid">
				
				<div class="box span6" ontablet="span6" ondesktop="span6">
					<div class="box-header">
						<h2><i class="icon-facebook"></i> Facebook Fans</h2>
					</div>
					<div class="box-content">
						<div id="facebookChart" style="height:300px"></div>
					</div>
				</div><!--/span-->
				
				<div class="box span6" ontablet="span6" ondesktop="span6">
					<div class="box-header">
						<h2><i class="icon-twitter"></i> Twitter Followers</h2>
					</div>
					<div class="box-content">
						<div id="twitterChart" style="height:300px"></div>
					</div>
				</div><!--/span-->
			
			</div>
		
		
					
			</div>
			<!-- end: Content -->
				
				</div><!--/fluid-row-->
				
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<footer>
			<p>
				<span style="text-align:left;float:left">Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></span>
			</p>

		</footer>
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery-1.10.2.min.js"></script>
	<script src="<?php echo (ADMIN_JS_URL); ?>jquery-migrate-1.2.1.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery-ui-1.10.3.custom.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.ui.touch-punch.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>modernizr.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>bootstrap.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.cookie.js"></script>	
		<script src='<?php echo (ADMIN_JS_URL); ?>fullcalendar.min.js'></script>	
		<script src='<?php echo (ADMIN_JS_URL); ?>jquery.dataTables.min.js'></script>
		<script src="<?php echo (ADMIN_JS_URL); ?>excanvas.js"></script>
	<script src="<?php echo (ADMIN_JS_URL); ?>jquery.flot.js"></script>
	<script src="<?php echo (ADMIN_JS_URL); ?>jquery.flot.pie.js"></script>
	<script src="<?php echo (ADMIN_JS_URL); ?>jquery.flot.stack.js"></script>
	<script src="<?php echo (ADMIN_JS_URL); ?>jquery.flot.resize.min.js"></script>
	<script src="<?php echo (ADMIN_JS_URL); ?>jquery.flot.time.js"></script>
		
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.chosen.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.uniform.min.js"></script>		
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.cleditor.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.noty.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.elfinder.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.raty.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.iphone.toggle.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.uploadify-3.1.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.gritter.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.imagesloaded.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.masonry.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.knob.modified.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.sparkline.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>counter.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>raphael.2.1.0.min.js"></script>
	<script src="<?php echo (ADMIN_JS_URL); ?>justgage.1.0.1.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.autosize.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>retina.js"></script>
		<script src="<?php echo (ADMIN_JS_URL); ?>jquery.placeholder.min.js"></script>
		<script src="<?php echo (ADMIN_JS_URL); ?>wizard.min.js"></script>
		<script src="<?php echo (ADMIN_JS_URL); ?>core.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>charts.min.js"></script>	
		<script src="<?php echo (ADMIN_JS_URL); ?>custom.min.js"></script>
	<!-- end: JavaScript-->
	
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>