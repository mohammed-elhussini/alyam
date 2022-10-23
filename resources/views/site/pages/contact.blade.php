<x-site.layout>
    <div class="pageHeader py-5">
        <div class="container">
            <div class="h2 text-center">اتصل بنا</div>
        </div>
    </div>

    <div class="container">
        <div class="row" id="contactPage">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="well mb-4" id="contact">
                    <div class="h5">كيف يمكننا مساعدتك ؟</div>
                    <p>يمكنك الإتصال بنا عبر الوسائل التالية أو ملئ النموذج</p>
                    <ul>
                        <li><i class="fa-solid fa-location-dot"></i> المملكة العربية السعودية</li>
                        <li><i class="fa-solid fa-phone-volume"></i> +966 05 402 1296</li>
                        <li><i class="fa-solid fa-envelope"></i> info@alyam.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="well mb-4" id="contactForm">
                    <p>يمكنك الإتصال بنا عبر الوسائل التالية أو ملئ النموذج</p>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="" action="/contact" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="الاسم" name="name" value="">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="البريد الالكترونى" name="email" value="">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="الجوال" name="phone" value="">
                            @error('phone')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" placeholder="الرسالة" name="message" rows="6"></textarea>
                            @error('message')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" name="button" class="btn btn-primary">إرسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="mapEmbed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.513190788416!2d46.708562621841814!3d24.709255941334845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5a94e6332f7a13f4!2zMjTCsDQyJzM0LjIiTiA0NsKwNDInMzUuNiJF!5e0!3m2!1sen!2sus!4v1639835702309!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</x-site.layout>
