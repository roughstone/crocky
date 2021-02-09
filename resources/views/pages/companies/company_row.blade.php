<tr data-company="{{json_encode($company)}}">
    <th scope="row" style="width: 10%">{{$company->id}}</th>
    <td style="width: 35%">{{$company->name}}</td>
    <td style="width: 35%">{{$company->accountable_person}}</td>
    <td class="text-center" style="width: 20%">
        <a class="nav-link d-inline p-1 get-page" href="/{{ request()->route('locale') }}/companies/{{$company->id}}">
            <i class="far fa-folder-open bg-dark p-1 rounded text-info"></i>
        </a>
        <a class="nav-link d-inline p-1 edit-company" href="">
            <i class="far fa-edit bg-dark p-1 rounded text-warning"></i>
        </a>
        <a class="nav-link d-inline p-1 delete-company" href="/{{ request()->route('locale') }}/companies/{{$company->id}}/delete">
            <i class="far fa-trash-alt bg-dark p-1 rounded text-danger"></i>
        </a>
    </td>
</tr>
