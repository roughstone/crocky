<div class="modal fade" id="company-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="companies-form" action="/{{ request()->route('locale') }}/companies">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <span class="title_add">@lang('companies.title_add')</span>&nbsp;
                        <span class="title_edit">@lang('companies.title_edit')</span>&nbsp;
                        <span class="title_firm'">@lang('companies.title_firm')</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.company_name')</span>
                        </div>
                        <input type="text" class="form-control" name="name">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.accountable_person')</span>
                        </div>
                        <input type="text" class="form-control" name="accountable_person">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.UIC')</span>
                        </div>
                        <input type="text" class="form-control" name="UIC">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.VAT')</span>
                        </div>
                        <input type="text" class="form-control" name="VAT">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.country')</span>
                        </div>
                        <input type="text" class="form-control" name="country">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.city')</span>
                        </div>
                        <input type="text" class="form-control" name="city">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.address')</span>
                        </div>
                        <input type="text" class="form-control" name="address">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.phone')</span>
                        </div>
                        <input type="text" class="form-control" name="phone">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.email')</span>
                        </div>
                        <input type="text" class="form-control" name="email">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@lang('companies.type')</span>
                        </div>
                        <input type="text" class="form-control" name="type">
                        <span class="invalid-feedback" role="alert"><strong></strong></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary button-close" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
