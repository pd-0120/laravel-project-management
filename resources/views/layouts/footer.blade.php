<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">{{ now()->format('Y') }}©</span>
            <a href="{{ route('welcome') }}" target="_blank" class="text-dark-75 text-hover-primary">{{ config('app.name', 'Laravel') }}</a>
        </div>
    </div>
