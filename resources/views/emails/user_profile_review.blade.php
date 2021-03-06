@component('layouts.email-carflow')

    <h4 class="subtitle">ACCOUNT STATUS</h4>

    @if ($newUpdateStatus == \App\Models\UserProfileUpdate::STATUS_APPROVED)
        <p>Congrats {{ $user->full_name }}!<br>
            You're account changes was approved. Your profile is now updated.
        </p>
    @endif

    @if ($newUpdateStatus == \App\Models\UserProfileUpdate::STATUS_REJECTED)
        <p>Hello {{ $user->full_name }}!<br>
            Unfortunately, your account changes was denided. Reason: <i>{{ $rejectReason }}</i></p>
    @endif

@endcomponent

