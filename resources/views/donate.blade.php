<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <!--320-->
    <link href="{{URL::asset('images/logo.png')}}" rel="icon">
    <link rel="stylesheet" href="{{URL::asset('payment/css/pages.css')}}">
    <link rel="stylesheet" href="{{URL::asset('payment/css/pages-dependencies.css')}}">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--TRACKING-->

    <!--TRACKING END-->
    <title>Pay for Donate to LUZ DE CALCIO - Paystack</title>
    <meta name="generator" content="SEOmatic">
    <meta name="keywords" content="pay online, online payment, payment gateway, payment processor, paystack, accept payment online">
    <meta name="description" content="We shall send you updates from the organisation about your impact in bringing African inventions and innovations to limelight.">
    <meta name="referrer" content="no-referrer-when-downgrade">
    <meta name="robots" content="all">
    <meta content="1963073953927815" property="fb:profile_id">
    <meta content="en_US" property="og:locale">
    <meta content="en_ZA" property="og:locale:alternate">
    <meta content="en_GH" property="og:locale:alternate">
    <meta content="Paystack" property="og:site_name">
    <meta content="business.business" property="og:type">
    <meta content="Pay for Donate to LUZ DE CALCIO - Paystack" property="og:title">
    <meta content="We shall send you updates from the organisation about your impact in bringing African inventions and innovations to limelight." property="og:description">
    <meta content="https://public-files-paystack-prod.s3.eu-west-1.amazonaws.com/payment-page-url-previews/dB3HMlCTWODv3ljXHRwr" property="og:image">
    <meta content="1200" property="og:image:width">
    <meta content="630" property="og:image:height">
    <meta content="An image of the Paystack logo - four blue stripes, 3 long and 1 short - in the shape of a P, against a dark blue (almost black) background" property="og:image:alt">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@paystack">
    <meta name="twitter:creator" content="@paystack">
    <meta name="twitter:title" content="Pay for Donate to LUZ DE CALCIO - Paystack">
    <meta name="twitter:description" content="We shall send you updates from the organisation about your impact in bringing African inventions and innovations to limelight.">
    <meta name="twitter:image" content="https://public-files-paystack-prod.s3.eu-west-1.amazonaws.com/payment-page-url-previews/dB3HMlCTWODv3ljXHRwr">
    <meta name="twitter:image:width" content="1024">
    <meta name="twitter:image:height" content="512">
    <meta name="twitter:image:alt" content="An image of the Paystack logo - four blue stripes, 3 long and 1 short - in the shape of a P, against a dark blue (almost black) background">
    <link href="-htn0-qfys.html" rel="canonical">
    <link href="https://paystack.com/" rel="home">
    <link type="text/plain" href="https://paystack.com/humans.txt" rel="author">
    <link href="-htn0-qfys.html" rel="alternate" hreflang="x-default">
    <link href="-htn0-qfys.html" rel="alternate" hreflang="en-us">
</head>

