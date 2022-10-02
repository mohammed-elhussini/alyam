<x-dashboard.layout>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div
            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"> تعديل ضريبة -{{ $tax->name }}  </h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item">
                        <a href="{{route('taxes.index')}}" class="text-muted">الضرائب</a>
                    </li>

                </ul>
                <!--end::Actions-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!--end::Subheader-->
    <x-dashboard.wrap>
        <!--begin::Row-->
        <div class="row">

            <div class="col-lg-12">
                <!--begin::Advance Table Widget 3-->
                <div class="card">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{route('taxes.update',$tax->id)}}">
                        @csrf
                        @method('put')
                        <!--begin::Body-->
                        <div class="card-body">
                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">الضريبة</label>
                                <input type="text"
                                       class="form-control form-control-solid @error('name') is-invalid @enderror"
                                       name="name"
                                       value="{{$tax->name}}"
                                       placeholder="إسم ضريبة">
                                @error('name')
                                <div class="form-text invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">مبلغ الضريبة</label>
                                <input type="text"
                                       name="value"
                                       value="{{$tax->value}}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       placeholder="المبلغ">
                                @error('value')
                                <div class="form-text invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-100">
                                <label class="card-label font-size-lg font-weight-bolder text-dark">
                                    نوع الضريبة
                                </label>
                                <div class="radio-inline">
                                    <label class="radio radio-rounded">
                                        <input type="radio"
                                               class=" @error('type') is-invalid @enderror"
                                               {{$tax->type == 0 ? 'checked="checked"' : ''}}
                                               value="0"
                                               name="type"/>
                                        <span></span>
                                        مبلغ ثابت
                                    </label>
                                    <label class="radio radio-rounded">
                                        <input type="radio"
                                               {{$tax->type == 1 ? 'checked="checked"' : ''}}
                                               value="1"
                                               name="type"/>
                                        <span></span>
                                        نسبة مئوية
                                    </label>
                                    @error('type')
                                    <div class="form-text">{{$message}}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <!--end::Body-->
                        <div class="card-footer bg-gray-100">
                            <button type="submit"
                                    class="btn btn-primary btn-block font-weight-bolder">
                                حفظ
                            </button>
                        </div>
                    </form>
                </div>
                <!--end::Advance Table Widget 3-->
            </div>

        </div>
        <!--end::Row-->
    </x-dashboard.wrap>


    @push('scripts')

    @endpush

</x-dashboard.layout>
