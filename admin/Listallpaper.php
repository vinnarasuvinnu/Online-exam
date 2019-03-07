


<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Timer Agency Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="plugins/ionicons/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="plugins/animate-css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="plugins/slider/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="plugins/facncybox/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="css/style.css">        <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/form-validation/jquery.validate.min.js"></script>
    <script src="plugins/facncybox/jquery.fancybox.js"></script>
<script src="plugins/wow-js/wow.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.19/api/fnReloadAjax.js"></script>
    <!-- slider js -->
        <script src="plugins/owl-carousel/owl.carousel.min.js"></script>

    <script src="plugins/slider/slider.js"></script>
    <script type="text/javascript">
    function edit(id){
        var val=$('#q'+id).text();
        $('#ename').val(val);
        $('#eid').val(id);

        $('#myModal').modal('show');

    }
    function del(id){

    $(document).ready(function(event){

        $.ajax({
            type:'POST',
            url:'qdelete.php',
            data:'id='+id,
            success:function(data){

                alert(data);
                callme();
            }
        });

        });
         
    }
function callme(){
            var table=$('#example').DataTable();

            table.clear().draw();
    event.preventDefault(); // Prevent the form from submitting via the browser
    var val=$('#sel').val();
    $.ajax({
      type: 'POST',
      url: 'fullquest.php',
      data: 'val='+val,
    }).done(function(data) {
        data=JSON.parse(data);
        console.log(data);
    $.each(data, function(key,value) {



            table.row.add($(
    '<tr>' +
    '<td id="q'+value.q_id+'">'+value.c_name+'</td>' +
  
   '<td><input type="submit" value="Edit" class="btn btn-success" id="'+value.q_id+'" onclick="edit(this.id)"></td>' +

   '<td><input type="button" value="Delete" class="btn btn-warning" id="'+value.q_id+'" onclick="del(this.id)"></td>' +



    '</tr>'
)).draw(false);
        

    });


    }).fail(function(data) {
        alert(data);
    });


}




    $(document).ready(function(){
        var table=$('#example').DataTable();
        $('#sel').change(function(event) {
            table.clear().draw();
    event.preventDefault(); // Prevent the form from submitting via the browser
    var val=$('#sel').val();
    $.ajax({
      type: 'POST',
      url: 'fullquest.php',
      data: 'val='+val,
    }).done(function(data) {
        data=JSON.parse(data);
        console.log(data);
    $.each(data, function(key,value) {



            table.row.add($(
    '<tr>' +
    '<td id="q'+value.q_id+'">'+value.c_name+'</td>' +
  
   '<td><input type="submit" value="Edit" class="btn btn-success" id="'+value.q_id+'" onclick="edit(this.id)"></td>' +

   '<td><input type="button" value="Delete" class="btn btn-warning" id="'+value.q_id+'" onclick="del(this.id)"></td>' +



    '</tr>'
)).draw(false);
        

    });


    }).fail(function(data) {
        alert(data);
    });
  });
        $("#cat1").submit(function(e) {


    var form = $(this);
    var url = form.attr('action');

    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data);
                       $('#cat1')[0].reset();
                       $('#myModal').modal('hide');

               callme();
           }
         });

    e.preventDefault(); // avoid to execute the actual submit of the form.
});





    });
</script>
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
       <?php
       include('nav.php');
       ?>

<!--
==================================================
Slider Section Start
================================================== -->

<div class="container" style="margin-top: 150px;" id="main">


                      
                    <!-- end row -->
                        <div class="row" >
                            <div class="col-lg-6 col-sm-6 ">
                                <h3 class="text-center">Select your Question Catogery</h3>

                            <select class="form-control" style="height: 40px;" id="sel">
                                <option>Select your catogery</option>
                                <?php 
                                include('db.php');
                                $q1="select * from catogery";
                                $res=mysqli_query($db,$q1);
                                while($row=mysqli_fetch_array($res)){
                                    ?>
                                <option style="font-size: 15px;" value="<?php echo $row['c_id']; ?>"><?php echo $row['c_name']; ?></option>
                                <?php
                            }
                            ?>
                            </select>
                        </div>
                            <div class="col-lg-6 col-sm-6">
                                <img src="images/cat.gif" class="img-responsive" >
                            </div>
                        </div>
                        <br>
        <div class="row">
                        <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Question paper name</th>
                <th>Action 1</th>
                <th>Action 2</th>
              
            </tr>
        </thead>
        <tbody>
          
      
           
            
        </tbody>
        
    </table>





                                                    </div>

                                            </div>

                                            </div>

<!--
==================================================
About Section Start
================================================== -->
 <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer" style="position: relative;">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Curve</a>. <br> 
                            <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

    <!-- Template Javascript Files
    ================================================== -->
    <!-- jquery -->
    <!-- Form Validation -->
   
    <!-- owl carouserl js -->
    <!-- bootstrap js -->
    <!-- wow js -->
    <!-- slider js -->
    <!-- Fancybox -->
    <!-- template main js -->
    <script src="js/main.js"></script>
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Question paper name</h4>
      </div>
      <div class="modal-body">
        <form action="editqp.php" method="POST" id="cat1" class="form-horizontal" style="background-color: #fff"  enctype="multipart/form-data">    
                        <h1 class="text-center">Edit question paper</h1>
                                        <div class="text-center">
                                                <label>Question paper name</label>
                                                <input type="text" name="qname" class="form-control" id="ename"> 
                                                <label>Catogery</label>

                                                <select class="form-control" name="paper" style="height: 30px;" id="ecat">
                                                    <?php
                                                    include("db.php");
                                                    $q1="select * from catogery";
                                                    $res=mysqli_query($db,$q1);
                                                    while($row=mysqli_fetch_array($res)){

                                                        ?>
                                                    <option value="<?php echo $row['c_id']; ?>"><?php echo $row['c_name']; ?></option>
                                                    <?php
                                                }
                                                ?>
                                                </select>
                                                </div>
                                                    
                                                        <br>
                                                        <input type="hidden" name="eid" value="" id="eid">
                                                            <div class="text-center">       
                                                                <input type="submit" name='submit' value="Edit " class="btn btn-primary" >
                                                            </div>
                                                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
    </body>
</html>