<!-- Sidebar Navidation Menus--><span class="heading">Main</span>
<ul class="list-unstyled">
    <li class="active"><a href="<?=base_url()?>agriculture/dashboard"> <i class="icon-home"></i>Home</a></li>
    <li><a href="<?=base_url()?>agriculture/addMembers"> <i class="icon-grid"></i>Add Members</a></li>
    <li><a href="<?=base_url()?>agriculture/loadMembers"> <i class="fa fa-bar-chart"></i>Members</a></li>
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
                <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
        </header>
        <!-- Breadcrumb-->
        <!-- <div class="breadcrumb-holder container-fluid">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div> -->
        <!-- Dashboard Counts Section-->
        <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <div class="row bg-white has-shadow">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="item d-flex align-items-center">
                            <div class="icon bg-violet"><i class="icon-user"></i></div>
                            <div class="title"><span>All<br>Members</span>
                                <div class="progress">
                                    <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                                </div>
                            </div>
                            <div class="number"><strong>0</strong></div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="item d-flex align-items-center">
                            <div class="icon bg-red"><i class="icon-padnote"></i></div>
                            <div class="title"><span>Identified<br>Members</span>
                                <div class="progress">
                                    <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70"
                                        aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                                </div>
                            </div>
                            <div class="number"><strong>0</strong></div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="item d-flex align-items-center">
                            <div class="icon bg-green"><i class="icon-bill"></i></div>
                            <div class="title"><span>All <br> Posts</span>
                                <div class="progress">
                                    <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40"
                                        aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                                </div>
                            </div>
                            <div class="number"><strong>0</strong></div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="item d-flex align-items-center">
                            <div class="icon bg-orange"><i class="icon-check"></i></div>
                            <div class="title"><span>Total<br>Transactions</span>
                                <div class="progress">
                                    <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50"
                                        aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                                </div>
                            </div>
                            <div class="number"><strong>0</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard Header Section    -->
        <section class="dashboard-header">
            <div class="container-fluid">
                <div class="row">
                    <!-- Statistics -->
                    <div class="statistics col-lg-3 col-12">
                        <div class="statistic d-flex align-items-center bg-white has-shadow">
                            <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
                            <div class="text"><strong>234</strong><br><small>Applications</small></div>
                        </div>
                        <div class="statistic d-flex align-items-center bg-white has-shadow">
                            <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
                            <div class="text"><strong>152</strong><br><small>Interviews</small></div>
                        </div>
                        <div class="statistic d-flex align-items-center bg-white has-shadow">
                            <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
                            <div class="text"><strong>147</strong><br><small>Forwards</small></div>
                        </div>
                    </div>
                    <!-- Line Chart            -->
                    <div class="chart col-lg-6 col-12">
                        <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                            <canvas id="lineCahrt"></canvas>
                        </div>
                    </div>
                    <div class="chart col-lg-3 col-12">
                        <!-- Bar Chart   -->
                        <div class="bar-chart has-shadow bg-white">
                            <div class="title"><strong class="text-violet">95%</strong><br><small>Current Server
                                    Uptime</small>
                            </div>
                            <canvas id="barChartHome"></canvas>
                        </div>
                        <!-- Numbers-->
                        <div class="statistic d-flex align-items-center bg-white has-shadow">
                            <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
                            <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>