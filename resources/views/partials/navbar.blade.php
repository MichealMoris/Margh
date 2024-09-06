<nav class="navbar navbar-expand-xl py-5 border-bottom border-dark border-2" style="background: white !important; border-color: #80bd6a !important">
    <div class="container-fluid">
        <div class="row w-100 m-auto justify-content-between">
            @if (app()->getLocale() == 'ar')
                <a class="navbar-brand text-md-right text-xl-center col-4 d-inline d-xl-none" style="width: auto !important;padding:0;" href="#">
                    <img class="img-fluid w-25" src={{ asset('imgs/logo_ar.png') }} alt="margh_logo_ar">
                </a>
            @else
                <a class="navbar-brand text-md-start text-xl-center col-4 d-inline d-xl-none" style="width: auto !important;" href="#">
                    <img class="img-fluid w-25" src={{ asset('imgs/logo_en.png') }} alt="margh_logo_en">
                </a>
            @endif
            <div class="collapse navbar-collapse col-4" id="navbarSupportedContent" style="width: 0px;">
                <ul class="navbar-nav me-auto" style="width: 100%; justify-content: start; padding: 0 !important;">
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="#investWithUsSec" style="font-family:'MadaniArabic-Medium', sans-serif; color:#103a41;">{{__('content.invest_with_us')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fs-6 dropdown-toggle" href="#" role="button" style="font-family:'MadaniArabic-Medium', sans-serif; color:#103a41;" data-bs-toggle="dropdown" aria-expanded="false">{{__('content.sources')}}</a>
                        <ul class="dropdown-menu shadow" style="{{app()->getLocale() == 'ar' ? 'text-align: right;' : ''}} border:none;">
                            <li><a style="font-family:'MadaniArabic-Medium', sans-serif; color:#103a41;" class="dropdown-item" href="#argInvestSec">{{__('content.about_investment')}}</a></li>
                            <li><a style="font-family:'MadaniArabic-Medium', sans-serif; color:#103a41;" class="dropdown-item" href="#whyPalmSec">{{__('content.why_investment')}}</a></li>
                            <li><a style="font-family:'MadaniArabic-Medium', sans-serif; color:#103a41;" class="dropdown-item" href="#faqSection">{{__('content.faqs')}}</a></li>
                          </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="#contactUsSec" style="font-family:'MadaniArabic-Medium', sans-serif; color:#103a41;">{{__('content.contact_us')}}</a>
                    </li>
                </ul>
            </div>
            @if (app()->getLocale() == 'ar')
                <a class="navbar-brand text-md-right text-xl-center col-4 d-none d-xl-inline" style="width: auto !important;padding:0;" href="#">
                    <img class="img-fluid w-25" src={{ asset('imgs/logo_ar.png') }} alt="margh_logo_ar">
                </a>
            @else
                <a class="navbar-brand text-md-start text-xl-center col-4 d-none d-xl-inline" style="width: auto !important;" href="#">
                    <img class="img-fluid w-25" src={{ asset('imgs/logo_en.png') }} alt="margh_logo_en">
                </a>
            @endif
            <div class="collapse navbar-collapse col-4" id="navbarSupportedContent" style="width: 0px">
                <ul class="navbar-nav me-auto" style="width:100%; justify-content: end;padding:0;">
                    <li class="nav-item">
                        <a class="nav-link fs-6" href={{ url('ar' === app()->getLocale() ? 'en' : 'ar') }} style="font-family:'MadaniArabic-Medium', sans-serif; color:#103a41;">{{__('content.lang')}}</a>
                    </li>
                    <li>
                        <button class="btn btn-success" style="background: #74c14e; border-color: #74c14e; font-family:'MadaniArabic-Medium', sans-serif" data-bs-toggle="modal" data-bs-target="#investor">{{__('content.investor_guide')}}</button>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler w-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                style="position: absolute; top: 45px; {{app()->getLocale() == 'ar' ? 'left: 15px;' : 'right: 15px;'}} z-index: 1000;">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>
<script>
    function toggleDropdown(e) {
  const _d = $(e.target).closest('.dropdown'),
    _m = $('.dropdown-menu', _d)
  setTimeout(
    function () {
      const shouldOpen = e.type !== 'click' && _d.is(':hover')
      _m.toggleClass('show', shouldOpen)
      _d.toggleClass('show', shouldOpen)
      $('[data-toggle="dropdown"]', _d).attr('aria-expanded', shouldOpen)
    },
    e.type === 'mouseleave' ? 0 : 0
  )
}

$('body')
  .on('mouseenter mouseleave', '.dropdown', toggleDropdown)
  .on('click', '.dropdown-menu a', toggleDropdown)
</script>
