<h4>Archives</h4>
<ol class="list-unstyled">
@foreach ($archives as $stats)
    <li>
        <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
            {{ $stats['month'] . ' ' . $stats['year'] }}
        </a>
    </li>
@endforeach
</ol>
