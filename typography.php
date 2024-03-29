<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">
<?php
include "head.php";
?>
<body>
	<!-- header -->
	<?php
require "assets/header.php";
	?>
	<!-- //header -->
	<!-- banner -->
	<?php
require "assets/carosol.php";
	?>
	<!-- //banner -->
			<!-- typography -->
    <section class="wthree-row pt-sm-3  pb-sm-5 pb-3">
        <div class="container py-sm-5 py-3">
            <!-- section title -->
				<h2 class="heading-agileinfo">Typo<span>graphy</span></h2>
            <!-- //section title -->
            <div class="pb-5 mt-md-5 typo-wthree">
                <h4 class="pt-4 pb-3">Flex</h4>
                <div class="d-flex p-2 bg-flex mb-1">I'm a flexbox container!</div>
                <div class="d-inline-flex p-2 bg-flex mb-1">I'm an inline flexbox container!</div>
                <h5 class="pt-4 pb-3">Flex row</h5>
                <div class="d-flex flex-row bg-flex">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Flex row-reverse</h5>
                <div class="d-flex flex-row-reverse bg-flex">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Flex column</h5>
                <div class="d-flex flex-column bg-flex">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Flex column-reverse</h5>
                <div class="d-flex flex-column-reverse bg-flex">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h4 class="pt-5 pb-3">Justify Content</h4>
                <h5 class="pt-4 pb-3">Justify Content Start</h5>
                <div class="d-flex justify-content-start bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Justify Content End</h5>
                <div class="d-flex justify-content-end bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Justify Content Center</h5>
                <div class="d-flex justify-content-center bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Justify Content Between</h5>
                <div class="d-flex justify-content-between bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h5 class="pt-4 pb-3">Justify Content Around</h5>
                <div class="d-flex justify-content-around bg-flex mb-3">
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 1</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 2</div>
                    <div class="p-2 bg-flex mb-1 bg-flex-item">Flex item 3</div>
                </div>
                <h4 class="pt-4 pb-3"> Align items</h4>
                <h5 class="pt-4 pb-3">Align Items Start</h5>

                <div class="d-flex align-items-start  bg-flex mb-3" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h5 class="pt-4 pb-3">Align Items End</h5>

                <div class="d-flex align-items-end  bg-flex mb-3" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h5 class="pt-4 pb-3">Align Items Center</h5>

                <div class="d-flex align-items-center  bg-flex mb-3" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h5 class="pt-4 pb-3">Align Items Baseline</h5>

                <div class="d-flex align-items-baseline  bg-flex mb-3" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h5 class="pt-4 pb-3">Align Items Strech</h5>

                <div class="d-flex align-items-stretch  bg-flex" style="height: 100px">
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                    <div class="p-2  bg-flex-item">Flex item</div>
                </div>
                <h4 class="mt-5 mb-3">Lists</h4>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="pt-4 pb-3">List Group</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5 class="pt-4 pb-3">Active items</h5>
                        <ul class="list-group">
                            <li class="list-group-item active">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col-md-6 my-3">
                        <h5 class="pt-4 pb-3">Disabled items</h5>
                        <ul class="list-group">
                            <li class="list-group-item disabled">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col-md-6 my-3">
                        <h5 class="pt-4 pb-3">Flush</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5 class="pt-4 pb-3">Contextual Classes</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
                            <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
                            <li class="list-group-item list-group-item-success">This is a success list group item</li>
                            <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
                            <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
                            <li class="list-group-item list-group-item-info">This is a info list group item</li>
                            <li class="list-group-item list-group-item-light">This is a light list group item</li>
                            <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
                        </ul>
                    </div>
                    <div class="col-md-6 mt-md-0 mt-4">
                        <h5 class="pt-4 pb-3">With Badges</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <h4 class="pt-4 pb-3 mt-sm-5 mt-3">Color</h4>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="my-4">Text color</h5>
                        <p class="text-primary mb-2">.text-primary</p>
                        <p class="text-secondary mb-2">.text-secondary</p>
                        <p class="text-success mb-2">.text-success</p>
                        <p class="text-danger mb-2">.text-danger</p>
                        <p class="text-warning mb-2">.text-warning</p>
                        <p class="text-info mb-2">.text-info</p>
                        <p class="text-light bg-dark mb-2">.text-light</p>
                        <p class="text-dark mb-2">.text-dark</p>
                        <p class="text-muted mb-2">.text-muted</p>
                        <p class="text-white bg-dark">.text-white</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="my-4">Anchors with the provided hover and focus states.</h5>
                        <p>
                            <a href="#" class="text-primary">Primary link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-secondary">Secondary link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-success">Success link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-danger">Danger link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-warning">Warning link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-info">Info link</a>
                        </p>
                        <p>
                            <a href="#" class="text-light bg-dark">Light link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-dark">Dark link</a>
                        </p>
                        <p class="mb-2">
                            <a href="#" class="text-muted">Muted link</a>
                        </p>
                        <p>
                            <a href="#" class="text-white bg-dark">White link</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //typo container -->
    </section>
    <!-- //typography -->


<!--footer-->
	<footer>
		<div class="container py-md-4 mt-md-3">
			<div class="row footer-top-w3layouts-agile py-5">
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3><span>About </span>Us</h3>
					</div>
					<div class="footer-text">
						<p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3><span>Latest </span>News</h3>
					</div>
					<ul class="footer_grid_list">
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque</a>
					</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed </a>
					</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque </a>
					</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed</a>
					</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>
						<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque </a>
					</li>
				</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3><span>Quick </span>Links</h3>
					</div>
					<nav class="border-line">
                        <ul class="nav flex-column">
                           <li>
                              <a href="index.php">Home </a>
                           </li>
                           <li>
                              <a href="about.php">About</a>
                           </li>
						   <li>
                              <a href="services.php">Services</a>
                           </li>
                           <li>
                              <a href="gallery.php">Gallery</a>
                           </li>
                           <li>
                              <a href="contact.php">Contact</a>
                           </li>
                        </ul>
                     </nav>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3><span>Subscribe </span>Us</h3>
					</div>
					<p>Vivamus magna justo, lacinia eget consectetur sed.</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<button class="btn1">
							<i class="far fa-envelope"></i>
						</button>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer-->
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-pinterest-p"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© 2018 Opsimathy. All Rights Reserved | Design by
					<a href="http://w3layouts.com/">W3layouts</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Opsimathy</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 <div class="agileits-w3layouts-info">
			<img src="images/g6.jpg" class="img-fluid" alt="" />
			<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. </p>
		</div>
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Modal -->
<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js ">
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>
</html>