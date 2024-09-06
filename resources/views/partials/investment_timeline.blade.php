<div class="row p-4 py-5 align-items-center" id="argInvestSec"
    style="justify-content: center;background:linear-gradient(to bottom right, #74c14e, #4a9a3f);position: relative;">
    <div class="col-12">
        <h1 style="font-family:'MadaniArabic-Bold', sans-serif;color:white;">{{ __('content.why_arg_investment') }}</h1>
    </div>
    <div class="col-6 d-none d-lg-block">
        <div class="rounded p-2" style="background: #103a42;width:-webkit-fill-available;">
            <img src="http://127.0.0.1:8000/imgs/second_img.jpg" class="img-fluid rounded w-100" style="object-fit: cover">
        </div>
    </div>
    <div class="col-sm-12 col-lg-6">
        @if (app()->getLocale() == 'ar')
            <div class="timeline-ar">
                <div class="container left-container">
                    <div class="icon-container">
                        <i class="bi bi-1-circle-fill"></i>
                    </div>
                    <div class="text-box">
                        <h2>{{ __('content.reason_one') }}</h2>
                        <p>{{ __('content.reason_one_desc') }}</p>
                        <span class="left-container-arrow"></span>
                    </div>
                </div>
                <div class="container left-container">
                    <div class="icon-container">
                        <i class="bi bi-2-circle-fill"></i>
                    </div>
                    <div class="text-box">
                        <h2>{{ __('content.reason_two') }}</h2>
                        <p>{{ __('content.reason_two_desc') }}</p>
                        <span class="left-container-arrow"></span>
                    </div>
                </div>
                <div class="container left-container">
                    <div class="icon-container">
                        <i class="bi bi-3-circle-fill"></i>
                    </div>
                    <div class="text-box">
                        <h2>{{ __('content.reason_three') }}</h2>
                        <p>{{ __('content.reason_three_desc') }}</p>
                        <span class="left-container-arrow"></span>
                    </div>
                </div>
                <div class="container left-container">
                    <div class="icon-container">
                        <i class="bi bi-4-circle-fill"></i>
                    </div>
                    <div class="text-box">
                        <h2>{{ __('content.reason_four') }}</h2>
                        <p>{{ __('content.reason_four_desc') }}</p>
                        <span class="left-container-arrow"></span>
                    </div>
                </div>
            </div>
        @endif
        @if (app()->getLocale() == 'en')
            <div class="timeline-en">
                <div class="container right-container">
                    <div class="icon-container">
                        <i class="bi bi-1-circle-fill"></i>
                    </div>
                    <div class="text-box">
                        <h2>{{ __('content.reason_one') }}</h2>
                        <p>{{ __('content.reason_one_desc') }}</p>
                        <span class="right-container-arrow"></span>
                    </div>
                </div>
                <div class="container right-container">
                    <div class="icon-container">
                        <i class="bi bi-2-circle-fill"></i>
                    </div>
                    <div class="text-box">
                        <h2>{{ __('content.reason_two') }}</h2>
                        <p>{{ __('content.reason_two_desc') }}</p>
                        <span class="right-container-arrow"></span>
                    </div>
                </div>
                <div class="container right-container">
                    <div class="icon-container">
                        <i class="bi bi-3-circle-fill"></i>
                    </div>
                    <div class="text-box">
                        <h2>{{ __('content.reason_three') }}</h2>
                        <p>{{ __('content.reason_three_desc') }}</p>
                        <span class="right-container-arrow"></span>
                    </div>
                </div>
                <div class="container right-container">
                    <div class="icon-container">
                        <i class="bi bi-4-circle-fill"></i>
                    </div>
                    <div class="text-box">
                        <h2>{{ __('content.reason_four') }}</h2>
                        <p>{{ __('content.reason_four_desc') }}</p>
                        <span class="right-container-arrow"></span>
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>
