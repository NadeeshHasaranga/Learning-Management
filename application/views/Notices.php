
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Notice
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
        <form class="form-horizontal" role="form" method="POST" id="formNotices" name="formNotices" enctype="multipart/form-data">

            <input type="hidden" id="action" name="action" value="insert">

            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="company">
                        <br/>
                        <br/>

                        <div class="form-group">
                            <label class="control-label col-sm-4" for="cname">Choose Course</label>
                            <div class="col-sm-5">
<!--                                <input type="text" id="cid" name="cid" class="form-control " onblur="validateText(name)" placeholder="Course Name" value=""  >-->
                                <select class="form-control" name="cname" id="cname" onchange="">
                                    <option value="" >Please Select Course</option>
                                </select>

                            </div>
                        </div>
<!--                        <div class="form-group">-->
<!--                            <label class="control-label col-sm-4" for="cfaculty">Student ID</label>-->
<!--                            <div class="col-sm-5">-->
<!--                                <input type="text" id="cfaculty" name="cfaculty" class="form-control " onblur="validateText(name)" placeholder="Student" value=""  >-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label class="control-label col-sm-4" for=""></label>-->
<!--                            <div class="col-sm-4">-->
<!--                                <input type="checkbox" id="status" name="status" ><b> All Student</b>-->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="form-group">
                            <label for="noticetxt" class="control-label col-sm-4">Notice</label>
                            <div class=" col-sm-4" style="margin-bottom: 5px">
                                <textarea  class="form-control" name="noticetxt" id="noticetxt" value=""></textarea>
                            </div>
                        </div>


                    </div>

                </div>
                <!-- /.tab-content -->
            </div>
            <div class="form-group">
                <label for="" class="control-label col-sm-9"></label>
                <div class=" col-sm-3" style="margin-bottom: 5px">
                    <button type="button" class="btn btn-success" id="btnSave" onclick="submitNote();">Submit</button>
                    <button type="button" onclick="resetform();" class="btn btn-warning">Clear</button>
                </div>
            </div>
        </form>





        <!--</section>-->
    </section>

    <!-- /.content -->
    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/course.js"></script>
</div>
<!-- /.content-wrapper -->
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/addnotice.js"></script>
