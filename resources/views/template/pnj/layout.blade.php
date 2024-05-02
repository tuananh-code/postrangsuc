<div>
    <div>
        <div class="splide" aria-label="Basic Structure Example" id="splide">
            <div class="splide__track">
                <ul class="splide__list reset-li">
                    <li class="splide__slide"><img src="{{ asset('pnj-all/pnj-img/ngaydoi88-1972x640-2__1_.png') }}"
                            alt="">
                    </li>
                    <li class="splide__slide"><img src="{{ asset('pnj-all/pnj-img/combo-t7-1972_x_640_CTA.jpeg') }}"
                            alt="">
                    </li>
                    <li class="splide__slide"><img
                            src="{{ asset('pnj-all/pnj-img/PNJ_Fast_x_Ahamove-20230308T114624Z-001_1972x640LDP_CTA.jpeg') }}"
                            alt=""></li>
                    <li class="splide__slide"><img src="{{ asset('pnj-all/pnj-img/ngaydoi88-1972x640-2__1_.png') }}"
                            alt="">
                    </li>
                    <li class="splide__slide"><img
                            src="{{ asset('pnj-all/pnj-img/PNJ_Fast_x_Ahamove-20230308T114624Z-001_1972x640LDP_CTA.jpeg') }}"
                            alt=""></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="hide-desktop overflow-auto">
        <div class="d-flex w-mobile">
            <div class="m-1 w-5">
                <img src="{{ asset('pnj-all/pnj-img/qua-tang-494x247CTA.jpeg') }}" alt="" srcset="">
            </div>
            <div class="m-1 w-5">
                <img src="{{ asset('pnj-all/pnj-img/StylePNJ_494x247.jpeg') }}" alt="" srcset="">
            </div>
            <div class="m-1 w-5">
                <img src="{{ asset('pnj-all/pnj-img/qua-tang-494x247CTA.jpeg') }}" alt="" srcset="">
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <div class="hide-mobile">
                <div class="d-flex">
                    <div class="m-2">
                        <img src="{{ asset('pnj-all/pnj-img/qua-tang-494x247CTA.jpeg') }}" alt=""
                            srcset="">
                    </div>
                    <div class="m-2">
                        <img src="{{ asset('pnj-all/pnj-img/StylePNJ_494x247.jpeg') }}" alt="" srcset="">
                    </div>
                    <div class="m-2">
                        <img src="{{ asset('pnj-all/pnj-img/qua-tang-494x247CTA.jpeg') }}" alt=""
                            srcset="">
                    </div>
                </div>
            </div>
            <div class="m-4">
                <h3 class="m-2">Danh mục</h3>
                <div class="splide d-flex justify-content-center align-items-center gradint borderra m-4"
                    id="splideTrend" aria-label="Placeholder Example">
                    <div class="position-relative notset col-12">
                        <div class="splide__arrows is-overflow">
                            <button class="splide__arrow splide__arrow--prev splide--arrow prev">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button class="splide__arrow splide__arrow--next splide--arrow next">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                        <div class="splide__track h-full leftMobile">
                            <ul class="splide__list d-flex align-items-center justify-content-center">
                                @foreach ($arrayCategory as $category)
                                    <li class="splide__slide d-flex align-items-center">
                                        <a data-easing="easeOutCubic" href="#{{ $category['name'] }}">
                                            <img src="{{ asset('uploads/img/' . $category['description']) }}"
                                                alt="">
                                            <span
                                                class='d-flex align-items-center justify-content-center text-center'>{{ $category['name'] }}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos='fade-up' data-aos-duration='1200'>
                <h3 class="m-4">Thương hiệu</h3>
                <div class="splide" id='splideBrand'>
                    <div class="relative">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev splide--arrow prev">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button class="splide__arrow splide__arrow--next splide--arrow next">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
                        </div>
                        <div class="splide__track">
                            <ul class="splide__list h-brand">
                                <li class="splide__slide" data-splide-interval="3000">
                                    <div>
                                        <div>
                                            <img src="{{ asset('pnj-all/pnj-img/style-t5-1200x1200.png') }}"
                                                alt="" class="rounded-img">
                                        </div>
                                        <div class="son-img shadow">
                                            <img src="{{ asset('pnj-all/pnj-img/pnj disney-01.png') }}" alt="">
                                        </div>
                                    </div>

                                </li>
                                <li class="splide__slide" data-splide-interval="3000">
                                    <div>
                                        <div>
                                            <img src="{{ asset('pnj-all/pnj-img/block-brands-disney.png') }}"
                                                alt="" class="rounded-img">
                                        </div>
                                        <div class="son-img-2 shadow">
                                            <img src="{{ asset('pnj-all/pnj-img/style-logo_1.svg') }}" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide" data-splide-interval="3000">
                                    <div>
                                        <div>
                                            <img src="{{ asset('pnj-all/pnj-img/block-brands-watch.png') }}"
                                                alt="" class="rounded-img">
                                        </div>
                                        <div class="son-img-3 shadow">
                                            <img src="{{ asset('pnj-all/pnj-img/pnj-watch_1.svg') }}" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide" data-splide-interval="3000">
                                    <div>
                                        <div>
                                            <img src="{{ asset('pnj-all/pnj-img/style-t5-1200x1200.png') }}"
                                                alt="" class="rounded-img">
                                        </div>
                                        <div class="son-img shadow">
                                            <img src="{{ asset('pnj-all/pnj-img/pnj disney-01.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide" data-splide-interval="3000">
                                    <div>
                                        <div>
                                            <img src="{{ asset('pnj-all/pnj-img/block-brands-watch.png') }}"
                                                alt="" class="rounded-img">
                                        </div>
                                        <div class="son-img-3 shadow">
                                            <img src="{{ asset('pnj-all/pnj-img/pnj-watch_1.svg') }}" alt="">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos='zoom-in' data-aos-duration='1200'>
                <div class="m-4">
                    <h3 class="m-2">Sản phẩm bán chạy</h3>
                    <div class="splide d-flex justify-content-center align-items-center m-4" id="splideSales"
                        aria-label="Placeholder Example">
                        <div class="position-relative">
                            <div class="splide__arrows">
                                <button class="splide__arrow splide__arrow--prev splide--arrow prev">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>
                                <button class="splide__arrow splide__arrow--next splide--arrow next">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                            <div class="splide__track">
                                <ul class="splide__list reset-li relative" style="width:98%">
                                    @foreach ($arrayProduct as $all)
                                        <li data-id-media="{{ $all['id'] }}"
                                            class="splide__slide sales-gra d-flex flex-column justify-content-center">
                                            <div class="zoom"
                                                onclick="redirectToProduct('{{ route('product.template', $all['id']) }}')">
                                                <img class="mySlides-{{ $all['id'] }} fadeS slideShow"
                                                    src="{{ asset('uploads/img/' . $all['image']) }}" alt="">
                                                @foreach ($arrayMedia as $key => $value)
                                                    @if ($key == $all['id'])
                                                        @foreach ($value as $item)
                                                            <img class="mySlides-{{ $all['id'] }} fadeS slideHide"
                                                                src="{{ asset('uploads/media/' . $item) }}"
                                                                alt="">
                                                        @endforeach
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="relative" style="z-index: 123"
                                                onclick="redirectToProduct('{{ route('product.template', $all['id']) }}')">
                                                <span
                                                    class='text-center d-flex align-items-center justify-content-center'>{{ $all['product'] }}</span>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span data-price='{{ $all['max_price'] }}'
                                                        class='font text-center d-flex align-items-center justify-content-center'
                                                        style="color: burlywood; font-weight:bold; "></span>
                                                    <p class="font" style="color: burlywood; font-weight:bold">
                                                        &#8363;</p>
                                                </div>
                                            </div>
                                            @foreach ($arrayMedia as $key => $value)
                                                @if ($key == $all['id'])
                                                    @if ($value)
                                                        <a class="prevImg"
                                                            onclick="plusSlides(-1, {{ $all['id'] }})">&#10094;</a>
                                                        <a class="nextImg"
                                                            onclick="plusSlides(1, {{ $all['id'] }})">&#10095;</a>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center flex-col" data-aos='fade-up'
                data-aos-duration='1200'>
                <div class="w-60">
                    <h3 class="m-2">Bộ sưu tập</h3>
                    <div>
                        <img src="{{ asset('pnj-all/pnj-img/rapunzel-320.425.png') }}" alt=""
                            class="rounded-img shadow">
                    </div>
                </div>
                <div class="m-4 w-100">
                    <div class="splide d-flex justify-content-center align-items-center m-4" id="splideCollections"
                        aria-label="Placeholder Example">
                        <div class="position-relative">
                            <div class="splide__arrows">
                                <button class="splide__arrow splide__arrow--prev splide--arrow prevCollections">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </button>
                                <button class="splide__arrow splide__arrow--next splide--arrow nextCollections">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                            <div class="splide__track">
                                <ul class="splide__list" style="width:97%">
                                    <li class="splide__slide sales-gra">
                                        <div class="hover-zoom">
                                            <img src="{{ asset('pnj-all/pnj-img/sp-gbxmxmw002351-bong-tai-vang-trang-10k-dinh-da-ecz-pnj-1.png') }}"
                                                alt="">
                                        </div>

                                        <span class='text-center d-flex align-items-center justify-content-center'>Nhẫn
                                            cưới vàng trắng 14k <br> PNJ00099876551</span>
                                    </li>
                                    <li class="splide__slide sales-gra">
                                        <div class="hover-zoom">
                                            <img src="{{ asset('pnj-all/pnj-img/gnddddw003910-nhan-kim-cuong-vang-trang-14k-pnj.png') }}"
                                                alt="">
                                        </div>

                                        <span class='text-center d-flex align-items-center justify-content-center'>Nhẫn
                                            kim
                                            cương xứ Skovania <br> XK8777676512</span>
                                    </li>
                                    <li class="splide__slide sales-gra">
                                        <div class="hover-zoom">
                                            <img src="{{ asset('pnj-all/pnj-img/sp-gbxmxmw002351-bong-tai-vang-trang-10k-dinh-da-ecz-pnj-1.png') }}"
                                                alt="">
                                        </div>

                                        <span class='text-center d-flex align-items-center justify-content-center'>
                                            Mặt Dây
                                            chuyền vàng trắng ngọc trai <br> PLM791103232</span>
                                    </li>
                                    <li class="splide__slide sales-gra">
                                        <div class="hover-zoom">
                                            <img src="{{ asset('pnj-all/pnj-img/sp-gnatxmh000003-nhan-vang-14k-dinh-da-disney-pnj-tangled-1.png') }}"
                                                alt="">
                                        </div>

                                        <span
                                            class='text-center d-flex align-items-center justify-content-center'>Trang
                                            sức bạc gắn đá 14k <br> PNJ099000712</span>
                                    </li>
                                    <li class="splide__slide sales-gra">
                                        <div class="hover-zoom">
                                            <img src="{{ asset('pnj-all/pnj-img/gldrwb60410.106-lac-tay-pnj-vang-trang-10k-dinh-da-ecz-01.png') }}"
                                                alt="">
                                        </div>

                                        <span class='text-center d-flex align-items-center justify-content-center'>Bông
                                            tai
                                            vàng 9999 <br> 992716131</span>
                                    </li>
                                    <li class="splide__slide sales-gra">
                                        <div class="hover-zoom">
                                            <img src="{{ asset('pnj-all/pnj-img/gnddddw003910-nhan-kim-cuong-vang-trang-14k-pnj.png') }}"
                                                alt="">
                                        </div>

                                        <span class='text-center d-flex align-items-center justify-content-center'>Nhẫn
                                            vàng theo trend <br> PN8987773763</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- TODO: Use file cate.blade.php --}}
        @if ($arrayCategory)
            @include('template.pnj.category')
        @endif
    </div>

