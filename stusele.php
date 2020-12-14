<?php
$base_dir = __DIR__;
$doc_root=preg_replace("!{$_SERVER['SCRIPT_NAME']}$!",'', $_SERVER['SCRIPT_FILENAME']);
include ($doc_root."/students/Database_Config.php");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Daycare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

<link href="./main.css" rel="stylesheet"></head>
<body>
    

                 <div class="app-main__outer">
                    <div class="app-main__inner">
                       <h1 style="color: #3f6ad8; text-align: center;">Select Courses and Timings</h1>
                       <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        
        <form id="bannerinsertform" name="bannerinsertform" action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        
        <div class="position-relative row form-group">
            <label for="examplePassword" class="col-sm-2 col-form-label">Course name</label>
            <div class="col-sm-10"> <select type="select" id="course_name" name="course_name" class="custom-select" required="">
                    <option value="">Select Course</option>    
            <?php
              $sql = "SELECT * FROM tbl_course";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  ?>                        
                        <option value="<?php echo $row["course_name"]; ?>"><?php echo $row["course_name"]; ?></option>
            <?php }} ?>            
                    </select>
            </div>
        </div>
       
        <div class="position-relative row form-group">
            <label for="examplePassword" class="col-sm-2 col-form-label">Classes</label>
            <div class="col-sm-10">   <select type="select" id="classes" name="classes" class="custom-select" required="">
                    <option value="Select Timings">Select Timings</option>    
                     <option value="09.30am to 10.30">09.30am to 10.30</option>    
                     <option value="11.00am to 12.00pm">11.00am to 12.00pm</option>    
                     <option value="01.00pm to 2.00pm">01.00pm to 2.00pm</option>  
                     <option value="2.30pm to 3.30pm">2.30pm to 3.30pm</option>    
                    </select>
                </div>
           
        </div>

            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2">
                    <input type="submit" name="submit" value="Add" class="btn btn-secondary" style="background-color: #3f6ad8;">
                </div>
            </div>
        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                 Daycare
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
        </div>
    </div>

<script src="js/ajax.js"></script>    
 <script>
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
     </script> 

<script>
    $('#bannerinsertform').on('submit', function(event) 
    {
                event.preventDefault();
                var formData = new FormData($(this)[0]);
                $.ajax
                ({
                type: "POST",
                url: "student_insert.php",
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function(output,sv)
                {   
                if(output.trim()=="success")
                {
                    alert("Product Added!!!");
                    // window.location = "rmve_product.php";
                    // window.location = "1.php";
                    url:"alcheck.php";

                }
                else
                {
                  alert(output);
                }
                },
                error: function(output)
                {
                  alert(output);
                }
                });
        });

</script>

<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
