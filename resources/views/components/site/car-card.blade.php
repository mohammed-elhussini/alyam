@props(['car'])
    <div class="carPost">
        <a href="{{url('/cars/'.$car->id)}}">
            <img class="img-fluid"
                 src="{{$car->picture ? asset('storage/'.$car->picture) : asset('dashboard/assets/media/users/blank.png') }}"/>
        </a>
        <div class="price pt-3 pb-1">
            <strong>{{$car->price}}</strong>
            <span>/يوم</span>
        </div>
        <div class="title pb-3">
            <span>{{$car->name}}</span>
            <span>{{$car->model}}</span>
        </div>
        <a class="btn btn-primary col-12"
           href="{{url('/cars/'.$car->id)}}">احجز الآن</a>
    </div>

