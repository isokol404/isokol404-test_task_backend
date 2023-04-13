<!DOCTYPE html>
<html>
<head>
    <title>User Table</title>
    <style>
        /* Стили для таблицы */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid black;
        }

        /* Стили для шапки таблицы */
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1>Table with information about users</h1>
<table>
    <thead>
    <tr>

        <th>Name</th>
        <th>Country</th>
        <th>Country phone</th>
        <th>Phone number</th>

        <th>Passport number</th>
        <th>Issued by</th>
        <th>Date of issue</th>
        <th>Passport id</th>


    </tr>
    </thead>
    <tbody>
    @foreach ($data  as $row)
        <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->country }}</td>
            <td>{{ $row->country_code }}</td>
            <td>{{ $row->phone_number }}</td>

            <td>{{ $row->passport_number }}</td>
            <td>{{ $row->issued_by }}</td>
            <td>{{ $row->date_of_issue }}</td>
            <td>{{ $row->passport_id }}</td>


        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
