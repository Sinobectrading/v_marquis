<?php
$currentPage = 'track';
?>
<!DOCTYPE html>
<html class="no-js">
 
<body>
<?php include('include/header.php'); ?>   
<div id="trackpage">
<!-- 
================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Track Inventory</h2>
                    
                </div>
            </div>
        </div>
    </div>   
</section><!--/#page-header-->


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="block" id="contactinfo">
                   
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                         
                    </p>
                    <div class="contact-form">
                        <div class="col-lg-12 clearfix">
                            <div class="address wow fadeInLeft clearfix table-responsive" data-wow-duration="500ms" data-wow-delay=".3s">
                                <table id="track"  cellpadding="0" cellspacing="0" border="0" class="display table" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>WH</th>
                                            <th>Shape</th>
                                            <th>Size</th>
                                            <th>Length</th>
                                            <th>Alloy</th>
                                            <th>Die No.</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                        </div>
                                                 
                    </div>
                </div>
            </div>
            

             

        </div>
 
    </div>
<div class="visible-xs-block">
    <footer id="footerm">
    <div class="container">
        <div class="col-md-12">
            <p class="copyright">@Copyright Reserved By MARQUIS: <span>2015</span> . Design and Developed by <a href="mailto:alex.gao@sinometalresourcesinc.com">Marquis</a></p>
        </div>
    </div>
</footer> <!-- /#footer -->
</div>
</section>
</div>
<!-- 
================================================== 
    Call To Action Section Start
================================================== -->
 

<?php include('include/footer.php'); ?>   
<script type="text/javascript" src="assets/js/app.js"></script>   
<script type="text/javascript" language="javascript" >
$(document).ready(function() {
     var dataTable = $('#track').DataTable({
          "processing": true,
          // "columnDefs": [
          //           {className: "col-xs-12", "targets": '_all'}
          //         ],
          "serverSide": true,
          "ajax":{
               url :"trackbck.php", // json datasource
               type: "post",  // method  , by default get
               error: function(){  
                    $(".error").html("");
                    $("#inventory-grid").append('<tbody class="inventory-grid-error"><tr><th colspan="7">No data found in the server</th></tr></tbody>');
                    $("#inventory-grid_processing").css("display","none");
               }
          }            
    });

     $('.search-input-text').on( 'keyup click', function () {   // for text boxes
        var i =$(this).attr('data-column');  // getting column index
        var v =$(this).val();  // getting search input value
        dataTable.columns(i).search(v).draw();
    } );
                

    $('.search-input-select').on('change', function() {   // for select box
        var i =$(this).attr('data-column');  
        var v =$(this).val();  
        dataTable.columns(i).search(v).draw();
    });


});
</script>
 
</body>
</html>


