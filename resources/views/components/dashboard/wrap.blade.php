<div {{$attributes->merge(['class'=>'class="d-flex flex-column-fluid"'])}}>
    <!--begin::Container-->
    <div class="container">
        {{$slot}}
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
