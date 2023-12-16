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

                                    <a href="#" class="small-font" data-fontsize="font-sm">Aa1</a>
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
                                                    <th>place of posting 1</th>
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
                                                        <div class="col-md-4 mbottom"><span class="etitle">Employee Name:</span> <span class="enumber" id="employee_name">M.D. Danish Siddiqui</span>
                                                        </div>

                                                        <div class="col-md-4 mbottom"><span class="etitle">Division
                                            :</span> <span id="division" class="edivision">Dhanbad</span></div>
                                                        <div class="col-md-4 mbottom"><span class="etitle">Section
                                            :</span> <span id="section" class="esection">Other</span>
                                                        </div>
                                                        <div class="col-md-4 mbottom"><span class="etitle">Cadre
                                            :</span> <span id="cadre" class="ecadre">Depot</span></div>
                                                        <div class="col-md-4 mbottom"><span class="etitle">Category
                                            :</span> <span id="category" class="ecadre">CAT-III</span></div>
                                                        <div class="col-md-4 mbottom"><span class="etitle">DOB: </span><span id="dob" class="oeid">18/03/1995</span>
                                                        </div>

                                                        <div class="col-md-4 mbottom"><span class="etitle">Mode of joining :</span> <span id="mode_of_joining" class="emode">Direct Recruitment</span>
                                                        </div>

                                                        <div class="col-md-4 mbottom"><span class="etitle">Official Email ID : </span> <span id="email_id" class="oeid">danish.siddiqui490@gmail.com</span>
                                                        </div>

                                                        <div class="col-md-4 mbottom"><span class="etitle">Designation
                                            :</span> <span id="designation" class="edesignation">Assistant Grade-III</span>
                                                        </div>
                                                        <div class="col-md-4 mbottom"><span class="etitle"> Present Place Of Posting: </span> <span id="pre_posting" class="oeid">Hazaribagh</span>
                                                        </div>
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
                                                    <tr id="row-1">    <td>1</td>    <td>Bankura</td>    <td>Assistant Grade - III</td>    <td>26/06/2023</td>    <td>14/07/2023</td> <td> </td> <td></td> <td>East Zone</td> <td></td> <td></td>   <td><a class="btn posh-remove" onclick="return getData(13954)" data-row="1"><i class="fa fa-eye"></i></a></td></tr>
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
                                                        <th>Course Attended1</th>
                                                        <th>Date of Training</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>sd</td>
                                                        <td>dsdg</td>
                                                        <td>hhjhk</td>
                                                    </tr>

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
                                console.log(data);
                                    for (var i in data['employeeDetails']) {
                                        document.getElementById("employee_name").innerHTML = data['employeeDetails'][i].employee_name;
                                        document.getElementById("section").innerHTML = data['employeeDetails'][i].section_name;
                                        document.getElementById("designation").innerHTML = data['employeeDetails'][i].designation_name;
                                        document.getElementById("cadre").innerHTML = data['employeeDetails'][i].cadre_title;
                                        document.getElementById("mode_of_joining").innerHTML = data['employeeDetails'][i].mode_of_joining;
                                        document.getElementById("division").innerHTML = data['employeeDetails'][i].division_name;
                                        document.getElementById("category").innerHTML = data['employeeDetails'][i].category_title;
                                        document.getElementById("email_id").innerHTML = '*****';
                                        if (data['employeeDetails'][0].updated_on != null) {
                                            var last_updated = new Date(data['employeeDetails'][0].updated_on);
                                            var dd = last_updated.getDate();
                                            var mm = last_updated.getMonth() + 1;
                                            var yyyy = last_updated.getFullYear();
                                            var hr = last_updated.getHours();
                                            var min = last_updated.getMinutes();
                                            var sec = last_updated.getSeconds();
                                            if (dd < 10) {
                                                dd = '0' + dd;
                                            }

                                            if (mm < 10) {
                                                mm = '0' + mm;
                                            }
                                            if (hr < 10) {
                                                hr = '0' + hr;
                                            }
                                            if (min < 10) {
                                                min = '0' + min;
                                            }
                                            if (sec < 10) {
                                                sec = '0' + sec;
                                            }
                                            last_updated = dd + '/' + mm + '/' + yyyy + ' ' + hr + ':' + min + ':' + sec;
                                            var last_update_date = last_updated;
                                        } else {
                                            var last_update_date = "";
                                        }
                                        document.getElementById("last_updated").innerHTML = last_update_date;

                                        if (data['employeeDetails'][i].date_of_birth != null) {
                                            var date_of_birth = new Date(data['employeeDetails'][i].date_of_birth);
                                            var dd = date_of_birth.getDate();
                                            var mm = date_of_birth.getMonth() + 1;
                                            var yyyy = date_of_birth.getFullYear();
                                            if (dd < 10) {
                                                dd = '0' + dd;
                                            }

                                            if (mm < 10) {
                                                mm = '0' + mm;
                                            }
                                            date_of_birth = dd + '/' + mm + '/' + yyyy;
                                            var dob_date = date_of_birth
                                        } else {
                                            var dob_date = "";
                                        }
                                        document.getElementById("dob").innerHTML = dob_date;
                                        document.getElementById("pre_posting").innerHTML = data['employeeDetails'][i].office_name;

                                        $.ajax({
                                            type: 'GET',
                                            url: 'image' + '/' + data['employeeDetails'][i].profile_image,
                                            success: function(data) {
                                                var image_path = 'data:image/png;base64,' + data;
                                                $('#src_image').attr('src', image_path);
                                            },
                                            error: function(data) {
                                                console.log(data);
                                            }
                                        });
                                    }

                                    for (var i in data['transferDetails']) {
                                        if (data['transferDetails'][i].from_date != null) {
                                            if (data['transferDetails'][i].from_date != '1970-01-01') {
                                                var date = new Date(data['transferDetails'][i].from_date);
                                                var dd = date.getDate();
                                                var mm = date.getMonth() + 1;
                                                var yyyy = date.getFullYear();
                                                if (dd < 10) {
                                                    dd = '0' + dd;
                                                }

                                                if (mm < 10) {
                                                    mm = '0' + mm;
                                                }
                                                date = dd + '/' + mm + '/' + yyyy;
                                                var from_date = date
                                            } else {
                                                var from_date = "";
                                            }
                                        } else {
                                            var from_date = "";
                                        }
                                        if (data['transferDetails'][i].to_date != null) {
                                            if (data['transferDetails'][i].to_date != '1970-01-01') {
                                                var end = new Date(data['transferDetails'][i].to_date);
                                                var dd = end.getDate();
                                                var mm = end.getMonth() + 1;
                                                var yyyy = end.getFullYear();
                                                if (dd < 10) {
                                                    dd = '0' + dd;
                                                }

                                                if (mm < 10) {
                                                    mm = '0' + mm;
                                                }
                                                end = dd + '/' + mm + '/' + yyyy;
                                                var end_date = end
                                            } else {
                                                var end_date = "";
                                            }
                                        } else {
                                            var end_date = "";
                                        }

                                        if (data['transferDetails'][i].joining_time_from_date != null) {
                                            if (data['transferDetails'][i].joining_time_from_date != '1970-01-01') {
                                                var joining_time_from_date_new = data['transferDetails'][i].joining_time_from_date;
                                            } else {
                                                var joining_time_from_date_new = "";
                                            }
                                        } else {
                                            var joining_time_from_date_new = "";
                                        }

                                        if (data['transferDetails'][i].joining_time_till_date != null) {
                                            if (data['transferDetails'][i].joining_time_till_date != '1970-01-01') {
                                                var joining_time_till_date_new = data['transferDetails'][i].joining_time_till_date;
                                            } else {
                                                var joining_time_till_date_new = "";
                                            }
                                        } else {
                                            var joining_time_till_date_new = "";
                                        }

                                        if (data['transferDetails'][i].office_name != null) {
                                            var office_name = data['transferDetails'][i].office_name;
                                        } else {
                                            var office_name = "";
                                        }

                                        if (data['transferDetails'][i].designation_name != null) {
                                            var designation_name = data['transferDetails'][i].designation_name;
                                        } else {
                                            var designation_name = "";
                                        }

                                        if (data['transferDetails'][i].zone_name != null) {
                                            var zone_name = data['transferDetails'][i].zone_name;
                                        } else {
                                            var zone_name = "";
                                        }

                                        if (data['transferDetails'][i].region_name != null) {
                                            var region_name = data['transferDetails'][i].region_name;
                                        } else {
                                            var region_name = "";
                                        }
                                        var transfer = '';
                                        transfer += '<tr id=row-' + count + '>';
                                        transfer += '    <td>' + count + '</td>';
                                        transfer += '    <td>' + office_name + '</td>';
                                        transfer += '    <td>' + designation_name + '</td>';
                                        transfer += '    <td>' + from_date + '</td>';
                                        transfer += '    <td>' + end_date + '</td>';
                                        transfer += '    <td>' + joining_time_from_date_new + '</td>';
                                        transfer += '    <td>' + joining_time_till_date_new + '</td>';
                                        transfer += '    <td>' + zone_name + '</td>';
                                        transfer += '    <td>' + region_name + '</td>';

                                        transfer += '</tr>';
                                        $("#transfer tbody").append(transfer);
                                        count++;

                                    }

                                    for (var i in data['careerDetails']) {
                                        if (data['careerDetails'][i].Date_of_appointment_to_new_post != null) {
                                            var date_reporting = new Date(data['careerDetails'][i].Date_of_appointment_to_new_post);

                                            var dd = date_reporting.getDate();
                                            var mm = date_reporting.getMonth() + 1;
                                            var yyyy = date_reporting.getFullYear();
                                            if (dd < 10) {
                                                dd = '0' + dd;
                                            }

                                            if (mm < 10) {
                                                mm = '0' + mm;
                                            }
                                            date_reporting = dd + '/' + mm + '/' + yyyy;
                                            var reporting = date_reporting
                                        } else {
                                            var reporting = "";
                                        }

                                        var growth = '';
                                        growth += '<tr id=row-' + career + '>';
                                        growth += '    <td>' + career + '</td>';
                                        growth += '    <td>' + data['careerDetails'][i].office_name + '</td>';
                                        growth += '    <td>' + data['careerDetails'][i].Previous_designation_name + '</td>';
                                        growth += '    <td>' + data['careerDetails'][i].New_Designation_name + '</td>';
                                        growth += '    <td>' + reporting + '</td>';
                                        growth += '</tr>';
                                        $("#career tbody").append(growth);
                                        career++;

                                    }


                                    for (var i in data['learning']) {
                                        if (data['learning'][i].Date_Of_Training != null) {
                                            var schedule_date = new Date(data['learning'][i].Date_Of_Training);
                                            var dd = schedule_date.getDate();
                                            var mm = schedule_date.getMonth() + 1;
                                            var yyyy = schedule_date.getFullYear();
                                            if (dd < 10) {
                                                dd = '0' + dd;
                                            }

                                            if (mm < 10) {
                                                mm = '0' + mm;
                                            }
                                            schedule_date = dd + '/' + mm + '/' + yyyy;
                                            var sch_date = schedule_date
                                        } else {
                                            var sch_date = "";
                                        }
                                        var learning = '';
                                        learning += '<tr id=row-' + learn + '>';
                                        learning += '    <td>' + learn + '</td>';
                                        learning += '    <td>' + data['learning'][i].Competency_Gap + '</td>';
                                        learning += '    <td>' + data['learning'][i].course_name + '</td>';
                                        learning += '    <td>' + sch_date + '</td>';
                                        learning += '</tr>';
                                        $("#learning tbody").append(learning);
                                        learn++;

                                    }


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
