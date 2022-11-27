<div class="header-top pd-0">
    <!-- <div class="bg-color-azul ticker-container">
        <div class="ticker-text" id="tickerData"></div>
    </div> -->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "Nasdaq 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "BTC/USD"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "ETH/USD"
                    },
                    {
                        "description": "DASH/USD",
                        "proName": "KRAKEN:DASHUSD"
                    }
                ],
                "showSymbolLogo": true,
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "adaptive",
                "locale": "es"
            }
        </script>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-6 col-md-6 p-0">
                <div class="header-top-left d-flex">
                    <div class="share-announcement1">
                        TASA DE CAMBIO BCV <span class="price" id="bcv2">
                            <?php
                            $data = json_decode(file_get_contents('https://api.exchangedyn.com/markets/quotes/usdves/bcv'), true);
                            $bs_usb = number_format($data['sources']['BCV']['quote'],2, ',', '.');
                            echo $bs_usb;
                            ?>
                        </span> BS/USD
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 p-0">
                <div class="header-top-right d-flex align-items-center justify-content-end">
                    <div class="share-announcement2">
                        PRECIO DEL ORO <span class="price">
                            <?php
                            $data = file_get_contents("https://es.investing.com/commodities/gold");

                            if (preg_match('|<span class="text-2xl" data-test="instrument-price-last">(.*?)</span>|is', $data, $cap)) {
                                print($cap[1]);
                            } else {
                                echo 1000;
                            }
                            ?>
                        </span> USD/1oz
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>