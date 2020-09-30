{{-- Bootstrap Notifications using Prologue Alerts & PNotify JS --}}
<script type="text/javascript">
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };



    @foreach (\Alert::getMessages() as $type => $messages)

    @foreach ($messages as $message)
    toastr.{{ $type }}("{!! str_replace('"', "'", $message) !!}");

    @endforeach
    @endforeach

    @if (app('env') != 'local')
    @php
        $now = \Carbon\Carbon::now();
        $refreshTime = \Carbon\Carbon::now()->endOfHour();

        if ($now->diffInMinutes($refreshTime) < 3) {
    @endphp
    toastr.info("<strong>Demo Refresh in {{ $now->diffInMinutes($refreshTime) }} Minutes</strong><br>You'll lose all changes.");
    @php
        }
        if ($now->diffInMinutes($refreshTime) > 57) {
    @endphp
    toastr.info("<strong>Demo Refreshed {{ 60-$now->diffInMinutes($refreshTime) }} Minutes Ago</strong><br>All custom entries & files have been deleted.");
    @php
        }
    @endphp
    @endif
</script>
