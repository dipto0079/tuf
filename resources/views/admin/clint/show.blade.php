@extends('admin.master')

@section('content')
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Team</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Forms</li>
                            <li class="breadcrumb-item active" aria-current="page">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
<!DOCTYPE html>
<html>
<head>
    <style>
        /* Add some basic styling for the table */
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px auto;
        }

        /* Style table headers */
        th, td {
            border: 1px solid #685151;
            text-align: left;
            padding: 8px;
        }

        /* Add background color to header row */
        th {
            background-color: #c8e08e;
        }
    </style>
</head>
<body>
    <table>
        <div>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Number</th>
                <th>Address</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Zip</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
        </div>
        <div>
            @forelse ($test as $clint )
            <tr>
                <td>{{$clint->name}}</td>
                <td>{{$clint->username}}</td>
                <td>{{$clint->email}}</td>
                <td>{{$clint->number}}</td>
                <td>{{$clint->address}}</td>
                <td>{{$clint->country}}</td>
                <td>{{$clint->state}}</td>
                <td>{{$clint->city}}</td>
                <td>{{$clint->zip}}</td>

               
                <td class="px-6 py-4">

                    <a href="{{route('cedit', $clint->id)}}" class="font-medium text-white hover:underline">Edit</a>

                </td>
                <td class="px-6 py-4">

                    <a href="{{route('cdelete', $clint->id)}}" class="font-medium text-white hover:underline">Delete</a>

                </td>

                @empty

                @endforelse

            </tr>
        </div>

    </table>
</body>
</html>
@endsection
