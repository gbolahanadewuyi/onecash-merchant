<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li><a href="<?=base_url()?>city_authority/dashboard"> <i class="icon-home"></i>Home</a></li>
    <li><a href="<?=base_url()?>city_authority/addMembers"> <i class="icon-grid"></i>Add Members</a></li>
    <li class=""><a href="<?=base_url()?>city_authority/loadMembers"> <i class="fa fa-bar-chart"></i>Members</a></li>
    <li class="active"><a href="<?=base_url()?>city_authority/load_identified_members"> <i
                class="fa fa-bar-chart"></i>Identified Members</a></li>
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
                <h2 class="no-margin-bottom">Members</h2>
            </div>
        </header>
        <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Identifed Members</li>
            </ul>
        </div>


        <!-- Section -->
        <section class="form">
            <div class="container-fluid">
                <zing-grid editor="modal" row-class="_renderClassActivity" context-menu="customMenu" layout="row"
                    layout-controls='true' filter sort pager page-size="10" page-size-options="10,20,40,50">
                    <zg-caption>
                        <small>Members with ID cards</small>

                        <button type="button" class="btn mr-2 mb-2 btn-primary pull-right" data-toggle="modal"
                            data-target="#myModal">
                            Export
                        </button>
                    </zg-caption>


                    <zg-colgroup>

                        <zg-column index="Firstname" header="Name"></zg-column>
                        <zg-column index="Lastname" header="Contact"></zg-column>
                        <zg-column index="Contact" header="Contact"></zg-column>
                        <zg-column index="Location" header="Location"></zg-column>
                        <zg-column index="id" header="Action" editor="false">

                            <zg-button data-toggle="modal" data-target="#addHospitalModal"
                                onclick='editHospitalData("[[index.id]]")'>
                                <zg-icon name="edit"> </zg-icon>Edit<span></span>
                            </zg-button>

                        </zg-column>
                    </zg-colgroup>
                    <!-- <zg-menu id="customMenu">
                        <zg-menu-item role="exportSelection">Export Selection</zg-menu-item>
                    </zg-menu> -->
                </zing-grid>
            </div>
        </section>


        <!-- Modal Form-->
        <!-- Modal-->
        <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
            class="modal fade text-left">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="exampleModalLabel" class="modal-title">Signin Modal</h4>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                                aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                        <form>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Email Address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" placeholder="Password" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>