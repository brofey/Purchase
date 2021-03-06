<?php include_once '/php/conn.php'?>
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><i class="glyphicon  glyphicon-send" aria-hidden="true"></i> Coordinator</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user']['fullname']; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/main/logout" id="logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="/main"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="active">
                    <a href="/main"><i class="fa fa-fw fa-table"></i> Purchases</a>
                </li>
                <li>
                    <a href="/admin"><i class="fa fa-fw fa-edit"></i>  User administration</a>
                </li>
            </ul>ss
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper" style="background-color: #E0E0E0;">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12" style="padding:0px;">
                    <ul class="nav nav-pills" style="margin-bottom: 15px;">
                        <li class="active"><a data-toggle="pill" href="#home">My active appliements</a></li>
                        <li><a data-toggle="pill" href="#menu1">New purchase</a></li>
                        <li><a data-toggle="pill" href="#menu2">History</a></li>
                    </ul>
                    <div class="tab-content" >
                        <div id="home" class="tab-pane fade in active">
                            <div class="col-lg-12 shadow">
                                <div class="brd" style="margin-bottom: 15px; margin-top:20px; padding:5px;">
                                    <h2  style="display:inline;">Users</h2>
                                    <div style="display:inline-block; position: absolute; right:15px; width:300px; top:25px;">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default btn-danger" type="button"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></button>
                                                    </span>
                                        </div>
                                    </div>
                                    <button class="btn btn-success btn-sm" style="display:inline; position: absolute; right:360px; top:27px;" onclick="if ($('#tree')[0] != undefined)
                                                        $('#tree').treegrid('expandAll');"><i class="glyphicon glyphicon-arrow-down" aria-hidden="true"></i></button>
                                    <button class="btn btn-warning btn-sm" style="display:inline; position: absolute; right:323px; top:27px;" onclick="if ($('#tree')[0] != undefined)
                                                        $('#tree').treegrid('collapseAll');"><i class="glyphicon glyphicon-arrow-up" aria-hidden="true"></i></button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered" style="table-layout:fixed; margin-bottom: 0px; margin-right: 10px;">
                                        <thead>
                                        <tr>
                                            <th class="col-md-5">Department / Employee</th>
                                            <th class="col-md-3">Position</th>
                                            <th class="col-md-3">Role</th>
                                            <th class="col-md-1">Action</th>
                                        </tr>
                                        </thead>
                                    </table>
                                    <div class="div-table-content" id="usersTable">
                                        <div class="timer-loader" style ="position: absolute;top: 50%;left: 50%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="col-lg-8">
                                <div class="col-lg-12 shadow" style="padding:20px 20px 0px 20px;">
                                    <form class="form-horizontal " autocomplete="off">
                                        <fieldset>
                                            <legend><i class="glyphicon glyphicon-send" aria-hidden="true"></i> New application for purchase</legend>
                                            <div class="form-group col-lg-12">
                                                <h4 class="col-lg-6"><legend><i class="fa fa-user"></i> <?php echo $data['fullname']; ?> </legend></h4>
                                                <h4 class="col-lg-6"><legend><span class="label label-default"><?php echo $data['department']; ?></span> department.</legend></h4>
                                            </div>
                                            <div class="col-lg-12 form-group">
                                                <h4 class="col-lg-6"><span class="label label-default">Expense type: </span></h4>
                                                <h4 class="col-lg-6"><span class="label label-default"> Cost item: </span></h4>
                                                <div class="col-lg-6">
                                                    <select class="col-lg-6 selectpicker" data-width="100%">
                                                        <option>CAPEX</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <select class="selectpicker" data-width="100%">
                                                        <option>Item 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="col-lg-4"><span class="label label-default"> Purchase: </span></h3>
                                                <div class="col-lg-12">
                                                    <textarea rows="4" style="width:100%; max-width: 100%;"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="col-lg-6"><span class="label label-default"> Substantiation: </span></h3>
                                                <div class="col-lg-12">
                                                    <textarea name="summernote" id="summernote" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="col-lg-4"><span class="label label-default"> Files: </span></h3>
                                                <div class="col-lg-12">
                                                    <input id="input-1" multiple type="file" class="file file-loading" data-allowed-file-extensions='["txt","jpg","tif","doc","pdf"]'>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="col-lg-12 shadow" style="padding-top:15px;">
                                    <ul class="list-group" id="chain_list">
                                        <li class="list-group-item">
                                            <h5 class="list-group-item-heading">1. <i class="glyphicon glyphicon-user" aria-hidden="true"></i> Department leader</h5>
                                            <div class="col-lg-9">
                                                <select class="selectpicker" data-width="100%">
                                                    <?php echo getRoleUsers(5);?>
                                                </select>
                                            </div>
                                            <div class="col-lg-3" style="padding-left: 40px;">
                                                <button class='btn btn-success btn-sm personOK inline'>
                                                    <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                                                </button>
                                                <button class='btn btn-success btn-sm personADD inline'>
                                                    <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
                                                </button>
                                            </div>
                                            <div> </div>
                                        </li>
                                        <li class="list-group-item">
                                            <h5 class="list-group-item-heading">2. <i class="glyphicon glyphicon-user" aria-hidden="true"></i> Financial</h5>
                                            <div class="col-lg-9">
                                                <select class="selectpicker" data-width="100%">
                                                    <?php echo getRoleUsers(4); ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-3" style="padding-left: 40px;">
                                                <button class='btn btn-success btn-sm personOK inline'>
                                                    <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                                                </button>
                                                <button class='btn btn-success btn-sm personADD inline'>
                                                    <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <h5 class="list-group-item-heading">3. <i class="glyphicon glyphicon-user" aria-hidden="true"></i> Financial controller</h5>
                                            <div class="col-lg-9">
                                                <select class="selectpicker" data-width="100%">
                                                    <?php echo getRoleUsers(3); ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-3" style="padding-left: 40px;">
                                                <button class='btn btn-success btn-sm personOK inline'>
                                                    <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                                                </button>
                                                <button class='btn btn-success btn-sm personADD inline'>
                                                    <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <h5 class="list-group-item-heading">4. <i class="glyphicon glyphicon-user" aria-hidden="true"></i> Financial director</h5>
                                            <div class="col-lg-9">
                                                <select class="selectpicker" data-width="100%">
                                                    <?php echo getRoleUsers(2); ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-3" style="padding-left: 40px;">
                                                <button class='btn btn-success btn-sm personOK inline'>
                                                    <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                                                </button>
                                                <button class='btn btn-success btn-sm personADD inline'>
                                                    <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
                                                </button>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <h5 class="list-group-item-heading">5. <i class="glyphicon glyphicon-user" aria-hidden="true"></i> General director</h5>
                                            <div class="col-lg-9">
                                                <select class="selectpicker" data-width="100%">
                                                    <?php echo getRoleUsers(1); ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-3" style="padding-left: 40px;">
                                                <button class='btn btn-success btn-sm personOK inline'>
                                                    <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                                                </button>
                                                <button class='btn btn-success btn-sm personADD inline'>
                                                    <span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="col-lg-12">
                                        <button type="submit" id="createpurch" class="btn btn-success disabled" style="width:100%; margin-bottom: 15px;">Create application for purchase</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<script src="/js/main/purchasePanel.js" type="text/javascript"></script>