<body class="paystack-container" style="display: none">
    <div class="paystack-color-bar"></div>
    <div id="page-okay" class="paystack-wrapper animated fadeIn" style="display: none">
        <div id="payment-page-pay" class="paystack-page">
            <div class="header">
                <div class="company-logo">
                <a href="/"><img src="{{URL::asset('images/logo.png')}}" style="width: 150px; height: 50px;"></a>
                </div>
                <div class="page-info">
                    <h3 id="page-name" class="page-name"></h3>
                    <p class="company-name">BY <span id="company-name"></span></p>
                </div>
                <div class="page-description" style="display: none">
                    <span id="page-description"></span>
                </div>
            </div>
            <div class="body">
                <form id="payment-form" name="payment-form" class="payment-form">
                    <div class="error-message">
                        <i class="fa fa-warning"></i><span></span>
                    </div>
                    <div class="element-pair">
                        <div class="element-pair-container">
                            <div class="element-wrap">
                                <div class="element-label"><span>First Name</span></div>
                                <input id="customer-first-name" type="text" class="element-is-input" data-validetta="required" required>
                            </div>
                            <div class="element-wrap">
                                <div class="element-label"><span>Last Name</span></div>
                                <input id="customer-last-name" type="text" class="element-is-input">
                            </div>
                        </div>
                    </div>
                    <div class="element-wrap">
                        <div class="element-label"><span>Email Address</span></div>
                        <input id="customer-email" type="email" class="element-is-input" data-validetta="required,email" required>
                    </div>
                    <div id="phone-number" style="display: none" class="element-wrap">
                        <div class="element-label"><span>Phone Number</span></div>
                        <input id="customer-phone" type="tel" class="element-is-input" data-validetta="required,number" required>
                    </div>
                    <div class="element-pair">
                        <div class="element-label"><span>Amount to charge</span></div>
                        <div class="element-pair-container">
                            <div class="element-wrap element-wrap-for-select element-wrap-on-left">
                                <select id="payment-currency-options" class="element-is-select" disabled="true">
                                </select>
                            </div>
                            <div class="element-wrap element-wrap-on-right">
                                <input id="payment-amount" type="text" class="element-is-input" data-validetta="required" required>
                            </div>
                        </div>
                    </div>
                    <div id="custom-fields"></div>
                    <div class="element-wrap element-wrap-for-submit">
                        <button type="submit" id="pay-btn" class="button button-is-green">Pay Now</button>
                    </div>
                    <script src="{{URL::asset('js.paystack.co/v2/inline.js')}}"></script>
                </form>
                <div id="payment-success" class="payment-success animated fadeIn text-center hidden">
                    <img src="{{URL::asset('payment/img/success.png')}}">
                    <h3>Your payment was successful</h3>
                    <h5 class="payment-success-message"></h5>
                </div>
                <div id="payment-pending" class="payment-pending animated fadeIn text-center hidden">
                    <img src="https://paystack.com/assets/payment/img/envelope.svg">
                    <h3>Your payment is almost complete!</h3>
                    <h5>Once we receive your payment, we’ll complete your transaction and send you a receipt</h5>
                </div>
            </div>
        </div>

        <div id="payment-page-product" class="paystack-page">
            <div class="header">
                <div class="company-logo">
                    <img id="company-logo-img" src="#" alt="Business Logo">
                </div>
                <div class="page-info">
                    <h3 id="page-name" class="page-name"></h3>
                    <p class="company-name">BY <span id="company-name"></span></p>
                </div>
                <div class="page-description" style="display: none">
                    <span id="page-description"></span>
                </div>
            </div>
            <div class="body">
                <div id="products" class="product-container" data-testid="product-container">
                </div>
                <form id="payment-form" name="payment-form" class="payment-form" style="border-radius: 0 0 4px 4px">
                    <div class="error-message">
                        <i class="fa fa-warning"></i><span></span>
                    </div>
                    <div class="element-pair">
                        <div class="element-pair-container">
                            <div class="element-wrap">
                                <div class="element-label"><span>First Name</span></div>
                                <input id="customer-first-name" type="text" class="element-is-input" data-validetta="required" required>
                            </div>
                            <div class="element-wrap">
                                <div class="element-label"><span>Last Name</span></div>
                                <input id="customer-last-name" type="text" class="element-is-input" data-validetta="required" required>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrap">
                        <div class="element-label"><span>Email Address</span></div>
                        <input id="customer-email" type="email" class="element-is-input" data-validetta="required,email" required>
                    </div>
                    <div id="phone-number" style="display: none" class="element-wrap">
                        <div class="element-label"><span>Phone Number</span></div>
                        <input id="customer-phone" type="tel" class="element-is-input" data-validetta="required,number" required>
                    </div>
                    <div id="custom-fields"></div>
                    <div class="element-wrap element-wrap-for-submit">
                        <button type="submit" id="pay-btn" class="button button-full button-is-green">Pay Now</button>
                    </div>
                    <script src="{{URL::asset('js.paystack.co/v2/inline.js')}}"></script>
                </form>
                <div id="payment-success" class="payment-success animated fadeIn text-center hidden">
                    <img src="{{URL::asset('payment/img/success.png')}}" alt="">
                    <h3>Your payment was successful</h3>
                    <h5 class="payment-success-message"></h5>
                </div>
                <div id="payment-pending" class="payment-pending animated fadeIn text-center hidden">
                    <img src="https://paystack.com/assets/payment/img/envelope.svg">
                    <h3>Your payment is almost complete!</h3>
                    <h5>Once we receive your payment, we’ll complete your transaction and send you a receipt</h5>
                </div>
            </div>
        </div>

        <div id="payment-page-subscribe" class="paystack-page">
            <div class="header">
                <div class="company-logo">
                    <img id="company-logo-img" src="#">
                </div>
                <div class="page-info">
                    <h3 id="page-name" class="page-name"></h3>
                    <p class="company-name">BY <span id="company-name"></span></p>
                </div>
                <div class="page-description" style="display: none">
                    <span id="page-description"></span>
                </div>
                <div class="plan-info">
                    You will be charged
                    NGN
                    <span class="plan-amount" id="plan-amount"></span> <span id="plan-interval"></span>
                </div>
            </div>
            <div class="body">
                <form id="payment-form" name="payment-form" class="payment-form">
                    <div class="error-message">
                        <i class="fa fa-warning"></i><span></span>
                    </div>
                    <div class="element-pair">
                        <div class="element-pair-container">
                            <div class="element-wrap">
                                <div class="element-label"><span>First Name</span></div>
                                <input id="customer-first-name" type="text" class="element-is-input" data-validetta="required" required>
                            </div>
                            <div class="element-wrap">
                                <div class="element-label"><span>Last Name</span></div>
                                <input id="customer-last-name" type="text" class="element-is-input">
                            </div>
                        </div>
                    </div>
                    <div class="element-wrap">
                        <div class="element-label"><span>Email Address</span></div>
                        <input id="customer-email" type="email" class="element-is-input" data-validetta="required,email" required>
                    </div>
                    <div class="element-wrap" id="phone-number" style="display: none;">
                        <div class="element-label"><span>Phone Number</span></div>
                        <input id="customer-phone" type="tel" class="element-is-input" data-validetta="required,phone" required>
                    </div>
                    <div id="custom-fields"></div>
                    <div class="element-wrap element-wrap-for-submit">
                        <button type="submit" id="pay-btn" class="button button-is-green">Pay now and subscribe to this plan</button>
                    </div>
                    <script src="{{URL::asset('js.paystack.co/v2/inline.js')}}"></script>
                </form>
                <div id="payment-fineprint" class="fineprint">
                    We will always send you a confirmation email before charging so you can cancel at will.
                </div>
                <div id="payment-success" class="payment-success animated fadeIn text-center hidden">
                    <img src="{{URL::asset('payment/img/success.png')}}" alt="">
                    <h3>Your subscription was successful</h3>
                    <h5 class="payment-success-message"></h5>
                </div>
                <div id="payment-pending" class="payment-pending animated fadeIn text-center hidden">
                    <img src="https://paystack.com/assets/payment/img/envelope.svg">
                    <h3>Your payment is almost complete!</h3>
                    <h5>Once we receive your payment, we’ll complete your transaction and send you a receipt</h5>
                </div>
            </div>
        </div>
        <div id="payment-page-plan" class="paystack-page">
            <div class="header">
                <div class="company-logo">
                    <img id="company-logo-img" src="#">
                </div>
                <div class="page-info">
                    <h3 id="page-name" class="page-name"></h3>
                    <p class="company-name">BY <span id="company-name"></span></p>
                </div>
                <div class="page-description" style="display: none">
                    <span id="page-description"></span>
                </div>
            </div>
            <div class="body">
                <form id="payment-form" name="payment-form" class="payment-form">
                    <div class="error-message">
                        <i class="fa fa-warning"></i><span></span>
                    </div>
                    <div class="element-pair">
                        <div class="element-pair-container">
                            <div class="element-wrap">
                                <div class="element-label"><span>First Name</span></div>
                                <input id="customer-first-name" type="text" class="element-is-input" data-validetta="required" required>
                            </div>
                            <div class="element-wrap">
                                <div class="element-label"><span>Last Name</span></div>
                                <input id="customer-last-name" type="text" class="element-is-input">
                            </div>
                        </div>
                    </div>
                    <div class="element-wrap">
                        <div class="element-label"><span>Email Address</span></div>
                        <input id="customer-email" type="email" class="element-is-input" data-validetta="required,email" required>
                    </div>
                    <div id="phone-number" style="display: none" class="element-wrap">
                        <div class="element-label"><span>Phone Number</span></div>
                        <input id="customer-phone" type="tel" class="element-is-input" data-validetta="required,phone" required>
                    </div>
                    <div class="element-pair element-pair-is-currency">
                        <div class="element-label"><span>Amount to charge</span></div>
                        <div class="element-pair-container">
                            <div class="element-wrap element-wrap-for-select element-wrap-on-left">
                                <select id="payment-currency-options" class="element-is-select" disabled="true">
                                    <option value="NGN">NGN</option>
                                </select>
                            </div>
                            <div class="element-wrap element-wrap-on-right">
                                <input id="payment-amount" type="text" class="element-is-input" data-validetta="required" required>
                            </div>
                        </div>
                    </div>
                    <div class="element-pair">
                        <div class="element-pair-container">
                            <div class="element-wrap element-wrap-for-select" id="plan-interval-field">
                                <div class="element-label"><span>Interval</span></div>
                                <select id="plan-interval-options" class="element-is-select">
                                    <option value="hourly">Hourly</option>
                                    <option value="daily">Daily</option>
                                    <option value="weekly" selected="true">Weekly</option>
                                    <option value="quarterly">Quarterly</option>
                                    <option value="monthly">Monthly</option>
                                    <option value="biannually">Biannually</option>
                                    <option value="annually">Annually</option>
                                </select>
                            </div>
                            <div class="element-wrap element-wrap-for-select" id="plan-limit-default">
                                <div class="element-label"><span>How many payments</span></div>
                                <select id="set-plan-limit" class="element-is-select">
                                    <option value="indefintely">Charge me indefinitely</option>
                                    <option value="limited">Set a limit</option>
                                </select>
                            </div>
                            <div class="element-wrap" id="plan-limit-active" style="display: none">
                                <div class="element-label"><span>How many payments</span></div>
                                <input id="plan-limit" type="text" class="element-is-input">
                                <span id="revert-plan-limit" class="element-icon element-icon-is-cancel"></span>
                            </div>
                        </div>
                    </div>
                    <div id="custom-fields"></div>
                    <div id="payment-start-date" class="element-wrap" style="display: none;">
                        <label class="element-label" for="change-payment-start-date-input">
                            <input id="change-payment-start-date-input" type="checkbox"> Change my next charge date
                        </label>
                        <div id="change-payment-start-date" class="element-wrap" style="display: none;">
                            <input id="plan-start-date" type="text" class="element-is-input" placeholder="Next Charge Date">
                        </div>
                    </div>
                    <div class="element-wrap element-wrap-for-submit">
                        <button type="submit" id="pay-btn" class="button button-is-wide button-is-green">Pay now and subscribe to this plan</button>
                    </div>
                    <script src="{{URL::asset('js.paystack.co/v2/inline.js')}}"></script>
                </form>
                <div id="payment-fineprint" class="fineprint">
                    We will always send you a confirmation email before charging so you can cancel at will.
                </div>
                <div id="payment-success" class="payment-success animated fadeIn text-center hidden">
                    <img src="{{URL::asset('payment/img/success.png')}}" alt="">
                    <h3>Your subscription was successful</h3>
                    <h5 class="payment-success-message"></h5>
                </div>
                <div id="payment-pending" class="payment-pending animated fadeIn text-center hidden">
                    <img src="https://paystack.com/assets/payment/img/envelope.svg">
                    <h3>Your subscription is almost complete!</h3>
                    <h5>Once we receive your payment, we’ll complete your subscription and send you a receipt</h5>
                </div>
            </div>
        </div>
    </div>
    <div id="paystack-footer" class="paystack-ghs-footer animated fadeIn">
        <a target="_blank" href="https://paystack.com/what-is-paystack">
            <img alt="Paystack secured badge" src="{{URL::asset('payment/img/paystack-badge-cards-ngn.png')}}" />
        </a>
    </div>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@graph": [{
                "@type": "WebSite",
                "author": {
                    "@id": "https://paystack.com#identity"
                },
                "copyrightHolder": {
                    "@id": "https://paystack.com#identity"
                },
                "creator": {
                    "@id": "#creator"
                },
                "description": "We shall send you updates from the organisation about your impact in bringing African inventions and innovations to limelight.",
                "image": {
                    "@type": "ImageObject",
                    "url": "https://assets.paystack.com/assets/img/hero/paystack-opengraph.png"
                },
                "mainEntityOfPage": "https://paystack.com/pay/-htn0-qfys",
                "name": "Pay for Donate to LUZ DE CALCIO - Paystack",
                "url": "https://paystack.com/pay/-htn0-qfys"
            }, {
                "@id": "https://paystack.com#identity",
                "@type": "Corporation",
                "address": {
                    "@type": "PostalAddress",
                    "addressCountry": "Nigeria",
                    "addressRegion": "Lagos",
                    "postalCode": "N/A",
                    "streetAddress": "3A Ladoke Akintola, Ikeja GRA"
                },
                "contactPoint": [{
                    "@type": "ContactPoint",
                    "contactType": "customer support",
                    "telephone": "+234 1 631 6160"
                }],
                "description": "Over 17,000 businesses in Nigeria use Paystack to accept payments online quickly, and securely.",
                "email": "hello@paystack.com",
                "founder": "Shola Akinlade",
                "foundingDate": "2015",
                "foundingLocation": "Lagos, Nigeria",
                "image": {
                    "@type": "ImageObject",
                    "height": "800",
                    "url": "https://website-v3-assets.s3.amazonaws.com/assets/img/hero/Paystack-mark-white-twitter.png",
                    "width": "800"
                },
                "logo": {
                    "@type": "ImageObject",
                    "height": "60",
                    "url": "https://assets.paystack.com/assets/img/hero/_600x60_fit_center-center_82_none/Paystack-mark-white-twitter.png?mtime=1535198005",
                    "width": "60"
                },
                "name": "Paystack",
                "sameAs": ["https://twitter.com/paystack", "https://www.facebook.com/PaystackHQ/", "https://www.linkedin.com/company/paystack/", "https://www.youtube.com/paystackhq", "https://www.instagram.com/paystackhq/"],
                "telephone": "+234 1 631 6160",
                "url": "https://paystack.com"
            }, {
                "@id": "#creator",
                "@type": "Organization"
            }, {
                "@type": "BreadcrumbList",
                "description": "Breadcrumbs list",
                "itemListElement": [{
                    "@type": "ListItem",
                    "item": "https://paystack.com",
                    "name": "Home",
                    "position": 1
                }],
                "name": "Breadcrumbs"
            }]
        }
    </script>
