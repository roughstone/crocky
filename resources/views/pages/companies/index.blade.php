<div class="card">
    <div class="card-header">
        <h3 class="d-inline">@lang('companies.companies')</h3>
        <a href="" class="nav-link d-inline float-right" data-toggle="modal" data-target="#company-modal">
            <i class="far fa-plus-square"></i> @lang('companies.add_company')
        </a>
    </div>
    <div class="card-body">
        <table id="companies-table" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" style="width: 10%">#</th>
                    <th scope="col" style="width: 35%">@lang('companies.name')</th>
                    <th scope="col" style="width: 35%">@lang('companies.type')</th>
                    <th class="text-center" scope="col" style="width: 20%">@lang('companies.actions')</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    @include('pages.companies.company_row', ['company' => $company])
                @endforeach
            </tbody>
            </table>
    </div>
    <div class="card-footer">

    </div>
    @include('pages.companies.modal')
</div>
