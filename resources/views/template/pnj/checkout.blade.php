@extends('template.layout_checkout')
@section('content')
@section('style')
<?php 
$currentDateTime = Carbon::now();
$dateTime = $currentDateTime->format('d-m-Y H:i:s');
?>
    <style>
        @media only screen and (max-width: 600px) {
            .me-4 {
                margin: 0 !important;
            }
        }

        .spinner-border {
            top: 50% !important;
            left: 50% !important;
            --mdb-spinner-width: 4rem;
            --mdb-spinner-height: 4rem;
            --mdb-spinner-vertical-align: -0.125em;
            --mdb-spinner-border-width: 0.5em;
        }

        #loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            /* width: 100%;
            height: 100%; */
            /* background-color: rgba(0, 0, 0, 0.2); */
            z-index: 9999;
            display: none;
        }

        #loading-spinner {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: 10px solid #f3f3f3;
            border-top: 10px solid #3498db;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endsection

<!-- Main content -->
<section class="container mt-4">
    <div class="d-flex column">
        <div class="col-lg-4 border border-2 border-primary rounded-4 p-2 me-4 my-2">
            <h4>Thông tin đơn hàng</h4>
            <div class="d-flex">
                <div class="col-lg-4 p-1">
                    <img src="{{ asset('uploads/img/' . $arrayProduct['image']) }}" alt="">
                </div>
                <div class="col-lg-8">
                    <p class="fs-4">{{ $arrayProduct['name'] }}</p>
                    <div class="d-flex py-2 justify-content-between align-items-center">
                        <p class="pe-2">Mã:</p>
                        <p class="fw-bold"> {{ $arrayProduct['bar_code'] }}</p>
                    </div>
                    <div class="d-flex py-2 justify-content-between align-items-center">
                        <div>
                            <p>Giá:</p>
                        </div>
                        <div class="d-flex price fs-5">
                            <span data-price='{{ $arrayProduct['price'] }}' class='font'
                                style="color: #021499; font-weight:bold; "></span>
                            <span class="font" style="color: #021499; font-weight:bold">
                                &#8363;</span>
                        </div>
                    </div>
                    <div class="d-flex py-2 justify-content-between align-items-center">
                        <p class="pe-2">Trọng lượng:</p>
                        <p class="fw-bold"> {{ $arrayProduct['weight'] }}</p>
                    </div>
                </div>
            </div>
            <div class="border-top border-bottom my-2">
                <div class="d-flex py-2 justify-content-between align-items-center">
                    <div>
                        <p>Tạm tính:</p>
                    </div>
                    <div class="d-flex price fs-5">
                        <span data-price='{{ $arrayProduct['price'] }}' class='font'
                            style="color: #021499; font-weight:bold; "></span>
                        <span class="font" style="color: #021499; font-weight:bold">
                            &#8363;</span>
                    </div>
                </div>
                <div class="d-flex py-2 justify-content-between">
                    <p>Chi phí vận chuyển:</p>
                    <b>Miễn phí</b>
                </div>
            </div>
            <div>
                <div class="d-flex py-2 justify-content-between align-items-center">
                    <div>
                        <b class="">Thành tiền:</b>
                    </div>
                    <div>
                        <div class="d-flex price justify-content-end fs-5">
                            <span data-price='{{ $arrayProduct['price'] }}' class='font'
                                style="color: rgb(188, 0, 0); font-weight:bold; "></span>
                            <span class="font" style="color: rgb(188, 0, 0); font-weight:bold">
                                &#8363;</span>
                        </div>
                        <div>
                            <p class="fst-italic text-muted" style="font-size:small">Giá tham khảo đã bao gồm VAT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            {!! Form::open([
                'url' => action('SendMailController@send_mail', $arrayProduct['id']),
                'method' => 'post',
                'id' => 'checkout_form',
            ]) !!}
            {{-- Set value before name to get value --}}
            {!! Form::hidden('id', $arrayProduct['id'], [
                'id' => 'id'
            ]) !!}
            {!! Form::hidden('dateTime', $dateTime, [
                'id' => 'dateTime'
            ]) !!}
            <h4 class="p-3 bg-form rounded-6"><b class="pxx-2 me-2 border-n rounded-circle">1</b>Thông tin người mua
            </h4>

            <div class="d-flex">
                <div class="col-lg-6 p-2">
                    {!! Form::text('name', null, [
                        'class' => 'form-control p-2 rounded-6 border-success border-3',
                        'id' => 'name',
                        'required',
                        'placeholder' => 'Nhập họ và tên',
                    ]) !!}
                </div>
                <div class="col-lg-6 p-2">
                    {!! Form::text('phone', null, [
                        'class' => 'form-control p-2 rounded-6 border-success border-3',
                        'id' => 'phone',
                        'required',
                        'placeholder' => 'SĐT',
                    ]) !!}
                </div>
            </div>
            <div class="d-flex">
                <div class="col-lg-6 p-2">
                    {!! Form::text('email', null, [
                        'class' => 'form-control p-2 rounded-6 border-success border-3',
                        'id' => 'email',
                        'required',
                        'placeholder' => 'Email',
                    ]) !!}
                </div>
                <div class="col-lg-6 p-2">
                    {!! Form::date('birth', null, ['class' => 'form-control p-2 rounded-6 border-success border-3']) !!}
                </div>
            </div>
            <h4 class="p-3 bg-form rounded-6"><b class="pxx-2 me-2 border-n rounded-circle">2</b>Hình thức nhận hàng
            </h4>
            <div class="d-flex">
                <div class="col-lg-6 p-2">
                    {!! Form::text('city', null, [
                        'class' => 'form-control p-2 rounded-6 border-success border-3',
                        'id' => 'city',
                        'required',
                        'placeholder' => 'Tỉnh/Thành Phố',
                    ]) !!}
                </div>
                <div class="col-lg-6 p-2">
                    {!! Form::text('district', null, [
                        'class' => 'form-control p-2 rounded-6 border-success border-3',
                        'id' => 'district',
                        'required',
                        'placeholder' => 'Quận/Huyện',
                    ]) !!}
                </div>
            </div>
            <div class="d-flex">
                <div class="col-lg-6 p-2">
                    {!! Form::text('wards', null, [
                        'class' => 'form-control p-2 rounded-6 border-success border-3',
                        'id' => 'wards',
                        'required',
                        'placeholder' => 'Phường/Xã',
                    ]) !!}
                </div>
                <div class="col-lg-6 p-2">
                    {!! Form::text('address', null, [
                        'class' => 'form-control p-2 rounded-6 border-success border-3',
                        'id' => 'address',
                        'required',
                        'placeholder' => 'Địa chỉ',
                    ]) !!}
                </div>
            </div>
            <h5 class="mt-2">Phương thức vận chuyển:</h5>
            <div class="d-flex text-success border border-primary rounded-4 p-2 my-4 cursor">
                {!! Form::radio('agree', 1, true, ['id' => 'agree-radio']) !!}
                <div class="px-2">
                    <strong>Miễn phí giao hàng nhanh</strong>
                    <p>Nhận hàng dự kiến sau 3 - 5 ngày</p>
                </div>
            </div>
            <div class="flex-center mt-4">
                <button type="submit" id="sendMail" class="btn btn-primary col-lg-4 fs-5">Đặt hàng</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    
    <div class="spinner-border text-success" id="loading-overlay" role="status">
    </div>
</section>
@endsection
@section('javascript')
<script type="text/javascript">
    $('#phone').on('input', function(event) {
        var input = $(this);
        var sanitizedValue = input.val().replace(/\D/g, '');
        input.val(sanitizedValue);
    })

    $(document).ready(function() {
        $('#sendMail').click(function() {
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var city = $('#city').val();
            var district = $('#district').val();
            var wards = $('#wards').val();
            var address = $('#address').val();

            if (name === '' || phone === '' || email === '' || city === '' || district === '' ||
                wards === '' || address === '') {
                console.log('Vui lòng điền đầy đủ thông tin');
            } else {
                $('#loading-overlay').fadeIn();
            }
        });
    });
</script>
@endsection
