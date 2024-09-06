<div class="row px-4" style="margin-top: 5rem;margin-bottom: 5rem;" id="investWithUsSec">
    <div class="col-12 text-center">
        <h3 style="color: #74c14e; font-family:'MadaniArabic-Bold', sans-serif;">{{ __('content.invest_with_us') }}</h3>
        <p class="fs-6" style="font-family:'MadaniArabic-Light', sans-serif;color: #103a42;">{{ __('content.invest_msg') }}</p>
    </div>
    <div class="mb-3 col-sm-12 col-lg-4">
        <div class="card custom-card" style="height: 25rem;">
            <div class="card-header custom-card-header">
                <div class="d-flex align-items-center">
                    <i class="bi bi-graph-up-arrow fs-1" style="color: #74c14e"></i>
                    <h6 class="ms-3 me-3" style="font-family:'MadaniArabic-Bold', sans-serif;padding:0;margin:0;">
                        {{(__('content.card_one_header'))}}
                    </h6>
                </div>
            </div>
            <div class="card-body custom-card-body">
                <p class="{{app()->getLocale() == 'ar' ? 'text-end' : 'text-start'}}" style="font-family:'MadaniArabic-Light', sans-serif;">{{(__('content.card_one_body'))}}</p>
            </div>
        </div>
    </div>
    <div class="mb-3 col-sm-12 col-lg-4">
        <div class="card custom-card" style="height: 25rem;">
            <div class="card-header custom-card-header">
                <div class="d-flex align-items-center">
                    <i class="bi bi-tree fs-1" style="color: #74c14e"></i>
                    <h6 class="ms-3 me-3" style="font-family:'MadaniArabic-Bold', sans-serif;padding:0;margin:0;">
                        {{(__('content.card_two_header'))}}
                    </h6>
                </div>
            </div>
            <div class="card-body custom-card-body">
                <p class="{{app()->getLocale() == 'ar' ? 'text-end' : 'text-start'}}" style="font-family:'MadaniArabic-Light', sans-serif;">{{(__('content.card_two_body'))}}</p>
            </div>
        </div>
    </div>
    <div class="mb-3 col-sm-12 col-lg-4">
        <div class="card custom-card" style="height: 25rem">
            <div class="card-header custom-card-header">
                <div class="d-flex align-items-center">
                    <i class="bi bi-cash-coin fs-1" style="color: #74c14e"></i>
                    <h6 class="ms-3 me-3" style="font-family:'MadaniArabic-Bold', sans-serif;padding:0;margin:0;">
                        {{(__('content.card_three_header'))}}
                    </h6>
                </div>
            </div>
            <div class="card-body custom-card-body">
                <p class="{{app()->getLocale() == 'ar' ? 'text-end' : 'text-start'}}" style="font-family:'MadaniArabic-Light', sans-serif;">{{(__('content.card_three_body'))}}</p>
            </div>
        </div>
    </div>
    <div class="col-12 text-center mt-3">
        <div class="btn btn-outline-success p-3 mBtn" style="font-family:'MadaniArabic-Bold', sans-serif;border-color:#74c14e;color:#74c14e;" data-bs-toggle="modal" data-bs-target="#investor">{{__('content.investor_guide')}}</div>
    </div>
</div>
