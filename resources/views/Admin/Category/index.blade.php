@extends('Sidebar.sidebar')
@section('title', 'Category')
@section('content')

    <h1>Category</h1>
    <form action="/category/save" method="POST" id="CateForm">
        @csrf
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category title</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody class="body">
                @foreach ($categories as $cate)
                    <tr>
                        <td>{{ $cate->id }}</td>
                        <td>{{ $cate->tagName }}</td>
                        <td>{{ $cate->created_at }}</td>
                        <td>{{ $cate->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex" style="height: 40px;">
            <div class="col">
                <button id="saveBtn" class="btn btn-success" hidden type="submit" onclick="SaveChanges()"> Save ✅</button>
            </div>
            <div class="col">
                <button class="btn btn-danger" onclick="AppendRow()">Add More📝</button>
            </div>
        </div>
    </form>

    <script>
        function SaveChanges() {
            var saveBtn = document.querySelector('#saveBtn');
            saveBtn.hidden = true;



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