</body>

<style>
    .element-helper {
        font-size: 13px;
        color: #777;
        margin-top: 5px;
    }

    .summary {
        border-top: solid 1px #e6e6e6;
        margin-top: 20px;
        padding: 20px 0 0;
    }

    .summary p {
        font-size: 14px;
        font-weight: bold;
        margin: 0;
    }

    .button-is-wide {
        width: 100%;
    }
</style>
<script src="{{URL::asset('payment/js/pages-dependencies.min.js')}}"></script>
<script src="{{URL::asset('payment/js/pages.min.js')}}"></script>
<script src="{{URL::asset('payment/js/vendor/dompurify.min.js')}}"></script>
<script>
    init({
        "ref": "0VygVsrGVcdnMD0",
        "id": 448829,
        "name": "Donate to LUZ DE CALCIO",
        "slug": "-htn0-qfys",
        "description": "We shall send you updates from the organisation about your impact in bringing African inventions and innovations to limelight.",
        "currency": "NGN",
        "amount": 0,
        "domain": "live",
        "custom_fields": [],
        "collect_phone": true,
        "type": "payment",
        "createdAt": "2021-01-03T19:55:07.000Z",
        "integration": {
            "key": "pk_live_7300182c6b8f500c9300c4b0da8fcebc7061ea68",
            "name": "LUZ DE CALCIO CENTER FOR SUPPORT OF AFRICAN INNOVATIONS",
            "logo": "https:\/\/public-files-paystack-prod.s3.eu-west-1.amazonaws.com\/integration-logos\/paystack.jpg",
            "allowed_currencies": ["NGN"]
        },
        "metadata": {
            "image_path": "https:\/\/public-files-paystack-prod.s3.eu-west-1.amazonaws.com\/payment-page-url-previews\/dB3HMlCTWODv3ljXHRwr"
        },
        "split_code": null
    }, "-htn0-qfys.html\/\/api.paystack.co");
</script>
<script defer src="{{URL::asset('applepay.cdn-apple.com/jsapi/v1/apple-pay-sdk.js')}}"></script>

</html>