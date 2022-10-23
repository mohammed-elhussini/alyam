<x-site.layout>
    <div class="pageHeader py-5">
        <div class="container">
            <div class="h2 text-center">إكمال الحجز</div>
        </div>
    </div>

    <div class="container">
        <div class="well">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="carWell">
                        <img src="assets/img/slide.png"/>
                        <div class="title">
                            <span>تويوتا كامري</span>
                            <span>A345-2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="carWidget mb-3">
                        <img src="assets/img/route.png" width="32" height="32"/>
                        <div>
                            <span>موقع الاستلام</span>
                            <span>الرياض,مطار الرياض</span>
                        </div>
                    </div>
                    <div class="carWidget">
                        <img src="assets/img/birthdate.svg" width="32" height="32"/>
                        <div>
                            <span>تاريخ الاستلام</span>
                            <span>السبت,25/9/2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="carWidget mb-3">
                        <img src="assets/img/route.png" width="32" height="32"/>
                        <div>
                            <span>موقع التسليم</span>
                            <span>الرياض,مطار الرياض</span>
                        </div>
                    </div>
                    <div class="carWidget">
                        <img src="assets/img/birthdate.svg" width="32" height="32"/>
                        <div>
                            <span>تاريخ التسليم</span>
                            <span>السبت,25/9/2021</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center h5 mb-0 py-4">البيانات الشخصية</div>
        <div class="well mb-5">
            <form>
                <div class="form-row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input class="form-control name" type="text" placeholder="الاسم الاول">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input class="form-control name" type="text" placeholder="الاسم الاخير">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <select class="form-control nation">
                            <option selected>الجنسية</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input class="form-control birthdate" type="text" onfocus="(this.type='date')"
                               placeholder="تاريخ الانتهاء">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input class="form-control phone" type="text" placeholder="العنوان الوطني">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input id="register-intl-phone" class="form-control" type="tel" placeholder="الجوال">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input class="form-control identy" type="text" placeholder="رقم الهوية">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input class="form-control birthdate" type="text" onfocus="(this.type='date')"
                               placeholder="تاريخ الميلاد">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input class="form-control licence" type="text" placeholder="رخصية القيادة">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                        <input class="form-control birthdate" type="text" onfocus="(this.type='date')"
                               placeholder="تاريخ الانتهاء">
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">الانتقال للدفع</button>
                </div>
            </form>
        </div>
    </div>
</x-site.layout>
