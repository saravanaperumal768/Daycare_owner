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
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total courses</div>
                                            <div class="widget-subheading">Courses</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <?php
                                            $sql = "select *from register left join studnet_insert on register.rollno=studnet_insert.id";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                            ?>                                    
                                            <div class="widget-numbers text-white"><span><?php echo $result->num_rows; ?></span></div>
                                            <?php } else {?>
                                            <div class="widget-numbers text-white"><span>0</span></div>
                                        <?php } ?>

                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Students</div>
                                            <div class="widget-subheading">No of students</div>
                                        </div>

                                          <?php
                                        $sql = "SELECT * FROM register";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                        ?>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo $result->num_rows; ?></span></div>
                                        </div>
                                        <?php } else {?>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>0</span></div>
                                        </div>
                                           <?php } ?> 

                                      
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Sucessful selected</div>
                                            <div class="widget-subheading">Placed Orders</div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            
                          

                        
                       <!--  <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Students Details
                                        
                                    </div>
        <div class="table-responsive">
            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                <tr>
                    <th class="text-center">S.No</th>
                    <th class="text-center">students Name</th>
                    <th class="text-center">RollNumber</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Course</th>
                    <th class="text-center">Timings</th>
                </tr>
                 <?php
                 $sql = "SELECT rollno,name,course_name,classes FROM register inner join studnet_insert register.id=studnet_insert.id";
                                        $result = $conn->query($sql);
echo $sql;
                                        ?>
                                            </thead> -->
                <tbody>
                </tbody>
            </table>
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
<script type="text/javascript" src="assets/scripts/main.js"></script></body>
</html>
