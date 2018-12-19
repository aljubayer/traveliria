<?php  
/**
* header.php, loading header files
*
* @package 			Codexin
* @subpackage 		Core
* @since 			1.0
*/

// Do not allow directly accessing this file.
defined( 'ABSPATH' ) OR die( esc_html__( 'This script cannot be accessed directly.', 'traveliria' ) );

?>

<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<?php  wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
<!-- 	<section>
		<div class="full-container">
			<div class="row">
				<div class="col s6 m2 l2 xl2">
					<a class="site-brand valign-wrapper">
						<span>Logo</span>
					</a>
				</div>
				<div class="col s6 m5 l5 xl5">
					<?php //codexin_menu( 'menu-primary-main' ); ?>
				</div>
				<div class="col s12 m5 l5 xl5">
					<?php //codexin_menu( 'menu-primary-center' ); ?>
				</div>
			</div>
		</div>
	</section>	 -->

   <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Logo</a> 
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>    
      <ul class="right hide-on-med-and-down">
        <li>
        	<a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i>
        	</a>
        	<ul id="dropdown1" class="dropdown-content">
				<li><a href="#!">one</a></li>
				<li><a href="#!">two</a></li>
				<li class="divider"></li>
				<li><a href="#!">three</a></li>
			</ul>
        </li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>     
    </div>
  </nav>



  <ul id="slide-out" class="sidenav">
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li>
    	<a class="waves-effect" href="#!">Third Link With Waves</a>
    </li>
    <li>
    	<a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i>
    	</a>
    	<ul id="dropdown1" class="dropdown-content">
			<li><a href="#!">one</a></li>
			<li><a href="#!">two</a></li>
			<li class="divider"></li>
			<li><a href="#!">three</a></li>
		</ul>
    </li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>    
  </ul>
  
    
  




