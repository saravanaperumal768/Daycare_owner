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
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="profile.php">My Profile</a>
                                            <a class="dropdown-item" href="logout.php">Logout</a>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        

             <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Our Dashboard</li>
                                <li>
                                    <a href="dashboard.php" class="mm-active">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                               <li class="app-sidebar__heading"></li>
                                    <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-pendrive"></i>
                                        Courses Section
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="add_courses.php">
                                                <i class="metismenu-icon"></i>
                                                Add Courses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="rmve_course.php">
                                                <i class="metismenu-icon">
                                                </i>Remove Courses
                                            </a>
                                        </li>
                                        <li>
                                            <a href="timingss.php">
                                                <i class="metismenu-icon">
                                                </i>Timings
                                            </a>
                                        </li>
                                       

                                <li class="app-sidebar__heading">Customer & Order Details</li>
                                <li>
                                    <a href="add_customer.php">
                                        <i class="metismenu-icon pe-7s-mouse">
                                        </i>List of students and their courses
                                    </a>
                                </li>
<!--                                 <li>
                                    <a href="customers.php">
                                        <i class="metismenu-icon pe-7s-eyedropper">
                                        </i>Our customers
                                    </a>
                                </li>
 -->
                                <li class="app-sidebar__heading">Logout</li>
                                <li>
                                    <a href="logout.php">
                                        <i class="metismenu-icon pe-7s-pendrive">
                                        </i>Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>     <div class="app-main__outer">
                    <div class="app-main__inner">
                       <h1 style="color: #3f6ad8; text-align: center;">Add Courses</h1>
                       <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        
        <form id="bannerinsertform" name="bannerinsertform" action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
  
        <div class="position-relative row form-group">
            <label for="examplePassword" class="col-sm-2 col-form-label">Courses</label>
            <div class="col-sm-10"><input name="course" id="course" placeholder="Enter course" type="text" class="form-control" required="">
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
                url: "category_insert.php",
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function(output,sv)
                {   
                if(output.trim()=="success")
                {
                    window.location = "rmve_course.php";
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



<script type="text/javascript" src="assets/scripts/main.js"></script></body>
</html>
