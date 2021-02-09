<nav>
    <div class="nav-item">
        <a href="/{{ request()->route('locale') }}/companies" class="nav-link get-page">@lang('nav.companies')</a>
    </div>
    <div class="nav-item">
        <a href="" class="nav-link get-page">@lang('nav.balance')</a>
    </div>
    <div class="nav-item">
        <a href="" class="nav-link get-page">@lang('nav.balance_by_firms')</a>
    </div>
    <div class="nav-item">
        <a href="" class="nav-link get-page">@lang('nav.deals')</a>
    </div>
    <div class="nav-item">
        <a href="" class="nav-link get-page">@lang('nav.payments')</a>
    </div>
    <div class="nav-item">
        <a id="goods" href="/{{ request()->route('locale') }}/goods" class="nav-link get-page">@lang('nav.goods')</a>
    </div>
</nav>
