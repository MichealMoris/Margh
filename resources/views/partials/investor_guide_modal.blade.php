<div class="modal fade" id="investor" tabindex="-1" aria-labelledby="investorLabel" aria-hidden="true">
    <div class="modal-dialog my-0 py-5">
        <div class="modal-content" style="border-top: 3px solid #4a9a3f;">
            <div class="modal-body">
                <div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div>
                    <h4 class="text-center" style="color: #103a41;font-family:'MadaniArabic-Bold', sans-serif;"
                        class="p-0 m-0">
                        {{ __('content.download_invest_guide') }}</h4>
                    <p class="text-center" style="color: #252525;font-family:'MadaniArabic-Light', sans-serif;"
                        class="p-0 m-0">
                        {{ __('content.download_invest_guide_msg') }}</p>
                    <form action="{{app()->getLocale()}}/downloadCustomerGuide" method="post" id="investForm">
                        @csrf
                        <input type="hidden" name="lang" value="{{app()->getLocale()}}">
                        <div class="mb-2">
                            <label for="name" class="form-label"
                                style="color: #103a41;font-family:'MadaniArabic-Light', sans-serif;">{{ __('content.full_name') }}</label>
                            <input type="text" name="name" class="form-control" id="name">
                            <p class="text-danger" style="display: none;" id="nameError">{{ __('content.required') }}</p>
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label"
                                style="color: #103a41;font-family:'MadaniArabic-Light', sans-serif;">{{ __('content.email') }}</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <p class="text-danger" style="display: none;" id="emailError">{{ __('content.required') }}</p>
                        </div>
                        <div class="mb-2">
                            <label for="phone" class="form-label"
                                style="color: #103a41;font-family:'MadaniArabic-Light', sans-serif;">{{ __('content.phone_number') }}</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                            <p class="text-danger" style="display: none;" id="phoneError">{{ __('content.required') }}</p>
                        </div>
                        <input type="submit" value="{{ __('content.download_invest_guide') }}"
                            class="btn btn-success p-2 w-100 mt-4"
                            style="background: linear-gradient(to bottom right, #74c14e, #4a9a3f); border-color: #74c14e; font-family:'MadaniArabic-Light', sans-serif">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('investForm').addEventListener('submit', function(event) {
        event.preventDefault();


        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();

        console.log(name);
        console.log(email);
        console.log(phone);

        const nameError = document.getElementById('nameError');
        const emailError = document.getElementById('emailError');
        const phoneError = document.getElementById('phoneError');

        nameError.style.display = 'none';
        emailError.style.display = 'none';
        phoneError.style.display = 'none';

        let isValid = true;

        if (name === '') {
            nameError.style.display = 'block';
            isValid = false;
        }

        if (email === '') {
            emailError.style.display = 'block';
            isValid = false;
        }

        if (phone === '') {
            phoneError.style.display = 'block';
            isValid = false;
        }

        if (isValid) {
            this.submit();
            $("#investor").modal('hide');
        }
    });
</script>
