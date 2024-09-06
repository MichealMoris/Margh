<div class="row m-5 rounded-3 shadow-sm align-items-center" style="background:linear-gradient(to bottom right, #74c14e, #4a9a3f);">
    <div class="col-sm-12 col-md-7 p-5 m-0">
        <h2 class="" style="color: #fff;font-family:'MadaniArabic-Bold', sans-serif;">{{__('content.banner_one_title')}}</h2>
        <p class="" style="color: #fff;font-family:'MadaniArabic-Light', sans-serif;">{{__('content.banner_one_body')}}</p>
        <button class="btn btn-success p-3"
            style="background: #fff; border-color: #fff; font-family:'MadaniArabic-Bold', sans-serif;color:#4a9a3f;" data-bs-toggle="modal" data-bs-target="#investor">{{ __('content.investor_guide') }}</button>
    </div>
    <div class="d-none d-md-block col-md-5 p-0 m-0" style="align-self: stretch;">
        <img src="{{asset('imgs/banner_one_img.jpg')}}" class="img-fluid {{app()->getLocale() == 'ar' ? 'rounded-start-3' : 'rounded-end-3'}}" style="object-fit: cover;min-height:100%;">
    </div>
</div>