</div>
<div>
    <div class="footer-back">
        <h2 class="text-center text-white h-back d-flex justify-content-center align-items-center"> Xem địa chỉ
            hệ thống cửa hàng trên toàn quốc</h2>
    </div>
    <div class="bg-dark">
        <div class="d-flex justify-content-center align-items-center container">
            <img src="{{ asset('pnj-all/pnj-img/footer-img.jpeg') }}" alt="" style="width: 92.6%">
        </div>
        <div class="d-flex justify-content-center align-items-center container">
            <iframe width="1200" height="450" src="https://www.youtube.com/embed/sv9ZjFedAJQ"
                title="PNJ 35 NĂM - GIỮ TRỌN NIỀM TIN, TÔN VINH VẺ ĐẸP" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen class="my-4"></iframe>
        </div>
    </div>
    <div class="footer-color text-white position-relative" data-aos='zoom-out' data-aos-duration='1200'>
        <div>
            <h1 class="d-flex justify-content-center pt-4 fw-normal font-auto h-footer">
                TẠI SAO CHỌN VANGTA
            </h1>
            <ul class="container d-flex">
                <li class="position-absolute position-footer">
                    <div class="w">
                        <img src="{{ asset('pnj-all/pnj-img/icon-circle-tragop.svg') }}" alt="">
                    </div>
                    <h4 class="text-dark fw-bold text-center">
                        Trả góp 0%
                    </h4>
                    <hr>
                    <p class="text-dark text-center">Áp dụng dễ dang qua thẻ tín dụng của hơn 20 ngân hàng</p>
                </li>
                <li class="position-absolute position-footer2">
                    <div class="w">
                        <img src="{{ asset('pnj-all/pnj-img/PNJfast-Giaotrong3h-circleicon.svg') }}" alt="">
                    </div>
                    <h4 class="text-dark fw-bold text-center">
                        Giao hàng nhanh
                    </h4>
                    <hr>
                    <p class="text-dark text-center">Sở hữu ngay món trang sức yêu thích trong thời gian ngắn
                        nhất</p>
                </li>
                <li class="position-absolute position-footer3">
                    <div class="w">
                        <img src="{{ asset('pnj-all/pnj-img/icon-circle-nbv.svg') }}" alt="">
                    </div>
                    <h4 class="text-dark fw-bold text-center">
                        Người bạn vàng
                    </h4>
                    <hr>
                    <p class="text-dark text-center">Giải pháp tài chính cầm đồ, kim cương, túi hiệu và đồng hồ
                        cơ</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mt-300 container mb-4" data-aos='zoom-in-up' data-aos-duration='1200'>
    <div class="mb-4">
        <h5 class="text-footer text-center mb-4">
            <span class="fw-bold">Tin tức</span>
        </h5>
    </div>
    <div class="d-flex mt-4 flex-col">
        <div class="col-lg-4 px-2">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container brightness">
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js"
                    async>
                    {
                        "colorTheme": "dark",
                        "dateRange": "12M",
                        "showChart": true,
                        "locale": "en",
                        "largeChartUrl": "",
                        "isTransparent": false,
                        "showSymbolLogo": true,
                        "showFloatingTooltip": false,
                        "width": "100%",
                        "height": "450",
                        "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                        "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                        "gridLineColor": "rgba(240, 243, 250, 0)",
                        "scaleFontColor": "rgba(106, 109, 120, 1)",
                        "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                        "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                        "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                        "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                        "tabs": [{
                                "title": "Indices",
                                "symbols": [{
                                        "s": "TVC:GOLD",
                                        "d": "GOLD/US"
                                    },
                                    {
                                        "s": "TVC:SILVER",
                                        "d": "SILVER/US"
                                    },
                                    {
                                        "s": "FOREXCOM:SPXUSD",
                                        "d": "SPXUSD"
                                    },
                                    {
                                        "s": "FX:EURUSD",
                                        "d": "EURUSD"
                                    },
                                    {
                                        "s": "NASDAQ:AAPL",
                                        "d": "APPLE"
                                    }
                                ],
                                "originalTitle": "Indices"
                            },
                            {
                                "title": "Futures",
                                "symbols": [{
                                        "s": "CME_MINI:ES1!",
                                        "d": "S&P 500 E-Mini"
                                    },
                                    {
                                        "s": "CME:6E1!",
                                        "d": "Euro"
                                    },
                                    {
                                        "s": "COMEX:GC1!",
                                        "d": "Gold"
                                    },
                                    {
                                        "s": "NYMEX:CL1!",
                                        "d": "Oil"
                                    },
                                    {
                                        "s": "NYMEX:NG1!",
                                        "d": "Gas"
                                    },
                                    {
                                        "s": "CBOT:ZC1!",
                                        "d": "Corn"
                                    }
                                ],
                                "originalTitle": "Futures"
                            },
                            {
                                "title": "Bonds",
                                "symbols": [{
                                        "s": "CBOT:ZB1!",
                                        "d": "T-Bond"
                                    },
                                    {
                                        "s": "CBOT:UB1!",
                                        "d": "Ultra T-Bond"
                                    },
                                    {
                                        "s": "EUREX:FGBL1!",
                                        "d": "Euro Bund"
                                    },
                                    {
                                        "s": "EUREX:FBTP1!",
                                        "d": "Euro BTP"
                                    },
                                    {
                                        "s": "EUREX:FGBM1!",
                                        "d": "Euro BOBL"
                                    }
                                ],
                                "originalTitle": "Bonds"
                            },
                            {
                                "title": "Forex",
                                "symbols": [{
                                        "s": "FX:EURUSD",
                                        "d": "EUR to USD"
                                    },
                                    {
                                        "s": "FX:GBPUSD",
                                        "d": "GBP to USD"
                                    },
                                    {
                                        "s": "FX:USDJPY",
                                        "d": "USD to JPY"
                                    },
                                    {
                                        "s": "FX:USDCHF",
                                        "d": "USD to CHF"
                                    },
                                    {
                                        "s": "FX:AUDUSD",
                                        "d": "AUD to USD"
                                    },
                                    {
                                        "s": "FX:USDCAD",
                                        "d": "USD to CAD"
                                    }
                                ],
                                "originalTitle": "Forex"
                            }
                        ]
                    }
                </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
        <div class="col-lg-8">
            <div class="d-flex flex-col">
                <div class="col-lg-6 px-2">
                    <div class="mb-2">
                        <img src="{{ asset('pnj-all/pnj-img/qua-tang-494x247CTA.jpeg') }}" alt=""
                            class="rounded-img">
                    </div>
                    <br>
                    <div>
                        <h4 class="text-center fw-bold">Top 5 trang sức kim cương mới nhất tháng 8/2023</h4>
                        <br>
                        <p>Tháng 8 này, những siêu phẩm kim cương mới nhất sẽ tiếp tục được “cập bến” nhà PNJ.
                            Hãy
                            cùng chiêm ngưỡng top 5 điểm nhấn mới nhất hứa hẹn sẽ khuynh đảo trái tim của chị em
                            đấy!
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 px-2">
                    <div class="mb-2">
                        <img src="{{ asset('pnj-all/pnj-img/watch-t8-fix_banner__CTA_.jpeg') }}" alt=""
                            class="rounded-img">
                    </div>
                    <br>
                    <div>
                        <h4 class="text-center fw-bold">Top 5 trang sức kim cương ECZ mới nhất tháng 8/2023
                        </h4>
                        <br>
                        <p>
                            Tháng 8 này, PNJ tiếp tục chào đón quý cô bằng những siêu phẩm ECZ mới nhất. Hãy
                            cùng
                            tỏa sáng rạng ngời với top 5 điểm nhấn ECZ vừa “cập bến”, nàng nhé!
                        </p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button class="bg-light text-dark py-2 px-4 rounded">
                    Xem tất cả
                </button>
            </div>
        </div>
    </div>
