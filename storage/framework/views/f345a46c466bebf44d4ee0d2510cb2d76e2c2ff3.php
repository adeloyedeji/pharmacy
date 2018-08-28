<!doctype html>
<html lang="en">

<?php echo $__env->make('partials.cms._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body id="top">

<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="loader"></div>
    </div>
</div>
<!-- /Preloader -->

<div id="body-wrapper" class="body-container">

    <!-- Header begins -->
<?php echo $__env->make('partials.cms._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- /Header ends -->

    <!-- Sidebar -->
<?php echo $__env->make('partials.cms._sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- /Sidebar -->

    <!-- Page container begins -->
    <section class="main-container">

    <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->
        <footer class="footer-container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="float-left">
                            ©  2017 &nbsp;&nbsp;&nbsp;&bull;&nbsp;&nbsp;&nbsp;Dollar Pharmacy by <a href="#" target="_blank">Infostrategy Technology</a>.							</div>
                        <div class="float-right">

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->

    </section>
    <!-- /Page Container ends -->

    <!-- ScrolltoTop -->
    <a id="scrollTop" href="#top"><i class="icon-arrow-up12"></i></a>
    <!-- /ScrolltoTop -->

</div>

<!-- Rightbar -->
<div id="right_sidebar" class="right_bar">

    <div class="rightbar-wrapper">

        <div class="rightbar-header">
            <img src="img/demo/img1.jpg" class="rounded-circle user" alt=""/>
            <div class="username">Jane Elliott</div>
            <div class="close-rightbar"><a onclick="close_rightbar()"><i class="icon-cross2"></i></a></div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

        <div class="searchbar">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off">
                    <span class="input-group-addon"><i class="icon-search4"></i></span>
                </div>
            </div>
        </div>

        <div class="card friend-list">
            <div class="card-header">
                <div class="card-title">Friends</div>
                <ul class="icons-list">
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="collapse" data-toggle="collapse" href="#friends"></a></li>
                </ul>
            </div>
            <div class="card-block collapse show" id="friends">

                <div id="friends">
                    <div class="friend">
                        <img src="img/demo/img1.jpg" />
                        <div class="detail">
                            <span>Jane Elliott</span>
                            <cite>You just got LITT...</cite>
                        </div>
                        <div class="status available"></div>
                        <div class="time">1:10 AM</div>
                        <div class="badge badge-pill badge-danger">4</div>
                    </div>
                    <div class="friend">
                        <img src="img/demo/img2.jpg" />
                        <div class="detail">
                            <span>Florence Douglas</span>
                            <cite>Wrong. You take the gun...</cite>
                        </div>
                        <div class="status available"></div>
                        <div class="time">9:14 PM</div>
                        <div class="badge badge-pill badge-danger">23</div>
                    </div>
                    <div class="friend">
                        <img src="img/demo/img3.jpg" />
                        <div class="detail">
                            <span>Jacqueline Howell</span>
                            <cite>I was thinking that we...</cite>
                        </div>
                        <div class="status busy"></div>
                        <div class="time">Yesterday</div>
                    </div>
                    <div class="friend">
                        <img src="img/demo/img4.jpg" />
                        <div class="detail">
                            <span>Eugine Turner</span>
                            <cite>Mike, I know everything</cite>
                        </div>
                        <div class="status away"></div>
                        <div class="time">Yesterday</div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card notifications">
            <div class="card-header">
                <div class="card-title">Notifications</div>
                <ul class="icons-list">
                    <li><a data-action="collapse" data-toggle="collapse" href="#notifications"></a></li>
                </ul>
            </div>
            <div class="card-block collapse show" id="notifications">
                <div class="media-container">
                    <ul class="clearfix">
                        <li class="clearfix">
                            <a href="#" class="media-thumb bg-info"><i class="icon-cart2"></i>
                            </a><a href="#" class="media-title"><div>You have new order</div><span class="media-time">Just now</span></a>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="media-thumb bg-indigo"><i class="icon-stats-growth"></i>
                            </a><a href="#" class="media-title"><div>Sales report generated</div><span class="media-time">20 minutes ago</span></a>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="media-thumb bg-success"><i class="icon-checkmark"></i>
                            </a><a href="#" class="media-title"><div>Task completed</div><span class="media-time">yesterday at 2:23 pm</span></a>
                        </li>
                        <li class="clearfix">
                            <a href="#" class="media-thumb bg-danger"><i class="icon-server"></i>
                            </a><a href="#" class="media-title"><div>Server load (80%)</div><span class="media-time">Currently</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card activities">
            <div class="card-header">
                <div class="card-title">Activities</div>
                <ul class="icons-list">
                    <li><a data-action="collapse" data-toggle="collapse" href="#activities"></a></li>
                </ul>
            </div>
            <div class="card-block collapse show" id="activities">

                <ol class="activity-feed">
                    <li class="feed-item" data-content="&#xeb35">
                        <section>
                            <input type="checkbox" id="expand_1" name="expand_1" />
                            <label for="expand_1">
                                <cite>2 minutes ago</cite>
                                <span><b>Jane Elliott</b> added 2 new friends</span>
                            </label>
                            <main class="content">
                                <b>Jane Elliott</b> added:<br />
                                <img src="img/demo/img3.jpg" alt="image" class="rounded-circle img-20 m-t-10 m-r-10"/>
                                <img src="img/demo/img4.jpg" alt="image" class="rounded-circle img-20 m-t-10"/>
                            </main>
                        </section>
                    </li>
                    <li class="feed-item" data-content="&#xe914">
                        <section>
                            <input type="checkbox" id="expand_2" name="expand_2" />
                            <label for="expand_2">
                                <cite>Yesterday at 12:15 pm</cite>
                                <span><b>Florence Douglas</b> posted on your timeline.</span>
                            </label>
                            <main class="content">
                                Duis iaculis commodo condimentum. Donec quis felis libero. Nunc feugiat nisi ut ullamcorper congue.
                            </main>
                        </section>
                    </li>
                    <li class="feed-item" data-content="&#xeb35">
                        <section>
                            <input type="checkbox" id="expand_3" name="expand_3" />
                            <label for="expand_3">
                                <cite>2 Days ago</cite>
                                <span>You have a new friend request</span>
                            </label>
                            <main class="content">
                                <b>Jane Elliott</b> wants to be your friend<br />
                                <img src="img/demo/img1.jpg" alt="image" class="rounded-circle img-20 m-t-10 m-r-10"/>
                            </main>
                        </section>
                    </li>
                    <li class="feed-item" data-content="&#xeab6">
                        <section>
                            <label for="expand_4">
                                <cite>2 days ago</cite>
                                <span><b>Florence Douglas</b> invited you for <a href="#">New event</a>.</span>
                            </label>
                        </section>
                    </li>
                    <li class="feed-item" data-content="&#xea49">
                        <section>
                            <input type="checkbox" id="expand_5" name="expand_5" />
                            <label for="expand_5">
                                <cite>3 days ago</cite>
                                <span>You have 4 documents pending</span>
                            </label>
                            <main class="content">
                                <i class="icon-file-presentation x4 position-left m-b-10"></i>
                                <i class="icon-file-picture x4 position-left m-b-10"></i>
                                <i class="icon-file-locked x4 position-left m-b-10"></i>
                                <i class="icon-file-xml x4 position-left m-b-10"></i>
                            </main>
                        </section>
                    </li>
                </ol>

            </div>
        </div>

        <div class="card settings">
            <div class="card-header">
                <div class="card-title">Settings</div>
                <ul class="icons-list">
                    <li><a data-action="collapse" data-toggle="collapse" href="#settings"></a></li>
                </ul>
            </div>
            <div class="card-block collapse show" id="settings">
                <section>
                    <div class="checkbox checkbox-right checkbox-switchery switchery-xs">
                        <label class="display-block">
                            <input type="checkbox" class="switchery">
                            Notifications
                        </label>
                    </div>
                </section>

                <section>
                    <div class="checkbox checkbox-right checkbox-switchery switchery-xs">
                        <label class="display-block">
                            <input type="checkbox" class="switchery">
                            Notification Sounds
                        </label>
                    </div>
                </section>

                <section>
                    <div class="checkbox checkbox-right checkbox-switchery switchery-xs">
                        <label class="display-block">
                            <input type="checkbox" class="switchery" checked="checked">
                            Show Online
                        </label>
                    </div>
                </section>

                <section>
                    <div class="checkbox checkbox-right">
                        <label>
                            <input type="checkbox" class="styled" checked="checked">
                            Activities
                        </label>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <div id="conversation">

        <div class="conversation-header">
            <i class="icon-arrow-left32" id="back"></i>
            <img src="img/demo/img1.jpg" />
            <div class="friend-details">
                <span>Jane Elliott</span>
                <cite>Online</cite>
            </div>
            <div class="actions">
                <div class="dropdown">
                    <i class="icon-attachment dropdown-toggle" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                        <a href="#" class="dropdown-item"><i class="icon-file-pdf position-left"></i>Document</a>
                        <a href="#" class="dropdown-item"><i class="icon-camera position-left"></i>Camera</a>
                        <a href="#" class="dropdown-item"><i class="icon-images2 position-left"></i>Gallery</a>
                        <a href="#" class="dropdown-item"><i class="icon-music position-left"></i>Audio</a>
                        <a href="#" class="dropdown-item"><i class="icon-location3 position-left"></i>Location</a>
                        <a href="#" class="dropdown-item"><i class="icon-user position-left"></i>Contact</a>
                    </ul>
                </div>
            </div>
        </div>

        <div class='chat-wrapper'>
            <div class='chat-message chat-message-recipient'>
                <img class='chat-image' src='img/demo/img1.jpg' />
                <div class='chat-message-wrapper'>
                    <div class='chat-message-content'>
                        <p>Sushi tonight?</p>
                    </div>
                    <div class='chat-details'>
                        <span>10:14 am</span>
                    </div>
                </div>
            </div>

            <div class='chat-message chat-message-sender'>
                <img class='chat-image' src='img/demo/img2.jpg' />
                <div class='chat-message-wrapper'>
                    <div class='chat-message-content'>
                        <p>Pizza?</p>
                        <p>We had sushi last time!</p>
                        <p>For me one Vegetariana! Plus some chili oil on it!</p>
                    </div>
                    <div class='chat-details'>
                        <i class="icon-check2 text-info"></i>
                        <span>10:15 am</span>
                    </div>
                </div>
            </div>

            <div class='chat-message chat-message-recipient'>
                <img class='chat-image' src='img/demo/img1.jpg' />
                <div class='chat-message-wrapper'>
                    <div class='chat-message-content'>
                        <p>Done. Delivery takes 5 minutes!</p>
                    </div>
                    <div class='chat-details'>
                        <span>10:16 am</span>
                    </div>
                </div>
            </div>

            <div class='chat-message chat-message-sender'>
                <img class='chat-image' src='img/demo/img2.jpg' />
                <div class='chat-message-wrapper'>
                    <div class='chat-message-content'>
                        <p>Awesome! See you later! : )</p>
                    </div>
                    <div class='chat-details'>
                        <i class="icon-check2 text-slate"></i>
                        <span>Just now</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="conversation-compose">
            <input class="input-msg" name="input" placeholder="Type a message..." autocomplete="off">
            <div class="photo">
                <i class="icon-camera"></i>
            </div>
            <button class="send">
                <div class="circle">
                    <i class="icon-paperplane"></i>
                </div>
            </button>
        </div>

    </div>

</div>

<!-- /Rightbar -->

<!-- Layout settings -->
<div class="layout"></div>
<span class="is_hidden" id="jquery_vars">
	<span class="is_hidden switch-active"></span>
	<span class="is_hidden switch-inactive"></span>
	<span class="is_hidden chart-bg"></span>
	<span class="is_hidden chart-gridlines-color"></span>
	<span class="is_hidden chart-legends-text-color"></span>
	<span class="is_hidden chart-grid-text-color"></span>
	<span class="is_hidden chart-data-color-option1"></span>
	<span class="is_hidden chart-data-color-option2"></span>
	<span class="is_hidden chart-data-color-option3"></span>
	<span class="is_hidden chart-data-color-option4"></span>
	<span class="is_hidden chart-data-color-option5"></span>
	<span class="is_hidden chart-data-color-option6"></span>
	<span class="is_hidden chart-data-color-option7"></span>
	<span class="is_hidden chart-data-color-option8"></span>
</span>
<!-- /Layout settings -->

<!-- Global scripts -->
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/jquery/jquery.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/jquery/jquery.ui.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/tether.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/bootstrap/bootstrap.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/bootstrap/jasny_bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/navigation/nav.accordion.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/hammer/hammerjs.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/hammer/jquery.hammer.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/slimscroll/jquery.slimscroll.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/extensions/smart-resize.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/extensions/blockui.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/forms/uniform.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/forms/switchery.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/forms/select2.min.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/plugins/ekko-lightbox.min.js')); ?>"></script>

<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'editor1' );
</script>

<script src="<?php echo e(URL::to('js/noty.js')); ?>" type="text/javascript"></script>


<script>
    <?php if(Session::has('success')): ?>

    new Noty({

        type: 'success',
        layout: 'topRight',
        text: '<?php echo e(Session::get('success')); ?>'
    }).show();

    <?php endif; ?>

    <?php if(Session::has('fail')): ?>
    new Noty({

        type: 'error',
        layout: 'topRight',
        text: '<?php echo e(Session::get('fail')); ?>'
    }).show();
    <?php endif; ?>
</script>


<!-- /Global scripts -->

<?php echo $__env->yieldContent('javascripts'); ?>

<!-- Core scripts -->
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/app/layouts.js')); ?>"></script>
<script src="<?php echo e(URL::to('cms_assets/lib/js/core/app/core.js')); ?>"></script>
<!-- /Core scripts -->


</body>

</html>
