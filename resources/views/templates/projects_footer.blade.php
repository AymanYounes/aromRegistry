
<!-- Footer -->
<footer class="footer p-0 bg-solid-color bg-black-111">
    <div class="container">
        <div class="row equal-height">
            <div class="col-sm-6 col-md-8 text-center border-right-black sm-height-auto">
                <div class="footer-widget pt-70 pl-60 pr-60 pt-sm-10 pl-sm-10 pr-sm-10 maxwidth400 sm-text-center">
                    <div class="footer-logo border-bottom-dot-1px pb-30">
                        <img class="mb-20" src="images/logo-0-tall.png" alt="" width="100px">
                        <p>This registries aim to create the first Mixed cohort study, retrospective and prospective cohort of patients with different rheumatic disorders from different governorates representing all of the Egyptian populations.</p>
                    </div>
                    <div class="footer-news-letter mt-30">
                        <h4 class="text-white mb-30">Subscribe Our Newsletter</h4>
                        <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                            <label class="display-block" for="mce-EMAIL"></label>
                            <div class="input-group">
                                <input type="email" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
                                <span class="input-group-btn">
                        <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                    </span>
                            </div>
                        </form>
                        <!-- Mailchimp Subscription Form Validation-->
                        <script type="text/javascript">
                            $('#footer-mailchimp-subscription-form').ajaxChimp({
                                callback: mailChimpCallBack,
                                url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                            });

                            function mailChimpCallBack(resp) {
                                // Hide any previous response text
                                var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                                    $response = '';
                                $mailchimpform.children(".alert").remove();
                                console.log(resp);
                                if (resp.result === 'success') {
                                    $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                } else if (resp.result === 'error') {
                                    $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                                }
                                $mailchimpform.prepend($response);
                            }
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-3 sm-height-auto">
                <div class="widget dark text-right sm-text-center pt-120 pb-140 pt-xs-40 pb-xs-0 maxwidth400">
                    <h5 class="widget-title">Quick Contact</h5>
                    <ul>
                        <li><a href="tel:0123456789">+(012) 345 6789</a></li>
                        <li><a href="mail:support@aromegyregistry.com">support@aromegyregistry.com</a></li>
                    </ul>
                    <ul class="social-icons icon-gray icon-circled icon-sm pull-right sm-pull-none sm-text-center mt-sm-15">
                        <li class="wow fadeInRight" data-wow-delay=".1s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow fadeInRight" data-wow-delay=".2s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow fadeInRight" data-wow-delay=".3s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow fadeInRight" data-wow-delay=".4s"><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                        <li class="wow fadeInRight" data-wow-delay=".5s"><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-nav bg-black-222 p-20">
        <div class="container pt-20 pb-0">
            <div class="row">
                <div class="col-md-12">
                    <p class="font-11 pull-left mb-sm-15 sm-text-center sm-pull-none">Copyright &copy;2019 Arom Egypt Registry. All Rights Reserved</p>

                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->