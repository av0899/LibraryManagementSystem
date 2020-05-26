<?php include 'includes/session1.php'; ?>
<?php 
  include 'includes/timezone.php'; 
  $today = date('Y-m-d');
  $year = date('Y');
  if(isset($_GET['year'])){
    $year = $_GET['year'];
  }
  $id=$_SESSION['admin'];
  $c2=0;
?>
<?php include 'includes/header1.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar1..php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php
                $sql = "SELECT * FROM books";
                $query = $conn->query($sql);

                echo "<h3>".$query->num_rows."</h3>";
              ?>

              <p>Total Books</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="book1.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <?php
                $sql = "SELECT sum(count) as count FROM borrow1 where faculty_id='$id'";
                $query = $conn->query($sql);
                $row=$query->fetch_assoc();
                $c1=$row['count'];
                if($c1==null) $c1=0;
                echo "<h3>".$c1."</h3>";
                //echo $row['count'];
              ?>

              <p>Total Copies of books borrowed</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="borrow1.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-xs-6">
        <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <?php
                $sql = "SELECT sum(counts) as count FROM return1 where faculty_id='$id'";
                $query = $conn->query($sql);
                $row=$query->fetch_assoc();

                $c2=$row['count'];
                if($c2==null) $c2=0;
                

                echo "<h3>".$c2."</h3>";
              ?>

              <p>Total copies of books returned</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="return1.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <?php
                $sql = "SELECT message as message from facultymsg where faculty_id1='$id'";
                $query = $conn->query($sql);
                $row=$query->fetch_assoc();
                $c1=$query->num_rows;
                if($c1==null) $c1=0 ;
                echo "<h3>".$c1."</h3>";
                //echo $row['count'];
              ?>

              <p>Messages From Library</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="facultymsg.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
     
     
        
        <?php include 'includes/scripts.php'; ?>  
              
<script>
$(function(){
  $('#select_year').change(function(){
    window.location.href = 'home.php?year='+$(this).val();
  });
});
</script>
</body>
</html>
