<x-site.layout>
    <div class="container py-5 my-3">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="demo-gallery">
                    <div id="lightgallery" class="list-unstyled row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12"
                             data-src="{{$car->picture ? asset('storage/'.$car->picture) : asset('dashboard/assets/media/users/blank.png') }}">
                            <a href="">
                                <img class="img-fluid"
                                     src="{{$car->picture ? asset('storage/'.$car->picture) : asset('dashboard/assets/media/users/blank.png') }}">
                            </a>
                        </div>
                        @foreach($car->pictures as $picture)
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6"
                             data-src="{{asset('storage/'.$picture->picture)}}">
                            <a href="">
                                <img class="img-fluid"
                                     src="{{asset('storage/'.$picture->picture)}}"
                                     alt="{{$picture->title}}">
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="postDetails py-3">
                    <div class="title mb-2">
                        <div class="h2 mb-0">{{$car->name}}</div>
                        <div class="price">
                            <strong>{{$car->price}}</strong>
                            <span>ر.س / يوم</span>
                        </div>
                    </div>
                    <div class="year">{{$car->manufacture}}</div>
                    <div class="desc mt-3">
                        <strong>تفاصيل السيارة</strong>
                        <div>{!! $car->description !!} </div>

                    </div>
                    <div class="text-center mt-4">
                        <a href="" class="btn btn-lg btn-primary">إحجز الآن</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-site.layout>
