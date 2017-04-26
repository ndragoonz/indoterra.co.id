<?php $this->load->view('includes/header') ?>
        <div id="content">
            <div id="page-title">


                <div class="container clearfix">

                    <h1>Page Not Found<span>/ Error 404</span></h1>

                </div>


            </div>


            <div class="content-wrap">


                <div class="container clearfix">


                    <div class="error-404">

                        <span>ooopss..! error</span>404

                    </div>

                    <div class="error-404-meta">

                        <form action="search-results.php" method="get">

                            <input type="text" id="error404-search" name="q" value="" placeholder="Search here &amp; Find yourself a Way..." />

                            <input type="submit" id="error404-search-submit" name="error404-search-submit" value="submit" />

                        </form>

                    </div>


                </div>


            </div>


        </div>


<?php $this->load->view('includes/footer') ?>
