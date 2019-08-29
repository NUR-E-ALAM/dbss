<!DOCTYPE html>
<html lang="en">
<?php
include "head.php";
   ?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php
include "partials/header.php";
    ?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php
include "partials/sidebar.php";
    ?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!-- page start-->
        <div class="row mt">
          <div class="col-sm-3">
            <section class="panel">
              <div class="panel-body">
                <a href="mail_compose.php" class="btn btn-compose">
                  <i class="fa fa-pencil"></i>  Compose Mail
                  </a>
                <ul class="nav nav-pills nav-stacked mail-nav">
                  <li class="active"><a href="inbox.php"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-theme pull-right inbox-notification">3</span></a></li>
                  <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                  <li><a href="#"> <i class="fa fa-exclamation-circle"></i> Important</a></li>
                  <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">8</span></a></a>
                  </li>
                  <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
                </ul>
              </div>
            </section>
            <section class="panel">
              <div class="panel-body">
                
                <a href="#"> + Add More</a>
                <div class="inbox-body text-center inbox-action">
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="javascript:;">
                      <i class="fa fa-power-off"></i>
                      </a>
                  </div>
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="javascript:;">
                      <i class="fa fa-cog"></i>
                      </a>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="col-sm-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h4 class="gen-case">
                    Compose Mail
                    <form action="#" class="pull-right mail-src-position">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Search Mail">
                      </div>
                    </form>
                  </h4>
              </header>
              <div class="panel-body">
               
                <div class="compose-mail">
                  <form role="form-horizontal" method="post">
                    <div class="form-group">
                      <label for="to" class="">To:</label>
                      <input type="text" tabindex="1" id="to" class="form-control">
                      <div class="compose-options">
                        <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                        <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                      </div>
                    </div>
                    <div class="form-group hidden">
                      <label for="cc" class="">Cc:</label>
                      <input type="text" tabindex="2" id="cc" class="form-control">
                    </div>
                    <div class="form-group hidden">
                      <label for="bcc" class="">Bcc:</label>
                      <input type="text" tabindex="2" id="bcc" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="subject" class="">Subject:</label>
                      <input type="text" tabindex="1" id="subject" class="form-control">
                    </div>
                    <div class="compose-editor">
                      <textarea class="wysihtml5 form-control" rows="9"></textarea>
                      <input type="file" class="default">
                    </div>
                    <div class="compose-btn">
                      <button class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                      <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                      <button class="btn btn-sm">Draft</button>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="mail_compose.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript" src="lib/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="lib/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

  <script type="text/javascript">
    //wysihtml5 start

    $('.wysihtml5').wysihtml5();

    //wysihtml5 end
  </script>
</body>

</html>
