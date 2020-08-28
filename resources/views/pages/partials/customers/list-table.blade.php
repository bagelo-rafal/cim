<thead>
    <tr>
        <th>ID</th>
        <th>Imię i nazwisko</th>
        <th>E-mail</th>
        <th>Telefon</th>
        <th>Status</th>
        <th>Miejscowość</th>
        <th>Źródło</th>
        <th>Akcja</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>24</td>
        <td>Programista Bagelo</td>
        <td>programista@bagelo.cz</td>
        <td>534922186</td>
        <td>Aktywny</td>
        <td>Poznań</td>
        <td>Facebook</td>
        <td>
          <button type="button" data-toggle="modal" data-target=".customer-edit-modal" class="btn btn-sm btn-primary btn-icon">
              <i data-feather="edit"></i>
          </button>
          <a class="remove" href="#">
            <button type="button" onclick="showSwal('passing-parameter-execute-cancel')" class="btn btn-sm btn-danger btn-icon">
                <i data-feather="trash-2"></i>
            </button>
          </a>
        </td>
    </tr>
</tbody>
