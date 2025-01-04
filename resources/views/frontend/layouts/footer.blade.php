<footer>
    <div class="social_share d-flex flex-wrap align-items-center gap-5">
        <div class="d-flex align-items-center">
            <h6 class="text-white fs-5"><i class="fa-solid fa-square-share-nodes"></i>
                Connect with us</h6>
        </div>
        <ul class="d-flex gap-3">
            <li><a href="{{ $setting->facebook }}" target="_blank" class="text-white fs-4"><i
                        class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="{{ $setting->linkedin }}" target="_blank" class="text-white fs-4"><i
                        class="fa-brands fa-linkedin-in"></i></a>
            </li>
            <li><a href="{{ $setting->youtube }}" target="_blank" class="text-white fs-4"><i
                        class="fa-brands fa-youtube"></i></a></li>
            <li><a href="{{ $setting->instagram }}" target="_blank" class="text-white fs-4"><i
                        class="fa-brands fa-instagram"></i></a>
            </li>
            <li><a href="{{ $setting->twitter }}" target="_blank" class="text-white fs-4"><i
                        class="fa-brands fa-x-twitter"></i></a>
            </li>
        </ul>
    </div>

    <div class="footer-area pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-footer">
                        <img src="{{ asset('upload/logo/' . $setting->logo) }}" style="width: 200px;" alt=""
                            loading="lazy">

                        <p>{{ $setting->description }}</p>

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="single-footer usefull_links">
                        <h5><b>Important Links</b></h5>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="about.html">Brands</a></li>
                            <li><a href="{{ route('career.page') }}">Career</a></li>
                            <li><a href="{{ route('supplier.page') }}">Suppliers</a></li>
                            <li><a href="{{ route('contact.page') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-footer usefull_links">
                        <h5><b>contact</b></h5>

                        <div class="d-flex align-items-center gap-2">
                            <p><i class="fa fa-phone"></i></p>
                            <p class="d-flex gap-2">
                                <a href="tel:+88{{ $setting->phone }}">+88{{ $setting->phone }}</a>
                            </p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <p><i class="fa fa-envelope"></i></p>
                            <p><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <p><i class="fa fa-home"></i></p>
                            <a href="">{{ $setting->address }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright mt-5">
            <div class="container">
                <span> <strong>&copy; Our Website. 2024</strong></span>
                <span> Developed by <a href="https://classicit.com.bd/" target="_blank">Classic IT </a></span>
            </div>
        </div>
    </div>
</footer>

<div class="footer_fix_icon">
    <div class="chatting_option">
        <p><a href="tel:+88{{ $setting->phone }}" title="Call Me"><i class="fa fa-phone"></i>
                {{ $setting->phone }}</a></p>
        <p><a href="{{ $setting->messanger }}" title="Message me"> <i class="fa-brands fa-facebook-messenger"></i>
                Messenger</a></p>
        <p> <a href="{{ $setting->whatsapp }}" title="Contact with Whatsapp"><i class="fa-brands fa-whatsapp"></i>
                WhatsApp</a></p>
    </div>
    <div class="chatSystem">
        <div class="chat_icon">
            <img src="{{ asset('frontend') }}/images/chat.gif" alt="">
        </div>
    </div>
</div>
