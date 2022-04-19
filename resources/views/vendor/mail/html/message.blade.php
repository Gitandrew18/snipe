@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<<<<<<< HEAD
@if (isset($snipeSettings) && ($snipeSettings->show_images_in_email=='1' ) && ($snipeSettings::setupCompleted()))

@if ($snipeSettings->brand == '3')

@if ($snipeSettings->email_logo!='')
<img style="max-height: 100px; vertical-align:middle;" src="{{ \Storage::disk('public')->url(e($snipeSettings->email_logo)) }}">
@elseif ($snipeSettings->logo!='')
<img style="max-height: 100px; vertical-align:middle;" src="{{ \Storage::disk('public')->url(e($snipeSettings->logo)) }}">
=======
@if ($snipeSettings::setupCompleted())

@if (($snipeSettings->brand == '3') && ($snipeSettings->show_images_in_email=='1' ))
@if ($snipeSettings->logo!='')
    <img class="navbar-brand-img logo" src="{{ url('/') }}/uploads/{{ $snipeSettings->logo }}">
>>>>>>> 0a7c57e51 (show site name if show images in emails is not enabled)
@endif
<br><br>
{{ $snipeSettings->site_name }}
<br><br>

<<<<<<< HEAD
@elseif ($snipeSettings->brand == '2')
@if ($snipeSettings->email_logo!='')

<img style="max-width: 100px; vertical-align:middle;" src="{{ \Storage::disk('public')->url(e($snipeSettings->email_logo)) }}">
@elseif ($snipeSettings->logo!='')
<img style="max-width: 100px; vertical-align:middle;" src="{{ \Storage::disk('public')->url(e($snipeSettings->logo)) }}">
=======
@elseif (($snipeSettings->brand == '2') && ($snipeSettings->show_images_in_email=='1' ))
@if ($snipeSettings->logo!='')
    <img class="navbar-brand-img logo" src="{{ url('/') }}/uploads/{{ $snipeSettings->logo }}">
>>>>>>> 0a7c57e51 (show site name if show images in emails is not enabled)
@endif

@else
{{ $snipeSettings->site_name }}
@endif

@else
Snipe-IT
@endif
@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
@if($snipeSettings::setupCompleted())
© {{ date('Y') }} {{ $snipeSettings->site_name }}. All rights reserved.
@else
© {{ date('Y') }} Snipe-IT. All rights reserved.
@endif

@if ($snipeSettings->privacy_policy_link!='')
<a href="{{ $snipeSettings->privacy_policy_link }}">{{ trans('admin/settings/general.privacy_policy') }}</a>
@endif

@endcomponent
@endslot
@endcomponent
