@if (Session::has('flash_message'))
    @extends('template.layout_checkout')
    @section('content')
    @section('style')
        <style>
            a:hover {
                background: blanchedalmond !important;
                transition: all .4s ease-out;
            }
        </style>
    @endsection
    <section class="container">
        <center>
            <h2 class="mb-4">
                {{ Session::get('flash_message') }}
            </h2>
            <div>
                <a href="{{ route('pnj.template') }}"
                    class="border border-primary text-light bg-success fs-5 p-2 rounded-4">Quay lại trang chủ</a>
            </div>
        </center>
    </section>
@endsection
@endif
