<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('inc/head'); ?>

  </head>
  <body class="skin-blue">
  <!-- wrapper di bawah footer -->
    <div class="wrapper">
      
      <?php $this->load->view('inc/head2'); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php $this->load->view('inc/sidebar'); ?>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <b>SELAMAT DATANG, <?php echo $nama; ?>!</b>
          </h1>
          <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol> -->
        </section>

        <!-- Main content -->

      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <!-- <b>Version</b> 2.0 -->
        </div>
        <strong>Copyright &copy; 2019 <a href="#"></a></strong>
      </footer>
    </div><!-- ./wrapper -->
    <?php $this->load->view('inc/footer', TRUE); ?>
  </body>
</html>