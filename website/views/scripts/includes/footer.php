        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p><small>Copyright &copy;2015 Boneeto. All rights reserved.</small></p>
                    </div><!--/ .col-xs-12 -->
                    <div class="col-xs-12 col-sm-6">
                        <ul>
                            <li><a href="?p=single">Terms &amp; Conditions</a></li>
                            <li><a href="?p=single">Legal</a></li>
                            <li><a href="?p=single">Privacy Policy</a></li>
                        </ul>
                    </div><!--/ .col-xs-12 -->
                </div><!--/ .row -->
            </div><!--/ .container -->
        </footer>

        <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="modalVideoLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalVideoLabel">Modal title</h4>
                    </div><!--/ .modal-header -->
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <div id="player" class="embed-responsive-item"></div>
                        </div><!--/ .embed-responsive -->
                    </div><!--/ .modal-body -->
                    <div class="modal-footer">
                        <p class="pull-left"><i class="fa fa-eye"></i> <span id="modalVideoViews">9,999,999</span> views &nbsp; &nbsp;</p>
                        <p class="pull-left"><i class="fa fa-thumbs-o-up"></i> <span id="modalVideoLikes">9,999,999</span> likes</p>
                        <div class="clearfix"></div>
                    </div><!--/ .modal-footer -->
                </div><!--/ .modal-content -->
            </div><!--/ .modal-dialog -->
        </div><!--/ .modal -->

        <div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="modalUploadLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="modalUploadLabel">Unggah Video</h4>
                    </div><!--/ .modal-header -->
                    <div class="modal-body">
                       <!-- <form role="form" id="uploadForm">-->
					    <form name="form_upload" id="uploadForm" method="post" action="/video/submit" role="form" class="form-horizontal">
                            <div class="form-group">
                                <label>Video URL <small>*Must be on YouTube</small></label>
                                <input type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=S_ucMS7sxx8" tabindex="1"  name='youtube_url' >
                            </div><!--/ .form-group -->
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" placeholder="They See Me Rollin' They Hatin'" tabindex="2" maxlength="70" name='title' required>
                            </div><!--/ .form-group -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" tabindex="3" rows="5" maxlength="140" placeholder="Description" name='desc'></textarea>
                            </div><!--/ .form-group -->
                            <div id="uploadFormResponse" class="hidden">
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <span id="uploadFormResponseText">
                                        Submiting your data&hellip;
                                    </span>
                                </div><!--/ .alert -->
                            </div><!--/ #uploadFormResponse -->
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary" tabindex="4" value="Unggah">
                                <button type="button" class="btn btn-default" data-dismiss="modal" tabindex="5">Batal</button>
                            </div><!--/ .form-group -->
                        </form>
                    </div><!--/ .modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->