@if(session()->has('message'))

    @push('styles')
    @endpush

    @push('scripts')
        <script src="{{asset('dashboad/assets/js/pages/features/miscellaneous/toastr.js')}}"></script>
        <script>
            $(document).ready(function () {
                toastr.options = {
                    "closeButton": true,
                    "debug": true,
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-full-width",
                    "preventDuplicates": true,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": 0,
                    "extendedTimeOut": 0,
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut",
                    "tapToDismiss": false
                };

                toastr.success("{{session('message')}}");
            });
        </script>
    @endpush

@endif

