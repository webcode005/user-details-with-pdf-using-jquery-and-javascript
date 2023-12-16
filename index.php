<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="ZVH0Jn7VTFgbRAjiXCbQYTQJW1BA2pQR48tNZul8">
    <link href="images/favicon.ico" rel="shortcut icon">
    <title>FCI HRMS</title>
    <!-- Base Styles -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/chart.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Theme Styles -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/gs.min.css">
    <link rel="stylesheet" href="css/gs-skins.min.css">
    <!-- <link rel="stylesheet" href="css/datepicker3.css"> -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="css/core-hr-module/core-hr.css"> -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- <link rel="stylesheet" href="css/calendar.css"> -->

    <!-- Fontawesome -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/la-module-css/lta-style.css"> -->
    <link rel="stylesheet" href="css/kendo.default-v2.min.css">
    <link rel="stylesheet" href="css/mainDashboard.css">

    <style>
        i.fa-question-circle {
            display: none;
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <script src="customjs/dashboardTheme.js"></script>
    <div class="wrapper">
        <style>
            a.main_logo {
                display: flex;
                align-items: center;
            }
        </style>

        <!-- New loader -->
        <div class="theLoader">
            <div class="draw"><img src="images/letter_img.png"></div>

        </div>

        <!-- new Header -->
        <header class="main-header">
            <!--<a href="#" class="logo" > <span class="logo-mini"><b>KHive</b></span> <span class="logo-lg"><b>KloudHive</b></span> </a>-->
            <nav class="navbar navbar-static-top">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-6">
                        <div id="Kellton_logo">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                            <a href="#" class="main_logo">
                <img src="https://ers-hrmsfci.in/wp-content/uploads/2023/12/fci_logo.svg" class="img-responsive" width="90px;" alt="" />
                <span class="hidden-lg">FCI HRMS</span>
                <span class="visible-lg">FCI HUMAN RESOURCE MANAGEMENT SYSTEM</span>
              </a>
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-6">
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <li class="theme-controls hidden-sm hidden-xs">

                                    <a href="#" class="small-font" data-fontsize="font-sm">Aa</a>
                                    <a href="#" class="default-font active" data-fontsize="font-md">Aa</a>
                                    <a href="#" class="large-font" data-fontsize="font-lg">Aa</a>
                                </li>


                                <!-- User Account: style can be found in dropdown.less -->
                                <!-- <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle profile-icon " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="profileimg">Hi,<span class="name">Rahul</span><img src="images/profile-icon.png" alt="" onerror="this.src='../images/profile-icon.png'" /></span> <span class=""><i class="fa fa-angle-down"></i></span></a>
                 
                </li> -->
                                <!--
                  <li class="login-profile">
                   <div> <span> English </span>|<span> Hindi </span> </div>
                   <div class="hidden-xs"> Garige Srisylam (GS) </div>
                  </li>
                  -->
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="content-wrapper ml-0">
            <!-- =========== Content start here==================================== -->

            <style>
                .k-widget.form-control .k-input {
                    padding: .5rem .75rem;
                    height: 48px;
                }

                .k-pdf-export .max-height-table {
                    max-height: none;
                }

                .k-pdf-export a,
                .k-pdf-export .profile-image {
                    border: none !important;
                }

                .pdf-heading {
                    text-align: center;
                    font-size: 20px;
                    display: none;
                }

                .k-pdf-export .pdf-heading {
                    text-align: center;
                    font-size: 20px;
                    display: block;
                }
            </style>
            <script src="js/kendo.custom.js"></script>


            <section class="content" id="myCanvas">
                <div class="box no-border">

                    <div class="my-profile-wrapper cardex-form pd-15">
                        <div class="outside_border" data-name="ER Sheet">
                            <div class="profile-box mt-15">

                                <form action="#" id="role-master-search" class="search-filters clearfix">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3">
                                            <div class="form-group tool-tip">
                                                <label for="">Employee ID</label>
                                                <input type="text" id="emp_number" name="employee_name" class="form-control">
                                                <input type="hidden" value="" id="manager-id">
                                            </div>
                                            <div></div>
                                            <span class="text-danger mt-5 show">
                                              <p id="employee-id-err"></p>
                                            </span>
                                        </div>
                                        <div class="col-sm-12 col-md-3">
                                            <div class="form-group">
                                                <div class="action-btns">
                                                    <button type="button" onclick="return validateFilter();" class="btn btn-primary">Get Results</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div id="table_main_employees" class="t_emp" style="display:none">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="name-seprator" data-name="Employees"></div>
                                        </div>
                                    </div>

                                    <!-- table Transfer Profile  starts -->

                                    <div class="data-table-main mt-15 table-responsive max-height-table" style="max-height: 200px; overflow: auto;">
                                        <table id="emp_table" class="table table-striped display data-table-main-in">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Employee Name</th>
                                                    <th>Employee Id</th>
                                                    <th>Designation</th>
                                                    <th>place of posting</th>
                                                    <th>Action</th>
                                                </tr>
                                                <!-- <tr id="row-1">   
                                                       <td>1</td>   
                                                       <td>M.D Danish Siddiqui</td> 
                                                       <td>178721</td>  
                                                       <td>Assistant Grade - III</td>  
                                                       <td>Hazaribagh</td>  
                                                       <td><a class="btn posh-remove" onclick="return getData(13954)" data-row="1"><i class="fa fa-eye"></i></a></td>
                                                    </tr> -->
                                            </thead>
                                            <tbody>
                                                 </tbody>
                                        </table>
                                    </div>


                                </div>



                                <hr>

                                <div id="download-er">
                                    <h4 class="pdf-heading">ER Sheet</h4>
                                    <div class="tab_employee" id="tab_name" style="display:none">
                                        <div class="last_updated" style="text-align: right"><span class="etitle">Last Updated on: </span> <span id="last_updated" class="oeid"></span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="name-seprator"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="box no-border">
                                                <div class="row box-body profile-block">
                                                    <div class="col-sm-12 col-md-2 mt-15 margin-r-0 cardex-image-section text-center">
                                                        <div class=" profile-img_wrap ">
                                                            <div class="profile-image">

                                                                <img src="https://ers-hrmsfci.in/wp-content/uploads/2023/12/danish1.jpg" class="img-responsive" id="src_image" alt="profile image">
                                                                <div class="edit-profile-btn right-0">
                                                                    <div class="img-upload">
                                                                        <div class="upload-inner">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-9 cardex-filter-section  mbottom mt-15">
                                                        <div id="employee_details"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Transfer Profile starts -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="name-seprator" data-name="Transfer Profile"></div>
                                            </div>
                                        </div>
                                        <!-- table Transfer Profile  starts -->
                                        <div class="data-table-main mt-15 table-responsive max-height-table">
                                            <table id="transfer" class="table table-striped display data-table-main-in">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Office</th>
                                                        <th>Designation</th>
                                                        <th>From Date</th>
                                                        <th>To Date</th>
                                                        <th>Joining Time From Date</th>
                                                        <th>Joining Time Till Date</th>
                                                        <th>Zone</th>
                                                        <th>Region</th>
                                                    </tr>
                                                </thead>
                                              
                                                <tbody>
                                                        </tbody>
                                            </table>
                                        </div>
                                        <!-- table ends -->
                                        <!-- Transfer Profile ends -->

                                        <!-- Career Growth and Succession Profile starts -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="name-seprator" data-name="Career Growth and Succession Profile"></div>
                                            </div>
                                        </div>
                                        <!-- table Promotion and Fixation Profile  starts -->
                                        <div class="data-table-main mt-15 table-responsive max-height-table">
                                            <table id="career" class="table table-striped display data-table-main-in">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Office</th>
                                                        <th>Previous Designation</th>
                                                        <th>New Designation</th>
                                                        <th>Date of Appointment to New Post</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- table ends -->
                                        <!-- Career Growth and Succession Profile ends -->

                                        <!-- Competency And Learning Profile starts -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="name-seprator" data-name="Competency And Learning Profile"></div>
                                            </div>
                                        </div>
                                        <!-- table Competency And Learning Profile  starts -->
                                        <div class="data-table-main mt-15 table-responsive max-height-table">
                                            <table id="learning" class="table table-striped display data-table-main-in">
                                                <thead>
                                                    <tr>
                                                        <th>S.No</th>
                                                        <th>Competency Gap</th>
                                                        <th>Course Attended</th>
                                                        <th>Date of Training</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    

                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="clearfix mt-15  hide_in_pdf">
                                            <a onclick="exportPdf();" class="btn  btn-primary pull-right">Download</a>
                                        </div>

                                    </div>
                                    <!-- table ends -->
                                    <!-- Competency And Learning Profile ends -->


                                    <div>



                                    </div>

                                </div>



                            </div>
                        </div>

                        <div class="no_data" id="no-data" style="display:none">
                            <h2 id="abc" class="text-center">No Data Found</h2>
                        </div>

            </section>

            <script>
                var count = 1;
                var career = 1;
                var learn = 1;
                var html = '';

                function getData(id) {
                    var count = 1;
                    var career = 1;
                    var learn = 1;

                    var employee_id = id;

                    console.log(employee_id);

                    if (employee_id != "") {
                        $('#tab_name').show();
                        $("#transfer tbody").empty();
                        $("#career tbody").empty();
                        $("#learning tbody").empty();
                        $.ajax({
                            url: 'employee',
                            data: {
                                "employee_id": employee_id
                            },
                            type: "get",
                            beforeSend: function() {
                                showLoader();
                            },
                             
                            success: function(data) {
                                    //console.log(data);
                                    

                                     // for employee personal details

                                     var emps = 1;
                                     const obje = JSON.parse(data);

                                    // console.log(obje);
                                    
                                
                                                        var emp = '';


                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle">Employee Name:</span> <span class="enumber" id="employee_name">' + obje['emp_details'].emp_name + '</span></div>';

                                
                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle">Division:</span> <span id="division" class="edivision">' + obje['emp_details'].Division + '</span></div>';
                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle">Section:</span> <span id="section" class="esection">' + obje['emp_details'].Section + '</span>';
                                                        emp += '</div>';
                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle">Cadre:</span> <span id="cadre" class="ecadre">' + obje['emp_details'].Cadre + '</span></div>';
                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle">Category:</span> <span id="category" class="ecadre">' + obje['emp_details'].Category + '</span></div>';
                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle">DOB: </span><span id="dob" class="oeid">' + obje['emp_details'].DOB + '</span>';
                                                        emp += '</div>';
                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle">Mode of joining :</span> <span id="mode_of_joining" class="emode">' + obje['emp_details'].Mode_of_joining + '</span>';
                                                        emp += '</div>';
                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle">Official Email ID : </span> <span id="email_id" class="oeid">' + obje['emp_details'].Official_Email_ID + '</span>';
                                                        emp += '</div>';
                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle">Designation:</span> <span id="designation" class="edesignation">' + obje['emp_details'].Designation + '</span>';
                                                        emp += '</div>';
                                                        emp += '<div class="col-md-4 mbottom"><span class="etitle"> Present Place Of Posting: </span> <span id="pre_posting" class="oeid">' + obje['emp_details'].Present_Place_Of_Posting + '</span>';
                                                        emp += '</div>';

                                        $("#employee_details").append(emp);

                                                var img_name = obje['emp_details'].profile_pic;
                                            
                                                var image_path = 'images/' + img_name;
                                                $('#src_image').attr('src', image_path);
                                       
                                    // for transfer details

                                    var emps = 1;
                                    const objt = JSON.parse(data);

                                   // console.log(objt);
                                    
                                        var emp = '';
                                        emp += '<tr id=row-' + emps + '>';
                                        emp += '    <td>' + emps + '</td>';
                                        emp += '    <td>' + objt['transfer'].Office + '</td>';
                                        emp += '    <td>' + objt['transfer'].Designation + '</td>';
                                        emp += '    <td>' + objt['transfer'].From_Date + '</td>';
                                        emp += '    <td>' + objt['transfer'].To_Date + '</td>';
                                        emp += '    <td>' + objt['transfer'].Joining_Time_From_Date + '</td>';                                        
                                        emp += '    <td>' + objt['transfer'].Joining_Time_Till_Date + '</td>';                                        
                                        emp += '    <td>' + objt['transfer'].Zone + '</td>';                                        
                                        emp += '    <td>' + objt['transfer'].Region + '</td>';

                                        // emp += '    <td><a class="btn posh-remove"  onclick="return getData(' + objt.Employee_Id + ')" data-row="' + emps + '"><i class="fa fa-eye"></i></a></td>';

                                        emp += '</tr>';
                                        $("#transfer tbody").append(emp);

                                       

                                    // career details

                                    var emps = 1;
                                    const objc = JSON.parse(data);

                                   // console.log(objc);
                                    
                                        var emp = '';
                                        emp += '<tr id=row-' + emps + '>';
                                        emp += '    <td>' + emps + '</td>';
                                        emp += '    <td>' + objc['career'].Office + '</td>';
                                        emp += '    <td>' + objc['career'].Previous_Designation + '</td>';
                                        emp += '    <td>' + objc['career'].New_Designation + '</td>';
                                        emp += '    <td>' + objc['career'].Date_of_Appointment_to_New_Post + '</td>';
                           

                                        // emp += '    <td><a class="btn posh-remove"  onclick="return getData(' + objt.Employee_Id + ')" data-row="' + emps + '"><i class="fa fa-eye"></i></a></td>';

                                        emp += '</tr>';
                                        $("#career tbody").append(emp);

                                       
                                    

                                    // learning details

                                    var emps = 1;
                                    const objl = JSON.parse(data);

                                   // console.log(objl);
                                    
                                        var emp = '';
                                        emp += '<tr id=row-' + emps + '>';
                                        emp += '    <td>' + emps + '</td>';
                                        emp += '    <td>' + objl['learning'].Competency_Gap + '</td>';
                                        emp += '    <td>' + objl['learning'].Course_Attended + '</td>';
                                        emp += '    <td>' + objl['learning'].Date_of_Training + '</td>';
                                        
                                        emp += '</tr>';
                                        $("#learning tbody").append(emp);

                                  

                                }

                                ,
                            complete: function() {
                                hideLoader();
                            },

                        });

                        var body = $("html, body");
                        var offset_top = $(".tab_employee").offset().top;
                        body.animate({
                            scrollTop: offset_top
                        }, 500, 'linear');

                    } else {
                        $('#tab_name').hide();

                    }
                }

                var emps = 1;

                function validateFilter() {
                    $('#tab_name').hide();

                    if ($('#emp_number').val() == '' || $('#emp_number').val().length < 3) {
                        $("#employee-id-err").empty().append('Please Enter employee Name  with atleast three Characters');
                        $('#table_main_employees').hide();

                        return false;
                    } else {
                        $('#table_main_employees').show();
                        $("#employee-id-err").empty();
                        $('#no-data').hide();
                        $("#emp_table tbody").empty();
                        var emps = 1;
                        $.ajax({
                            url: 'employee-details',
                            data: {
                                "employee_name": $('#emp_number').val()
                            },
                            type: "get",
                            beforeSend: function() {
                                showLoader();
                            },
                            success: function(data) {
                                //console.log(data);
                                if (data != "") {
                                    $('#no-data').hide();

                                    //console.log(data);

                                    const obj = JSON.parse(data);
                                    
                                        var emp = '';
                                        emp += '<tr id=row-' + emps + '>';
                                        emp += '    <td>' + emps + '</td>';
                                        emp += '    <td>' + obj.Employee_Name + '</td>';
                                        emp += '    <td>' + obj.Employee_Id + '</td>';
                                        emp += '    <td>' + obj.Designation + '</td>';
                                        emp += '    <td>' + obj.Place_of_Posting + '</td>';
                                        emp += '    <td><a class="btn posh-remove"  onclick="return getData(' + obj.Employee_Id + ')" data-row="' + emps + '"><i class="fa fa-eye"></i></a></td>';

                                        emp += '</tr>';
                                        $("#emp_table tbody").append(emp);
        
                                } else {
                                    $('#no-data').show();
                                    $('#table_main_employees').hide();
                                }
                            },
                            complete: function() {
                                hideLoader();
                            },

                        });
                    }
                }


                function exportPdf() {
                    kendo.drawing
                        .drawDOM("#download-er", {
                            paperSize: "A4",
                            margin: {
                                top: "0.5cm",
                                bottom: "1cm",
                                right: "0.5cm",
                                left: "0.5cm"
                            },
                            scale: 0.7,
                            height: 500,
                            landscape: true,
                        })
                        .then(function(group) {
                            kendo.drawing.pdf.saveAs(group, "ProfilePortfolio.pdf")
                        });
                }
            </script>

            </div>
            <footer style="margin-left:0px;" class="main-footer-static-inner main-footer "> Copyright © 2020 Food Corporation of India | Powered by Konnect</footer>


            <!-- =========== wrapper end here==================================== -->
            </div>

            <script src="js/bootstrap.min.js"></script>
            <!-- <script src="js/bootstrap-datepicker.js"></script> -->
            <!-- DataTables -->
            <script src="js/jquery.dataTables.min.js"></script>
            <script src="js/dataTables.bootstrap.min.js"></script>
            <script src="js/app.min.js"></script>
            <script src="js/select2.full.min.js"></script>
            <script src="js/scripts.js"></script>
            <!-- <script src="js/employee-relation.js"></script> -->
            <script src="js/dataTables.buttons.min.js"></script>
            <script src="js/buttons.flash.min.js"></script>
            <script src="js/jszip.min.js"></script>
            <!-- <script src="js/pdfmake.min.js"></script> -->
            <script src="js/buttons.print.min.js"></script>
            <script src="js/buttons.html5.min.js"></script>
            <script src="js/vfs_fonts.js"></script>
            <script src="js/kendo.custom.js"></script>
            <script src="js/kendo.all.min.js"></script>


            <script src="js/jquery-validate/jquery.validate.js"></script>
            <!-- <script src="js/fullcalendar/moment.min.js"></script> -->
            <!-- <script src="js/fullcalendar/fullcalendar.min.js"></script> -->
            <!-- <script src="js/calendar.js"></script> -->
            <script src="js/kendo.all.min.js"></script>
</body>

</html>
