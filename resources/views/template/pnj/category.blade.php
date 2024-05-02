@foreach ($arrayCategory as $category)
    @php
        $id = $category['id'];
        $name = $category['name'];
    @endphp
    <div class="m-4">
        <div data-aos='fade-up' data-aos-duration='1200' id="{{ $name }}">
            <div>
                <img src="{{ asset('pnj-all/pnj-img/combo-t7-1972_x_640_CTA.jpeg') }}" alt="">
            </div>
            <div>
                <h3 class='m-2 text-center'>
                    {{ $name }}
                </h3>
                <div class="m-4">
                    <div class="splide d-flex justify-content-center align-items-center m-4 slide-category"
                        id="splide-{{ $id }}" data-id ='{{ $id }}' aria-label="Placeholder Example">
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
                                    {{-- FIXME: Change to add product img --}}
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
                                            chuyn vàng trắng ngọc trai <br> PLM791103232</span>
                                    </li>
                                    <li class="splide__slide sales-gra">
                                        <div class="hover-zoom">
                                            <img src="{{ asset('pnj-all/pnj-img/sp-gnatxmh000003-nhan-vang-14k-dinh-da-disney-pnj-tangled-1.png') }}"
                                                alt="">
                                        </div>

                                        <span class='text-center d-flex align-items-center justify-content-center'>Trang
                                            sức bạc gắn á 14k <br> PNJ099000712</span>
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
    </div>
@endforeach
{{-- TODO: array --}}
{{-- @foreach ($arrayProduct as $all)
@if ($all['category_id'] == $id)
    <li data-id-media="{{ $all['id'] }}"
        class="splide__slide sales-gra d-flex flex-column justify-content-center">
        <div class="zoom"
            onclick="redirectToProduct('{{ route('product.template', $all['id']) }}')">
            <img class="mySlides-{{ $all['id'] }} fadeS slideShow"
                src="{{ asset('uploads/img/' . $all['image']) }}"
                alt="">
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
@endif
@endforeach --}}
