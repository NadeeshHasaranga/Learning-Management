
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Assign Course to Student
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
                            <label class="control-label col-sm-4" for="cid">Course ID</label>
                            <div class="col-sm-5">
                                <input type="text" id="cid" name="cid" class="form-control " onblur="validateText(name)" placeholder="Course ID" value="<?php echo $id?>" readonly  >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="StudentName">Student ID</label>
                            <div class="col-sm-5">
                                <input type="text" id="sname" name="sname" class="form-control " onblur="validateText(name)" placeholder="Course Name" value=""  >
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /.tab-content -->
            </div>
            <div class="form-group">
                <label for="" class="control-label col-sm-9"></label>
                <div class=" col-sm-3" style="margin-bottom: 5px">
                    <button type="button" class="btn btn-success" id="btnSave" onclick="submitStudent();">Submit</button>
                    <button type="button" onclick="resetStudent();" class="btn btn-warning">Clear</button>
                    <button type="button" onclick="printStudentSticker();" class="btn btn-primary">Print Label</button>
                </div>
            </div>
        </form>




        <!--</section>-->
    </section>
    <!-- /.content -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/addcourse.js"></script>
</div>
<!-- /.content-wrapper -->
