<div class="card">
    @if (!empty($title))
    <header class="card-header">
        <p class="card-header-title">
            Geneva Space Cruiser
        </p>
    </header>
    @endif

    <div class="card-content">
        {!! $slot !!}
    </div>

    @if(!empty($footer))
    <footer class="card-footer">
        {!! $footer !!}
    </footer>
    @endif
</div>
