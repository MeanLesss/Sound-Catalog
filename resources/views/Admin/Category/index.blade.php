@extends('Sidebar.sidebar')
@section('title', 'Category')
@section('content')

    <h1>Category</h1>
    <form action="/category/save" method="POST" id="CateForm">
        @csrf
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>No</th>
                    <th>Category title</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody class="body">
                @foreach ($categories as $cate)
                    <tr>
                        <td width="100px">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item btn text-success" name="editBtn" text="Edit"
                                        onclick="edit('#editInput{{ $cate->id }}','#saveInput{{ $cate->id }}','#cancelInput{{ $cate->id }}')"
                                        type="button">Edit</button></li>
                                <li><a class="dropdown-item text-danger"
                                        href="/category/delete/{{ $cate->id }}">Delete</a></li>
                            </ul>
                        </td>
                        <td>{{ $cate->id }}</td>
                        <td width="200px">
                            <form></form>
                            <form method="GET" id="form{{ $cate->id }}">
                                <input class="form-control w-100 " id="editInput{{ $cate->id }}" name="editInput"
                                    value="{{ $cate->tagName }}" disabled />

                                <button class="btn btn-success" id="saveInput{{ $cate->id }}" type="button"
                                    onclick="SaveEdit('#form{{ $cate->id }}','#editInput{{ $cate->id }}','{{ $cate->id }}')"
                                    hidden>✅</button>
                                <button class="btn btn-danger" id="cancelInput{{ $cate->id }}" type="button"
                                    onclick="CancelEdit('#editInput{{ $cate->id }}','#saveInput{{ $cate->id }}','#cancelInput{{ $cate->id }}')"
                                    hidden>❌</button>
                            </form>
                        </td>
                        <td>{{ $cate->created_at }}</td>
                        <td>{{ $cate->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex" style="height: 40px;">
            <div class="col">
                <button id="saveBtn" class="btn btn-success" hidden type="button" onclick="SaveChanges()"> Save
                    ✅</button>
            </div>
            <div class="col">
                <button class="btn btn-danger" onclick="AppendRow()">Add More📝</button>
            </div>
        </div>
    </form>

    <script>
        function edit(editId, saveInput, cancelInput) {
            var input = document.querySelector(editId);
            var saveInput = document.querySelector(saveInput);
            var cancelInput = document.querySelector(cancelInput);
            // var saveBtn = document.querySelector('#saveBtn');
            // saveBtn.hidden = false;
            input.disabled = false;
            input.hidden = false;
            saveInput.hidden = false;
            cancelInput.hidden = false;
        }
        function CancelEdit(inputID,saveButtonID,cancelButtonID)
        {
            var input = document.querySelector(inputID);
            var saveButton = document.querySelector(saveButtonID);
            var cancelButton = document.querySelector(cancelButtonID);
            input.disabled = true;
            saveButton.hidden = true;
            cancelButton.hidden = true;
        }
        function SaveEdit(formId, inputId, cateId) {
            var form = document.querySelector(formId);
            var input = document.querySelector(inputId);

            form.action = '/category/edit/' + cateId + '/' + input.value;
            form.submit();
        }

        function SaveChanges() {
            var saveBtn = document.querySelector('#saveBtn');
            saveBtn.hidden = true;
            document.querySelector('#CateForm').submit();
        }

        function AppendRow() {

            var tbody = document.querySelector('.body');
            var saveBtn = document.querySelector('#saveBtn');

            // Create a new row
            var row = document.createElement('tr');

            var idCell = document.createElement('td');
            var tagNameCell = document.createElement('td');
            var createdAtCell = document.createElement('td');
            var updatedAtCell = document.createElement('td');

            var idInput = document.createElement('div');
            idInput.textContent = '...';
            // idInput.className = 'btn btn-primary';
            idCell.appendChild(idInput);

            var tagNameInput = document.createElement('input');
            tagNameInput.type = 'text';
            tagNameInput.name = 'title[]';
            tagNameInput.className = 'form-control';
            tagNameInput.required = true;
            tagNameCell.appendChild(tagNameInput);

            var currentDateTime = new Date().toISOString();

            var createdAtInput = document.createElement('input');
            var updatedAtInput = document.createElement('input');

            createdAtInput.type = 'text';
            updatedAtInput.type = 'text';

            createdAtInput.value = currentDateTime;
            updatedAtInput.value = currentDateTime;

            createdAtInput.name = 'created_at';
            updatedAtInput.name = 'updated_at';

            createdAtInput.disabled = true;
            updatedAtInput.disabled = true;

            createdAtCell.appendChild(createdAtInput);
            updatedAtCell.appendChild(updatedAtInput);

            // Append cells to the row
            row.appendChild(idCell);
            row.appendChild(tagNameCell);
            row.appendChild(createdAtCell);
            row.appendChild(updatedAtCell);

            saveBtn.hidden = false;
            // Append the row to the table body
            tbody.appendChild(row);
        }
    </script>
@endsection
