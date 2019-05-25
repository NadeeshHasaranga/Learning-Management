
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Course
            <!--<small>Optional description</small>-->
        </h1>
        <div class="datetime">
            <b>
                <p>
                    <span id="sysDate"></span>
                    <span id="clock"></span>
                </p>
            </b>
        </div>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!--<section>-->
        <form class="form-horizontal" role="form" method="POST" id="formStudent" name="formStudent" enctype="multipart/form-data">

            <input type="hidden" id="action" name="action" value="insert">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="company">
                        <br/>
                        <br/>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for=""></label>
                            <div class="col-sm-4">
                                <input type="checkbox" id="status" name="status" checked><b> Active</b>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="cid">Course ID</label>
                            <div class="col-sm-5">
                                <input type="text" id="cid" name="cid" class="form-control " onblur="validateText(name)" placeholder="Course ID" value=""  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="StudentName">Course Name</label>
                            <div class="col-sm-5">
                                <input type="text" id="cname" name="cname" class="form-control " onblur="validateText(name)" placeholder="Course Name" value=""  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="cfaculty">Faculty</label>
                            <div class="col-sm-5">
                                <input type="text" id="cfaculty" name="cfaculty" class="form-control " onblur="validateText(name)" placeholder="Faculty" value=""  >
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="enrolkey" class="control-label col-sm-4">Enrollment Key</label>
                            <div class=" col-sm-4" style="margin-bottom: 5px">
                                <input type="text" class="form-control" name="enrolkey" id="enrolkey" placeholder="Enrollment Key" onblur="validateRequired(name);" value="" >
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /.tab-content -->
            </div>
            <div class="form-group">
                <label for="" class="control-label col-sm-9"></label>
                <div class=" col-sm-3" style="margin-bottom: 5px">
                    <button type="button" class="btn btn-success" id="btnSave" onclick="validate();">Submit</button>
                    <button type="button" onclick="resetStudent();" class="btn btn-warning">Clear</button>
                    <button type="button" onclick="printStudentSticker();" class="btn btn-primary">Print Label</button>
                </div>
            </div>
        </form>





        <!--</section>-->
    </section>
    <!-- /.content -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/course.js"></script>
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    function validate() {
        var courseID = document.getElementById("cid");
        var courseName = document.getElementById("cname");
        var courseFac = document.getElementById("cfaculty");
        var enrol = document.getElementById("enrolkey");
        var address2 = document.getElementById("address2");
        var address3 = document.getElementById("address3");
        var address3 = document.getElementById("address3");
        var faculty = document.getElementById("faculty");
        var batch = document.getElementById("batch");
        var telephone = document.getElementById("telephone");
        var email = document.getElementById("email");
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;




        if(courseID.value == "" || courseName.value=="" || courseFac.value == "" || enrol.value == "")
        {
            alertify.error("Please fill all the blanks!")

        }
        else {
            submitStudent();
        }

    }

</script>
