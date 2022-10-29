@props(['brands','branches'])
<div class="customSearch">
    <div class="row">
        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-3 select">
            <select class="form-control nation">
                <option selected>الفئة</option>
                @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->title}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-3 select">
            <select class="form-control nation">
                <option selected>موقع الاستلام</option>
                @foreach($branches as $branch)
                <option value="{{$branch->id}}">{{$branch->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-3 select">
            <select class="form-control nation">
                <option selected>موقع التسليم</option>
                @foreach($branches as $branch)
                    <option value="{{$branch->id}}">{{$branch->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-3">
            <input class="form-control date birthdate"
                   type="text"
                   placeholder="تاريخ الاستلام">
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-3">
            <input class="form-control date birthdate"
                   type="text"
                   placeholder="تاريخ التسليم">
        </div>
        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-3">
            <button type="submit" class="btn btn-dark col-12"><i class="fa-regular fa-search"></i> بحث</button>
        </div>
    </div>
</div>
