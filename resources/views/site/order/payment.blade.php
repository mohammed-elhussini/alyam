<x-site.layout>
    <div class="pageHeader py-5">
        <div class="container">
            <div class="h2 text-center">إكمال الحجز</div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <div class="well mb-4">
                    <div class="tabsNav mb-4">
                        <ul class="imgs">
                            <li class="active"><a href="#master"><img src="assets/img/master.png"/></a></li>
                            <li><a href="#visa"><img src="assets/img/visa.png"/></a></li>
                            <li><a href="#mada"><img src="assets/img/Mada.png"/></a></li>
                        </ul>
                    </div>
                    <div class="tabsContent">
                        <div class="tabContent active" id="master">
                            <form>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" placeholder="اسم صاحب الكارت">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" placeholder="رقم البطاقة">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" placeholder="(Cvv) الرقم السري">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" onfocus="(this.type='date')"
                                               placeholder="تاريخ الانتهاء">
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">إنهاء الحجز</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tabContent" id="visa">
                            <form>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" placeholder="اسم صاحب الكارت">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" placeholder="رقم البطاقة">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" placeholder="(Cvv) الرقم السري">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" onfocus="(this.type='date')"
                                               placeholder="تاريخ الانتهاء">
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">إنهاء الحجز</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tabContent" id="mada">
                            <form>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" placeholder="اسم صاحب الكارت">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" placeholder="رقم البطاقة">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" placeholder="(Cvv) الرقم السري">
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-3">
                                        <input class="form-control noIcon" type="text" onfocus="(this.type='date')"
                                               placeholder="تاريخ الانتهاء">
                                    </div>
                                    <div class="mb-3 d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">إنهاء الحجز</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="well">
                    <div class="carWell mb-3">
                        <img src="assets/img/slide.png"/>
                        <div class="title">
                            <span>تويوتا كامري</span>
                            <span>A345-2021</span>
                        </div>
                    </div>
                    <div class="cartList">
                        <p>
                            <span>عدد الأيام</span>
                            <span>3</span>
                        </p>
                        <p>
                            <span>مبلغ الإيجار</span>
                            <span>1350 ر.س</span>
                        </p>
                        <p>
                            <span>رسوم إضافية</span>
                            <span>100 ر.س</span>
                        </p>
                        <p>
                            <span>ضريبة القيمة المضافة</span>
                            <span>189 ر.س</span>
                        </p>
                        <p class="last">
                            <span>الإجمالي</span>
                            <span>1639 ر.س</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-site.layout>
