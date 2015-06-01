@if ($breadcrumbs)
    <ol class="breadcrumb">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && $breadcrumb->first)
                <li class="crumb-active"><a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a></li>
            @endif
        @endforeach
        <li class="crumb-icon">
            <a href="/admin">
                <span class="glyphicon glyphicon-home"></span>
            </a>
        </li>
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb->url && !$breadcrumb->last && !$breadcrumb->first)
                <li class="crumb-link"><a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a></li>
            @elseif (!$breadcrumb->first)
                <li class="crumb-trail">{{{ $breadcrumb->title }}}</li>
            @endif
        @endforeach

    </ol>
@endif