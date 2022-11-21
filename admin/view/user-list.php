<?php require_once admin_view("static/header") ?>
<?php require_once admin_view("static/main_navbar") ?>
<?php require_once admin_view("static/main_sidebar") ?>
<!-- Main content -->
<div class="content-wrapper">

    <!-- Inner content -->
    <div class="content-inner">

        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content header-elements-lg-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">User Pages</span> - User List</h4>
                    <a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none mb-3 mb-lg-0">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-body"><i class="icon-bars-alt"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-body"><i class="icon-calculator"></i> <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-body"><i class="icon-calendar5"></i> <span>Schedule</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content pt-0">



            <!-- Collapsible lists -->
            <div class="row">
                <div class="col-lg-6">

                    <!-- Collapsible list -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Collapsible list</h5>
                        </div>

                        <ul class="media-list media-list-linked">
                            <li class="media font-weight-semibold border-0 py-1">Team leaders</li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#james">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">James Alexander</div>
                                        <span class="text-muted">Last.fm</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-success-100"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="james">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Amsterdam</li>
                                            <li><i class="icon-user-tie mr-2"></i> Senior Designer</li>
                                            <li><i class="icon-phone mr-2"></i> +1(800)431 8996</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">james@alexander.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#jeremy">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Jeremy Victorino</div>
                                        <span class="text-muted">Spotify</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-danger-100"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="jeremy">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Hague</li>
                                            <li><i class="icon-user-tie mr-2"></i> Network engineer</li>
                                            <li><i class="icon-phone mr-2"></i> +1(389)384 9039</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">jeremy@victorino.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#margo">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Margo Baker</div>
                                        <span class="text-muted">eBay</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-primary-100"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="margo">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Dublin</li>
                                            <li><i class="icon-user-tie mr-2"></i> Marketing expert</li>
                                            <li><i class="icon-phone mr-2"></i> +3(431)589 3889</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">margo@baker.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#monica">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Monica Smith</div>
                                        <span class="text-muted">Amazon</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-danger-100"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="monica">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Paris</li>
                                            <li><i class="icon-user-tie mr-2"></i> Web master</li>
                                            <li><i class="icon-phone mr-2"></i> +5(342)543 2367</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">monica@smith.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="media font-weight-semibold border-0 py-1">Office staff</li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#bastian">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Bastian Miller</div>
                                        <span class="text-muted">Yahoo</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-secondary"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="bastian">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> New York</li>
                                            <li><i class="icon-user-tie mr-2"></i> Lead developer</li>
                                            <li><i class="icon-phone mr-2"></i> +1(234)675 3904</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">bastian@miller.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#jordana">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Jordana Mills</div>
                                        <span class="text-muted">Paypal</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-primary-100"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="jordana">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Madrid</li>
                                            <li><i class="icon-user-tie mr-2"></i> UI/UX expert</li>
                                            <li><i class="icon-phone mr-2"></i> +2(564)234 9002</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">jordana@mills.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#buzz">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Buzz Brenson</div>
                                        <span class="text-muted">Oracle</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-danger-100"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="buzz">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Hamburg</li>
                                            <li><i class="icon-user-tie mr-2"></i> Engineer</li>
                                            <li><i class="icon-phone mr-2"></i> +4(234)543 2388</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">buzz@brenson.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#zachary">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Zachary Willson</div>
                                        <span class="text-muted">Salesforce</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-secondary"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="zachary">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Berlin</li>
                                            <li><i class="icon-user-tie mr-2"></i> Accountant</li>
                                            <li><i class="icon-phone mr-2"></i> +4(231)653 3892</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">zachary@willson.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#william">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">William Miles</div>
                                        <span class="text-muted">Bing</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-secondary"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="william">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Oslo</li>
                                            <li><i class="icon-user-tie mr-2"></i> Senior engineer</li>
                                            <li><i class="icon-phone mr-2"></i> +6(324)236 3689</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">william@miles.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="media font-weight-semibold border-0 py-1">Partners</li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#freddy">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Freddy Walden</div>
                                        <span class="text-muted">Microsoft</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-success-100"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="freddy">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Amsterdam</li>
                                            <li><i class="icon-user-tie mr-2"></i> Accountant</li>
                                            <li><i class="icon-phone mr-2"></i> +3(234)653 5432</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">freddy@walden.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#dori">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Dori Laperriere</div>
                                        <span class="text-muted">Google</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-warning-100"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="dori">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> New York</li>
                                            <li><i class="icon-user-tie mr-2"></i> Usability expert</li>
                                            <li><i class="icon-phone mr-2"></i> +1(455)234 8994</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">dori@laperriere.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a href="#" class="media" data-toggle="collapse" data-target="#vanessa">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Vanessa Aurelius</div>
                                        <span class="text-muted">Facebook</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <span class="badge badge-mark border-secondary"></span>
                                    </div>
                                </a>

                                <div class="collapse" id="vanessa">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Rome</li>
                                            <li><i class="icon-user-tie mr-2"></i> Web developer</li>
                                            <li><i class="icon-phone mr-2"></i> +8(344)658 4598</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">vanessa@aurelius.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /collapsible list -->

                </div>

                <div class="col-lg-6">

                    <!-- Custom handle -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Custom handle</h5>
                        </div>

                        <ul class="media-list media-list-linked">
                            <li class="media font-weight-semibold border-0 py-1">Team leaders</li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">James Alexander</div>
                                        <span class="text-muted">Last.fm</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#james2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="james2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Amsterdam</li>
                                            <li><i class="icon-user-tie mr-2"></i> Senior Designer</li>
                                            <li><i class="icon-phone mr-2"></i> +1(800)431 8996</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">james@alexander.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Jeremy Victorino</div>
                                        <span class="text-muted">Spotify</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#jeremy2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="jeremy2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Hague</li>
                                            <li><i class="icon-user-tie mr-2"></i> Network engineer</li>
                                            <li><i class="icon-phone mr-2"></i> +1(389)384 9039</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">jeremy@victorino.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Margo Baker</div>
                                        <span class="text-muted">eBay</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#margo2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="margo2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Dublin</li>
                                            <li><i class="icon-user-tie mr-2"></i> Marketing expert</li>
                                            <li><i class="icon-phone mr-2"></i> +3(431)589 3889</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">margo@baker.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Monica Smith</div>
                                        <span class="text-muted">Amazon</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#monica2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="monica2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Paris</li>
                                            <li><i class="icon-user-tie mr-2"></i> Web master</li>
                                            <li><i class="icon-phone mr-2"></i> +5(342)543 2367</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">monica@smith.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="media font-weight-semibold border-0 py-1">Office staff</li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Bastian Miller</div>
                                        <span class="text-muted">Yahoo</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#bastian2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="bastian2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> New York</li>
                                            <li><i class="icon-user-tie mr-2"></i> Lead developer</li>
                                            <li><i class="icon-phone mr-2"></i> +1(234)675 3904</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">bastian@miller.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Jordana Mills</div>
                                        <span class="text-muted">Paypal</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#jordana2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="jordana2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Madrid</li>
                                            <li><i class="icon-user-tie mr-2"></i> UI/UX expert</li>
                                            <li><i class="icon-phone mr-2"></i> +2(564)234 9002</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">jordana@mills.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Buzz Brenson</div>
                                        <span class="text-muted">Oracle</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#buzz2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="buzz2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Hamburg</li>
                                            <li><i class="icon-user-tie mr-2"></i> Engineer</li>
                                            <li><i class="icon-phone mr-2"></i> +4(234)543 2388</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">buzz@brenson.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Zachary Willson</div>
                                        <span class="text-muted">Salesforce</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#zachary2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="zachary2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Berlin</li>
                                            <li><i class="icon-user-tie mr-2"></i> Accountant</li>
                                            <li><i class="icon-phone mr-2"></i> +4(231)653 3892</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">zachary@willson.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">William Miles</div>
                                        <span class="text-muted">Bing</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#william2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="william2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Oslo</li>
                                            <li><i class="icon-user-tie mr-2"></i> Senior engineer</li>
                                            <li><i class="icon-phone mr-2"></i> +6(324)236 3689</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">william@miles.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="media font-weight-semibold border-0 py-1">Partners</li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Freddy Walden</div>
                                        <span class="text-muted">Microsoft</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#freddy2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="freddy2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Amsterdam</li>
                                            <li><i class="icon-user-tie mr-2"></i> Accountant</li>
                                            <li><i class="icon-phone mr-2"></i> +3(234)653 5432</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">freddy@walden.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Dori Laperriere</div>
                                        <span class="text-muted">Google</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#dori2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="dori2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> New York</li>
                                            <li><i class="icon-user-tie mr-2"></i> Usability expert</li>
                                            <li><i class="icon-phone mr-2"></i> +1(455)234 8994</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">dori@laperriere.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="media">
                                    <div class="mr-3"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="40" height="40" alt=""></div>
                                    <div class="media-body">
                                        <div class="media-title font-weight-semibold">Vanessa Aurelius</div>
                                        <span class="text-muted">Facebook</span>
                                    </div>
                                    <div class="align-self-center ml-3">
                                        <a href="#" class="text-body" data-toggle="collapse" data-target="#vanessa2">
                                            <i class="icon-menu7"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="collapse" id="vanessa2">
                                    <div class="card-body bg-dark">
                                        <ul class="list list-unstyled mb-0">
                                            <li><i class="icon-pin mr-2"></i> Rome</li>
                                            <li><i class="icon-user-tie mr-2"></i> Web developer</li>
                                            <li><i class="icon-phone mr-2"></i> +8(344)658 4598</li>
                                            <li><i class="icon-mail5 mr-2"></i> <a href="#">vanessa@aurelius.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /custom handle -->

                </div>
            </div>
            <!-- /collapsible lists -->


<?php require_once admin_view("static/footer") ?>