</div>

<div class="position-fixed bg-white navbar hide-desktop" id="resetBar">
    <ul class="flex-center justify-content-between reset-li reset-ul font-small " id="overRide">
        <li>
            <div class="flex-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width='24' height='24' fill="currentColor"
                    class="bi bi-house-fill" viewBox="0 0 16 16">
                    <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                </svg>
            </div>
            <div>
                <p>Trang chủ</p>
            </div>
        </li>
        <li>
            <div class="flex-center mb-2">

                <svg xmlns="http://www.w3.org/2000/svg" width='24' height='24' fill="currentColor"
                    class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                    <path
                        d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z" />
                    <path
                        d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z" />
                </svg>
            </div>
            <div>
                <p>Khuyến mãi</p>
            </div>
        </li>
        <li>
            <div class="flex-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width='24' height='24' fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </div>
            <div>
                <p>Cá nhân</p>
            </div>
        </li>
        <li>
            <div class="flex-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width='24' height='24' fill="currentColor"
                    class="bi bi-bell" viewBox="0 0 16 16">
                    <path
                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                </svg>
            </div>
            <div>
                <p>Thông báo</p>
            </div>
        </li>
        <li>
            <div class="flex-center mb-2">
                <svg xmlns="http://www.w3.org/2000/svg" width='24' height='24' fill="currentColor"
                    class="bi bi-telephone-forward" viewBox="0 0 16 16">
                    <path
                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z" />
                </svg>
            </div>
            <div>
                <p>Tư vấn</p>
            </div>
        </li>
        <li class="relative navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            id="closeNav" onclick="openNav(this)">
            <div class="flex-center mb-2">
                <div class="d-block">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <div>
                <p class="font-small text-dark">Danh mục</p>
            </div>
        </li>
    </ul>
    <div class="position-absolute navOpen bg-white offcanvas rounded-8 w-100" id="offcanvasNavbar">
        <div class="d-flex justify-content-end p-2">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
                id="closeButton" onclick="closeNav()"></button>
        </div>
        <ul class="reset-ul reset">
            <li class="border-bottom">
                <div class="flex-center justify-content-between">
                    <p>Trang sức</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </li>
            <li class="border-bottom">
                <div class="flex-center justify-content-between">
                    <p>Trang sức cưới</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </li>
            <li class="border-bottom">
                <div class="flex-center justify-content-between">
                    <p>Đồng hồ</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </li>
            <li class="border-bottom">
                <div class="flex-center justify-content-between">
                    <p>Quà tặng</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </li>
            <li class="border-bottom">
                <div class="flex-center justify-content-between">
                    <p>Thương hiệu</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </li>
            <li class="border-bottom">
                <div class="flex-center justify-content-between">
                    <p>Blog</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </li>
            <li class="border-bottom">
                <div class="flex-center justify-content-between">
                    <p>Khuyến mãi</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </li>
            <li class="">
                <div class="flex-center justify-content-between">
                    <p>
                        Dịch vụ
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </div>
            </li>
        </ul>
    </div>
</div>
<button id="back-to-top-btn" class="back-to-top-btn">
    <i class="fa-solid fa-chevron-up"></i>
</button>
