<div class="row align-items-center" style="min-height: 80vh">
    <div class="col-md-6 col-sm-12 mb-2 mt-4 px-md-5">
        <h1 style="color: #103a41;font-family:'MadaniArabic-Bold', sans-serif;">{{ __('content.home_sec_headline') }}
        </h1>
        <p style="color: #252525;font-family:'MadaniArabic-Light', sans-serif;">{{ __('content.home_sec_body') }}</p>
        <button class="btn btn-success p-3"
            style="background: linear-gradient(to bottom right, #74c14e, #4a9a3f); border-color: #74c14e; font-family:'MadaniArabic-Light', sans-serif"
            data-bs-toggle="modal" data-bs-target="#investor">{{ __('content.investor_guide') }}</button>

    </div>
    <div class="col-md-6 col-sm-12" style="padding: 0;align-self: stretch;">
        <div class="video-container" style="width: 100%;height:100%;">
            <img src="http://127.0.0.1:8000/imgs/home_page.jpg" alt="palm_img" class="img-fluid thumbnail"
                style="object-fit: cover;min-height:100%;{{ app()->getLocale() == 'ar' ? 'border-radius: 0px .5rem .5rem 0px;' : 'border-radius: .5rem 0px 0px .5rem;' }}">
            <div class="overlay" onclick="openVideo()">
                <div class="play-button" onclick="openVideo()"><i class="bi bi-play-circle"></i></div>
            </div>
        </div>

    </div>
</div>
<div id="videoModal" class="modal">
    <div class="modal-content">
        <iframe src="https://www.youtube.com/embed/HX_ZOCcnpFQ?si=ubI6CikPh5j83i7h" id="videoFrame"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<script>
  function openVideo() {
  const modal = document.getElementById("videoModal");
  const videoFrame = document.getElementById("videoFrame");
  modal.classList.add("show"); // Add the 'show' class
  videoFrame.src = "https://www.youtube.com/embed/HX_ZOCcnpFQ?si=ubI6CikPh5j83i7h?autoplay=1";
}

function closeVideo() {
  const modal = document.getElementById("videoModal");
  const videoFrame = document.getElementById("videoFrame");
  modal.classList.remove("show"); // Remove the 'show' class
  videoFrame.src = "";
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
  const modal = document.getElementById("videoModal");
  if (event.target == modal) {
    closeVideo();
  }
}
</script>
