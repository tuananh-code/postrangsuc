<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNJ Template</title>
    {{-- Must use asset --}}
    <link rel="stylesheet" href="{{ asset('pnj-all/Bootstrap-css/bootstrap.min.css') }}">
    <script src="{{ asset('pnj-all/Bootstrap-js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    {{-- Slide Library --}}
    <link rel="stylesheet" href="{{ asset('pnj-all/splide-4.0.7/dist/css/splide.min.css') }}">
    <script type="module" src="{{ asset('pnj-all/splide-4.0.7/dist/js/splide.min.js') }}"></script>
    {{-- For zoom image --}}
    <link rel="stylesheet" href="{{ asset('pnj-all/cssmdb/mdb.min.css') }}">
    <script src="{{ asset('pnj-all/jsmdb/mdb.min.js') }}"></script>
    {{-- Onscroll library --}}
    <link rel="stylesheet" href="{{ asset('pnj-all/aos-master/dist/aos.css') }}">
    <script src="{{ asset('pnj-all/aos-master/dist/aos.js') }}"></script>
    {{-- Click scroll library --}}
    <script src="{{ asset('pnj-all/smooth-scroll-master/dist/smooth-scroll.polyfills.js') }}"></script>
    {{-- Put link custom in the last to override library --}}
    <link rel="stylesheet" href="{{ asset('pnj-all/css/pnjmain.css?v=2.0') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <style>
        .prev,
        .next {
            left: 50% !important;
        }

        .border-n{
            border: 4px solid  rgb(1, 1, 134);
        }

        .pxx-2{
            padding: .25rem .75rem !important;
        }

        .bg-form{
            background: #fbf9f1;
            color: rgb(1, 1, 134)
        }

        .splide__arrow--prev,
        .splide__arrows--ttb {
            top: -1.4em !important;
        }

        .splide__arrow--next,
        .splide__arrows--ttb {
            bottom: -1.4em !important;
        }

        .prev-product {
            left: -6% !important;
            top: 3.5em !important;
        }

        .next-product {
            right: -6% !important;
        }

        .cursor {
            cursor: pointer;
        }

        .shadow {
            box-shadow: 0 0.2rem 0.3rem rgba(0, 0, 0, .15) !important;
        }

        a:hover {
            color: black !important;
        }

        @media only screen and (max-width: 700px) {
            .hide-mobile {
                display: none !important;
            }

            .splide__pagination__page.is-active {
                background: black !important;
            }

            .splide__pagination {
                bottom: -2em;
            }

            .mt-mobile {
                margin-top: 2em
            }
        }
    </style>
    @yield('style')
    <header class="shadow relative mb-2" style="z-index: 1234">
        <div class="hide-mobile container">
            <ul class="border-bottom d-flex align-items-center justify-content-between reset-li px-4 mb-0">
                <li class="d-flex align-items-center justify-content-center">
                    <div class="mx-2 d-flex align-items-center">
                        <i class="fa-solid fa-users me-2"></i>
                        <p>Quan hệ (IR)</p>

                    </div>
                    <div class="mx-2 d-flex align-items-center">
                        <i class="fa-solid fa-map-location-dot me-2"></i>
                        <p>Cửa hàng</p>
                    </div>
                    <div class="mx-2 d-flex align-items-center">
                        <i class="fa-solid fa-phone-volume me-2"></i>
                        <p>1800545457</p>
                    </div>
                </li>
                <li class="d-flex justify-content-center align-items-center">
                    <div class="w-20">
                        <a href="{{ route('pnj.template') }}">
                            <img src="{{ asset('pnj-all/pnj-img/Vangta-removebg-preview.png') }}" alt="">
                        </a>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-center">
                    <div class="mx-2 d-flex align-items-center">
                        <i class="fa-regular fa-clock mx-2"></i>
                        <p>
                            Lịch sử đơn hàng
                        </p>
                    </div>
                    <div class="mx-2 d-flex align-items-center">
                        <i class="fa-solid fa-cart-shopping mx-2"></i>
                        <p>
                            Giỏ hàng
                        </p>
                    </div>
                </li>
            </ul>
            <ul class="d-flex container justify-content-between align-items-center reset-li reset-ul px-4">
                <li class="hov-jew">
                    <div class="position-relative">
                        <p class="bot-hover">Trang sức</p>
                        <div class="jew position-absolute bg-white rounded jewelry w-full">
                            <div class="d-flex hover-ul">
                                <div class="m-4">
                                    <h6 class="fw-bold">Chủng loại</h6>
                                    <ul class="">
                                        <li>Nhẫn</li>
                                        <li>Dây chuyền</li>
                                        <li>Mặt dây chuyền</li>
                                        <li>Bông tai</li>
                                        <li>Lắc</li>
                                        <li>Vòng</li>
                                        <li>Charm</li>
                                        <li>Kiềng</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Chất liệu</h6>
                                    <ul>
                                        <li>Vàng</li>
                                        <li>Bạc</li>
                                        <li>Platinum</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <ul>
                                        <h6 class="fw-bold">Dòng hàng</h6>
                                        <li>
                                            Trang sức đính kim cương
                                        </li>
                                        <li>Trang sức đính ECZ</li>
                                        <li>Trang sức công nghệ Ý</li>
                                        <li>Trang sức đính ngọc trai</li>
                                        <li>Trang sức đính CZ</li>
                                        <li>Kim cương viên</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Bộ sưu tập</h6>
                                    <ul>
                                        <li>Tangled</li>
                                        <li>Sunlover</li>
                                        <li>Unisex</li>
                                        <li>Heart gold</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Trang sức phong thủy</h6>
                                    <ul>
                                        <li>Theo cung</li>
                                        <li>Theo mệnh</li>
                                        <li>Phong thủy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="hov-jew">
                    <div class="position-relative">
                        <p class="bot-hover">Trang sức cưới</p>
                        <div class="jew header-2 position-absolute bg-white rounded jewelry w-full">
                            <div class="d-flex hover-ul">
                                <div class="m-4">
                                    <h6 class="fw-bold">Chủng loại</h6>
                                    <ul class="">
                                        <li>Nhẫn</li>
                                        <li>Dây chuyền</li>
                                        <li>Mặt dây chuyền</li>
                                        <li>Bông tai</li>
                                        <li>Lắc</li>
                                        <li>Vòng</li>
                                        <li>Charm</li>
                                        <li>Kiềng</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Chất liệu</h6>
                                    <ul>
                                        <li>Vàng</li>
                                        <li>Bạc</li>
                                        <li>Platinum</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <ul>
                                        <h6 class="fw-bold">Dòng hàng</h6>
                                        <li>
                                            Trang sức đính kim cương
                                        </li>
                                        <li>Trang sức đính ECZ</li>
                                        <li>Trang sức công nghệ Ý</li>
                                        <li>Trang sức đính ngọc trai</li>
                                        <li>Trang sức đính CZ</li>
                                        <li>Kim cương viên</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Bộ sưu tập</h6>
                                    <ul>
                                        <li>Tangled</li>
                                        <li>Sunlover</li>
                                        <li>Unisex</li>
                                        <li>Heart gold</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Trang sức phong thủy</h6>
                                    <ul>
                                        <li>Theo cung</li>
                                        <li>Theo mệnh</li>
                                        <li>Phong thủy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="hov-jew">
                    <div class="position-relative">
                        <p class="bot-hover">Đồng hồ</p>
                        <div class="jew header-3 position-absolute bg-white rounded jewelry w-full">
                            <div class="d-flex hover-ul">
                                <div class="m-4">
                                    <h6 class="fw-bold">Chủng loại</h6>
                                    <ul class="">
                                        <li>Nhẫn</li>
                                        <li>Dây chuyền</li>
                                        <li>Mặt dây chuyền</li>
                                        <li>Bông tai</li>
                                        <li>Lắc</li>
                                        <li>Vòng</li>
                                        <li>Charm</li>
                                        <li>Kiềng</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Chất liệu</h6>
                                    <ul>
                                        <li>Vàng</li>
                                        <li>Bạc</li>
                                        <li>Platinum</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <ul>
                                        <h6 class="fw-bold">Dòng hàng</h6>
                                        <li>
                                            Trang sức đính kim cương
                                        </li>
                                        <li>Trang sức đính ECZ</li>
                                        <li>Trang sức công nghệ Ý</li>
                                        <li>Trang sức đính ngọc trai</li>
                                        <li>Trang sức đính CZ</li>
                                        <li>Kim cương viên</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Bộ sưu tập</h6>
                                    <ul>
                                        <li>Tangled</li>
                                        <li>Sunlover</li>
                                        <li>Unisex</li>
                                        <li>Heart gold</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Trang sức phong thủy</h6>
                                    <ul>
                                        <li>Theo cung</li>
                                        <li>Theo mệnh</li>
                                        <li>Phong thủy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="hov-jew">
                    <div class="position-relative">
                        <p class="bot-hover">Quà tặng</p>
                        <div class="jew header-4 position-absolute bg-white rounded jewelry w-full">
                            <div class="d-flex hover-ul">
                                <div class="m-4">
                                    <h6 class="fw-bold">Chủng loại</h6>
                                    <ul class="">
                                        <li>Nhẫn</li>
                                        <li>Dây chuyền</li>
                                        <li>Mặt dây chuyền</li>
                                        <li>Bông tai</li>
                                        <li>Lắc</li>
                                        <li>Vòng</li>
                                        <li>Charm</li>
                                        <li>Kiềng</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Chất liệu</h6>
                                    <ul>
                                        <li>Vàng</li>
                                        <li>Bạc</li>
                                        <li>Platinum</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <ul>
                                        <h6 class="fw-bold">Dòng hàng</h6>
                                        <li>
                                            Trang sức đính kim cương
                                        </li>
                                        <li>Trang sức đính ECZ</li>
                                        <li>Trang sức công nghệ Ý</li>
                                        <li>Trang sức đính ngọc trai</li>
                                        <li>Trang sức đính CZ</li>
                                        <li>Kim cương viên</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Bộ sưu tập</h6>
                                    <ul>
                                        <li>Tangled</li>
                                        <li>Sunlover</li>
                                        <li>Unisex</li>
                                        <li>Heart gold</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Trang sức phong thủy</h6>
                                    <ul>
                                        <li>Theo cung</li>
                                        <li>Theo mệnh</li>
                                        <li>Phong thủy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="hov-jew">
                    <div class="position-relative">
                        <p class="bot-hover">Thương hiệu</p>
                        <div class="jew header-5 position-absolute bg-white rounded jewelry w-full">
                            <div class="d-flex hover-ul">
                                <div class="m-4">
                                    <h6 class="fw-bold">Chủng loại</h6>
                                    <ul class="">
                                        <li>Nhẫn</li>
                                        <li>Dây chuyền</li>
                                        <li>Mặt dây chuyền</li>
                                        <li>Bông tai</li>
                                        <li>Lắc</li>
                                        <li>Vòng</li>
                                        <li>Charm</li>
                                        <li>Kiềng</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Chất liệu</h6>
                                    <ul>
                                        <li>Vàng</li>
                                        <li>Bạc</li>
                                        <li>Platinum</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <ul>
                                        <h6 class="fw-bold">Dòng hàng</h6>
                                        <li>
                                            Trang sức đính kim cương
                                        </li>
                                        <li>Trang sức đính ECZ</li>
                                        <li>Trang sức công nghệ Ý</li>
                                        <li>Trang sức đính ngọc trai</li>
                                        <li>Trang sức đính CZ</li>
                                        <li>Kim cương viên</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Bộ sưu tập</h6>
                                    <ul>
                                        <li>Tangled</li>
                                        <li>Sunlover</li>
                                        <li>Unisex</li>
                                        <li>Heart gold</li>
                                    </ul>
                                </div>
                                <div class="m-4">
                                    <h6 class="fw-bold">Trang sức phong thủy</h6>
                                    <ul>
                                        <li>Theo cung</li>
                                        <li>Theo mệnh</li>
                                        <li>Phong thủy</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="position-relati">Blog</li>
                <li class="position-relati">Khuyến mãi</li>
                <li class="col-lg-3">
                    <div class="d-flex align-items-center border bg-search border-white rounded-8 p-1">
                        <input type="text" class="p-2 rounded-8 bg-search border-0" style="width:90%;"
                            placeholder="Tìm kiếm trang sức" autocomplete="off">
                        <svg xmlns="http://www.w3.org/2000/svg" width='24' height='24' fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>
                </li>
            </ul>
        </div>
        <div class="hide-desktop">
            <ul class="reset-li d-flex align-items-center justify-content-center">
                <li class="col-2">
                    <img src="{{ asset('pnj-all/pnj-img/Vangta-removebg-preview.png') }}" alt="">
                </li>
                <li class="col-8">
                    <div
                        class="d-flex align-items-center border bg-search border-white justify-content-center rounded-8">
                        <input type="text" class="p-2 rounded-8 bg-search border-0" style="width:90%;"
                            placeholder="Tìm kiếm trang sức" autocomplete="off">
                        <svg xmlns="http://www.w3.org/2000/svg" width='24' height='24' fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>
                </li>
                <li class="col-1 d-flex justify-content-center">
                    <i class="fa-solid fa-phone"></i>
                </li>
                <li class="col-1 d-flex justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width='24' height='24' fill="currentColor"
                        class="bi bi-bag" viewBox="0 0 16 16">
                        <path
                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                    </svg>
                </li>
            </ul>
        </div>
    </header>
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

    @yield('content')
    
    <footer class="container border-top mb-8 mt-4">
        <div class="flex-center">
            <img src="{{ asset('pnj-all/pnj-img/Vangta-removebg-preview.png') }}" alt="" class="w-20 w-10">
        </div>
        <div class="d-flex reset-li flex-col">
            <div class="col-lg-4">
                <p>
                    Phần mềm Vàng Ta
                </p>
                <p>
                    170E Phan Đăng Lưu, P.3, Q.Phú Nhuận, TP.Hồ Chí Minh
                </p>
                <p>
                    ĐT: 028 39951703 - Fax: 028 3995 1702
                </p>
                <p>
                    Giấy chứng nhận đăng ký doanh nghiệp: 0300521758 do Sở Kế hoạch & Đầu tư TP.HCM cấp lần đầu
                    ngày 02/01/2004. Ngành, nghề kinh doanh
                </p>
            </div>
            <ul class="col-lg-2">
                <li>
                    <h6 class="fw-bold">VỀ VANGTA</h6 class="fw-bold">
                </li>
                <li>
                    Câu chuyện
                </li>
                <li>
                    Kinh doanh
                </li>
                <li>
                    Xuất khẩu
                </li>
            </ul>
            <ul class="col-lg-3">
                <li>
                    <h6 class="fw-bold">
                        DỊCH VỤ KHÁCH HÀNG
                    </h6 class="fw-bold">
                </li>
                <li>
                    Hưỡng dẫn đo size
                </li>
                <li>
                    Trả góp
                </li>
                <li>
                    Mua hàng và thanh toán
                </li>
                <li>
                    Hoàn tiền
                </li>
                <li>
                    Giao hàng
                </li>
                <li>
                    Cẩm nang sử dụng
                </li>
                <li>
                    Câu hỏi thường gặp
                </li>
            </ul>
            <ul class="col-lg-3">
                <li>
                    <h6 class="fw-bold">
                        KẾT NỐI VỚI CHÚNG TÔI
                    </h6 class="fw-bold">
                    <div class="d-flex flex-center">
                        <div class="me-2 my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="blue"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg>
                        </div>
                        <div class="m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red"
                                class="bi bi-youtube" viewBox="0 0 16 16">
                                <path
                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                        </div>
                        <div class="m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="purple"
                                class="bi bi-instagram" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </div>
                    </div>
                </li>
                <li>
                    QUAN TÂM
                </li>
            </ul>
        </div>
    </footer>
    <script type="text/javascript">
        AOS.init();
        var closeNavJs = document.getElementById('closeNav');
        // var bar = document.getElementById('resetBar');
        var btn = document.getElementById('closeButton');

        function openNav(x) {
            x.classList.toggle("change");
        };

        btn.addEventListener('click', function() {
            openNav(closeNavJs);
        });

        var overRide = document.getElementById('overRide');
        overRide.setAttribute(
            "style", "position: relative; z-index: 9999;");

        // Get all data-price as string to show
        var spanElements = document.querySelectorAll(".price span[data-price]");
        var dataPrices = [];
        spanElements.forEach(function(spanElement) {
            var dataPrice = spanElement.getAttribute("data-price");
            dataPrices.push(dataPrice);
        });
        // Get all price show
        for (var i = 0; i < dataPrices.length; i++) {
            var toNumber = parseFloat(dataPrices[i]);
            var trueNumber = toNumber.toLocaleString('en-US');
            var spanElement = spanElements[i]; // Get the individual span element
            spanElement.textContent = trueNumber; // Assign the formatted number as the content
        }
        // Get price show just get 1 value to show
        // var spanElement = document.querySelector(".price span[data-price]");
        // var price = spanElement.getAttribute("data-price");
        // var toNum = parseFloat(price);
        // var priceShow = toNum.toLocaleString('en-US');
        // spanElement.textContent = priceShow; // Assign the formatted number as the content

        $(document).ready(function() {
            // Show or hide the button based on the scroll position
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#back-to-top-btn').fadeIn();
                } else {
                    $('#back-to-top-btn').fadeOut();
                }
            });

            // Scroll to top when the button is clicked
            $('#back-to-top-btn').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 200);
                return false;
            });
        });
        // Slide for image
        var slideIndex = 0;

        function plusSlides(n, id) {
            showSlides(slideIndex += n, id);
        }

        function showSlides(n, id) {
            var slides = document.getElementsByClassName("mySlides-" + id);
            // console.log(slides);
            if (n >= slides.length) {
                slideIndex = 0;
            } else if (n < 0) {
                slideIndex = slides.length - 1;
            } else {
                slideIndex = n;
            }

            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slides[slideIndex].style.display = "block";
        }
    </script>

    
    @yield('javascript')

    <script type="module" src="{{ asset('pnj-all/js/product.js') }}"></script>

</body>

</html>
