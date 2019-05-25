
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            View Notices
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
        <div class="box box-primary">
            <div class="box-body">
                <div class="panel panel-default">
                    <table id="tblNotice" class="table table-bordered table table-striped  table-hover ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Course name</th>
                            <th>Lecturer</th>
                            <th>Notice</th>
                            <th>Action</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
    <div class="modal fade" id="ModalslsOrderView" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div id="coa_acc_modal_add_loader" class="ad_popup_main_loader"></div>
                <div class="modal-header modal_bg_aqua white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title modal_white"> Edit Notice</h4>
                </div>
                <div class="modal-body">
                    <!--<div class="panel panel-default" >-->
                    <div class="row">
                        <div class="col-sm-12">
                            <form class="form-horizontal" role="form" method="post" id="formfyAdd" name="formfyAdd"
                                  enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="itemCode" class="control-label col-sm-4 ">Course</label>
                                            <div class=" col-sm-8">
                                                <input type="text" name="coursename" id="coursename"
                                                       class="form-control" placeholder="" value="" readonly>
                                                <input type="hidden" name="noteid" id="noteid"
                                                       class="form-control" placeholder="" value="" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="noticetxt" class="control-label col-sm-4">Notice</label>
                                        <div class=" col-sm-4" style="margin-bottom: 5px">
                                            <textarea  class="form-control" name="noticetxt" id="noticetxt" value=""></textarea>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                    <!--</div>-->
                </div>
                <div class="modal-footer">
                    <button type="button" id="coa_acc_fy_year_add_btn" class="btn btn-success" onclick="editsubmitNote()">Edit
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- /.content -->
</div>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/viewNotice.js"></script>
<!-- /.content-wrapper -->
