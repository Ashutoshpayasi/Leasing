<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Leasegrid</title>
    <link
        rel="shortcut icon"
        href="assets/images/favicon.svg"
        type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Marcellus&display=swap"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css" />
    <link rel="stylesheet" href="assets/vendors/animation/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/all.min.css" />
    <link
        rel="stylesheet"
        href="assets/vendors/youtube-popup/youtube-popup.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<style>
    .header {
        text-align: center;
        padding: 40px 20px;
        background: #fff;
    }

    .header h1 {
        font-size: 2.5rem;
        font-weight: 600;
        margin-bottom: 15px;
        color: var(--uniqo-dark-text);
    }

    .header p {
        font-size: 1.2rem;
        color: var(--uniqo-light-text);
    }

    .table-container {
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 40px;
        border: 1px solid #e0e0e0;
        background: #fff;
    }

    .comparison-table th {
        background: var(--uniqo-primary);
        color: #fff;
        padding: 15px;
        text-align: center;
        font-size: 1.1rem;
        font-weight: 500;
        border: 1px solid #e0e0e0;
    }

    .comparison-table td {
        padding: 15px;
        border: 1px solid #e0e0e0;
        vertical-align: middle;
    }

    .feature-column {
        background: #f8f9fa;
        font-weight: 500;
        color: var(--uniqo-dark-text);
        width: 30%;
    }

    .leasing-column {
        color: var(--uniqo-primary);
        font-weight: 400;
    }

    .loan-column {
        color: var(--uniqo-light-text);
        font-weight: 400;
    }

    .cta-section {
        background: var(--uniqo-primary);
        color: #fff;
        text-align: center;
        padding: 40px 20px;
        border-radius: 8px;
        margin-top: 30px;
    }

    .cta-section h2 {
        font-size: 2rem;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .cta-section p {
        font-size: 1.1rem;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto 30px;
    }

    .cta-button {
        display: inline-block;
        background: #fff;
        color: var(--uniqo-primary);
        padding: 12px 30px;
        text-decoration: none;
        border-radius: 4px;
        font-weight: 500;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .cta-button:hover {
        background: var(--uniqo-dark-text);
        color: #fff;
    }

    .highlight {
        color: var(--uniqo-primary);
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .header h1 {
            font-size: 2rem;
        }

        .header p {
            font-size: 1rem;
        }

        .table-container {
            padding: 10px;
        }

        .comparison-table th,
        .comparison-table td {
            padding: 12px 8px;
            font-size: 0.9rem;
        }

        .cta-section {
            padding: 30px 20px;
        }

        .cta-section h2 {
            font-size: 1.8rem;
        }

        .cta-section p {
            font-size: 1rem;
        }
    }
</style>

<body>
    <div class="custom-cursor-one"></div>
    <div class="custom-cursor-two"></div>
    <div class="preloader">
        <div class="loading-container">
            <div class="loading-image">
                <img src="assets/images/preloader-image.png" alt="logo" />
                <div class="logo-text">
                    <h1>Leasegrid</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- header start -->
    <?php include 'includes/header.php'; ?>
    <!-- header end -->
    <!-- page header start -->
    <div class="banner-section-one">
        <div class="banner-silder-one">
            <div class="banner-slide-item-one">
                <div class="banner-image-one">
                    <img
                        src="assets/images/background/banner-one-image.jpg"
                        alt="banner-image" />
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-8">
                            <div class="heading-box">
                                <h1 class="heading-title">
                                    Powering Your <br />
                                    <span>Business Growth with</span> <br />
                                    Strategic Leasing
                                </h1>
                                <p class="heading-details lead">
                                    Unlock your business's potential with our flexible and
                                    affordable leasing options. We provide tailored solutions to
                                    meet your specific needs.
                                </p>
                                <a href="about.php" class="btn btn-light btn-theme">View More +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slide-item-one">
                <div class="banner-image-one">
                    <img
                        src="assets/images/background/banner-one-image-3.jpg"
                        alt="banner-image" />
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="heading-box">

                                <h1 class="heading-title">
                                    Drive Your Business <br />
                                    <span>Forward with Our</span> <br />
                                    Leasing Expertise
                                </h1>
                                <p class="heading-details lead">
                                    From equipment to transportation, we offer a wide range of
                                    leasing services to help you succeed.
                                </p>
                                <a href="about.php" class="btn btn-light btn-theme">View More +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slide-item-one">
                <div class="banner-image-one">
                    <img
                        src="assets/images/background/banner-one-image-4.jpg"
                        alt="banner-image" />
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <div class="heading-box">

                                <h1 class="heading-title">
                                    Your Partner in <br />
                                    <span>Growth Through</span> <br />
                                    Strategic Leasing
                                </h1>
                                <p class="heading-details lead">
                                    We provide customized leasing plans that align with your
                                    business goals and financial objectives.
                                </p>
                                <a href="about.php" class="btn btn-light btn-theme">View More +</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-info"></div>
    </div>

    <div class="container">
        <div class="header">
            <h1>Lease Over Loan</h1>
            <p>Discover the Advantages of Leasing with <span class="highlight">Leasegrid</span></p>
        </div>

        <div class="table-container">
            <div class="table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Feature</th>
                            <th>Leasing</th>
                            <th>Loan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="feature-column">Initial Costs</td>
                            <td class="leasing-column">Lower initial costs with little to no down payment.</td>
                            <td class="loan-column">Significant upfront investment required.</td>
                        </tr>
                        <tr>
                            <td class="feature-column">Payment Flexibility</td>
                            <td class="leasing-column">Fixed lease payments for better budget planning.</td>
                            <td class="loan-column">Variable payments depending on interest rates.</td>
                        </tr>
                        <tr>
                            <td class="feature-column">Credit Preservation</td>
                            <td class="leasing-column">Keeps credit lines intact for other investments.</td>
                            <td class="loan-column">Uses up available credit lines.</td>
                        </tr>
                        <tr>
                            <td class="feature-column">Equipment Updates</td>
                            <td class="leasing-column">Regular upgrades to latest technology.</td>
                            <td class="loan-column">Stuck with outdated equipment until paid off.</td>
                        </tr>
                        <tr>
                            <td class="feature-column">Tax Benefits</td>
                            <td class="leasing-column">Lease payments often fully deductible as business expenses.</td>
                            <td class="loan-column">Limited tax benefits.</td>
                        </tr>
                        <tr>
                            <td class="feature-column">Maintenance</td>
                            <td class="leasing-column">Many leases include maintenance and support.</td>
                            <td class="loan-column">Maintenance costs are the responsibility of the owner.</td>
                        </tr>
                        <tr>
                            <td class="feature-column">Cash Flow</td>
                            <td class="leasing-column">Spreads cost over the useful life of the equipment.</td>
                            <td class="loan-column">Large upfront costs impact cash flow.</td>
                        </tr>
                        <tr>
                            <td class="feature-column">Approval Process</td>
                            <td class="leasing-column">Generally easier and faster approval.</td>
                            <td class="loan-column">Stricter credit requirements and longer approval times.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cta-section">
                <h2>Choose Leasing with Connect Lease</h2>
                <p>Make the smart financial choice. Choose leasing over loans and unlock the full potential of your business with Leasegrid.</p>
                <a href="#" class="cta-button">Get Started Today</a>
            </div>
        </div>
    </div>


        <?php include 'includes/footer.php'; ?>

        <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendors/jquery/jquery-3.7.1.min.js"></script>
        <script src="assets/vendors/jquery/jquery.appear.min.js"></script>
        <script src="assets/vendors/slick/slick.min.js"></script>
        <script src="assets/vendors/wow/wow.js"></script>
        <script src="assets/vendors/youtube-popup/youtube-popup.jquery.js"></script>
        <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
        <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
        <script src="assets/vendors/odometer/odometer.min.js"></script>
        <script src="assets/vendors/owl/owl.carousel.min.js"></script>
        <script src="assets/vendors/circleGraph/jquery.circleGraph.js"></script>
        <script src="assets/js/custom.js"></script>
</body>

</html>