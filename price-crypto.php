<!DOCTYPE html>
<html lang="es">

<head>
    <title>Estados Financieros - Royal Lion Investment & Associated</title>

    <?php require_once './pages/head-style.php'; ?>
</head>

<body>
    <!-- preloader start -->
    <?php require_once './pages/preloader.php'; ?>
    <!-- preloader end -->

    <!--  header-section start  -->
    <header class="header-section transparent--header header--fixed">
        <?php require_once './pages/headband.php'; ?>

        <?php require_once './pages/navigation/navigation-pages.php'; ?>
    </header>
    <!--  header-section end  -->

    <!-- inner-page-banner-section start -->
    <section class="inner-page-banner-section gradient-bg">
        <div class="illustration-img"><img src="./assets/images/inner-page-banner-illustrations/about.png" alt="image-illustration"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-page-content-area">
                        <h1 class="page-title">Cotización de las Criptomonedas</h1>
                        <nav aria-label="breadcrumb" class="page-header-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">Inicio</a></li>
                                <li class="breadcrumb-item">Cumplimiento</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inner-page-banner-section end -->

    <!-- partner-section start -->
    <section class="community-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <span class="section-subtitle">Infórmate</span>
                        <h2 class="section-title kyc">Cotización de las Criptomonedas</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="faq-area crypto">
                <div class="single-faq">
                    <div id="content-cryptos" class="faq-body crypto-body">
                        <div class="row">
                            <div class="col-lg-12 px-0">
                                <div class="community-thumb"><img src="./assets/images/elements/community-img.png" alt="image"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {
                                            "symbol": "BITSTAMP:BTCUSD",
                                            "width": "100%",
                                            "height": "100%",
                                            "locale": "es",
                                            "dateRange": "1D",
                                            "colorTheme": "light",
                                            "trendLineColor": "#37a6ef",
                                            "underLineColor": "#E3F2FD",
                                            "isTransparent": false,
                                            "autosize": true,
                                            "largeChartUrl": ""
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {
                                            "symbol": "KRAKEN:ETHUSD",
                                            "width": "100%",
                                            "height": "100%",
                                            "locale": "es",
                                            "dateRange": "1D",
                                            "colorTheme": "light",
                                            "trendLineColor": "#37a6ef",
                                            "underLineColor": "#E3F2FD",
                                            "isTransparent": false,
                                            "autosize": true,
                                            "largeChartUrl": ""
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {
                                            "symbol": "COINBASE:LTCUSD",
                                            "width": "100%",
                                            "height": "100%",
                                            "locale": "es",
                                            "dateRange": "1D",
                                            "colorTheme": "light",
                                            "trendLineColor": "#37a6ef",
                                            "underLineColor": "#E3F2FD",
                                            "isTransparent": false,
                                            "autosize": true,
                                            "largeChartUrl": ""
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                            <div class="col-xl-3 col-sm-6">

                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div class="tradingview-widget-container__widget"></div>
                                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                                        {
                                            "symbol": "KRAKEN:USDTUSD",
                                            "width": "100%",
                                            "height": "100%",
                                            "locale": "es",
                                            "dateRange": "1D",
                                            "colorTheme": "light",
                                            "trendLineColor": "#37a6ef",
                                            "underLineColor": "#E3F2FD",
                                            "isTransparent": false,
                                            "autosize": true,
                                            "largeChartUrl": ""
                                        }
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partner-section end -->

    <!-- footer-section start -->
    <?php require_once './pages/footer.php'; ?>
    <!-- footer-section end -->

    <?php require_once './pages/fixed-to-top.php'; ?>

    <?php require_once './pages/scripts.php'; ?>
</body>

</html>