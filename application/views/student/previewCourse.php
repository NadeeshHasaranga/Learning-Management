<link rel="stylesheet" href="<?php echo base_url(); ?>assets/student/css/comment.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.514/styles/kendo.common-material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.514/styles/kendo.material.min.css" />
<link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.514/styles/kendo.material.mobile.min.css" />

<script src="https://kendo.cdn.telerik.com/2019.2.514/js/jquery.min.js"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.514/js/kendo.all.min.js"></script>

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <input type="text" id="cid" name="cid" class="form-control " value="<?php echo $id?>" hidden>

        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-8 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                <h1 class="mb-3 bread" id="coursetitle"></h1>
                <h3 class="mb-3 bread" id="courseid"></h3>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Course Notices</h2>
            </div>
        </div>
        <div class="row" id="notice-container">

        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Assignments</h2>
            </div>
        </div>
        <div class="row" >
            <div id="example">


            </div>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" id="logout">
            <div class="page-header">
                <h3 class="reviews">Leave your comment</h3>
            </div>
            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="comments-logout">

                        <ul class="media-list" id="comment-list">


                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="commentForm" role="form" onsubmit="return false;">
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Comment</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                                </div>
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>-->
<!--                                <div class="col-sm-10">-->
<!--                                    <div class="input-group">-->
<!--                                        <div class="input-group-addon">http://</div>-->
<!--                                        <input type="text" class="form-control" name="uploadMedia" id="uploadMedia">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button class="btn btn-success btn-circle text-uppercase" type="button" id="submitComment" onclick="submitComments()"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/js/prevCourse.js"></script>

