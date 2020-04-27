<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li><a href="<?=base_url()?>agriculture/dashboard"> <i class="icon-home"></i>Home</a></li>
    <li class="active"><a href="<?=base_url()?>agriculture/addMembers"> <i class="icon-grid"></i>Add
            Members</a></li>
    <li><a href="<?=base_url()?>agriculture/loadMembers"> <i class="fa fa-bar-chart"></i>Members</a>
    </li>
    <li class=""><a href="<?=base_url()?>agriculture/load_identified_members"> <i class="fa fa-bar-chart"></i>Identified
            Members</a></li>

    <!-- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i
                                class="icon-interface-windows"></i>Example dropdown </a>
                        <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                            <li><a href="#">Page</a></li>
                        </ul>
                    </li>
                    <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page </a></li>
                </ul><span class="heading">Extras</span>
                <ul class="list-unstyled">
                    <li> <a href="#"> <i class="icon-flask"></i>Demo </a></li>
                    <li> <a href="#"> <i class="icon-screen"></i>Demo </a></li>
                    <li> <a href="#"> <i class="icon-mail"></i>Demo </a></li>
                    <li> <a href="#"> <i class="icon-picture"></i>Demo </a></li>
                </ul> -->
    </nav>
    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Add Members</h2>
            </div>
        </header>
        <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Add Members</li>
            </ul>
        </div>
        <!-- Dashboard Counts Section-->
        <section class="forms">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Basic Form</h3>
                    </div>
                    <div class="card-body">
                        <p>Enter member details.</p>
                        <form class="" id="form" action="javascript:add_member();" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Firstname</label>
                                        <input type="txt" id="fname" placeholder="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Lastname</label>
                                        <input type="text" id="lname" placeholder="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Occupation</label>
                                        <input type="text" id="occupation" placeholder="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">DateOfBirth</label>
                                        <input type="date" id="dob" placeholder="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Address</label>
                                        <input type="text" id="address" placeholder="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Phone</label>
                                        <input type="text" id="phone" placeholder="" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Photo</label>
                                <input type="file" id="photo" placeholder="" class="form-control" >
                            </div>

                            <div class="form-group">
                                <button type="submit" id="btnSave" class="btn btn-primary pull-right">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>