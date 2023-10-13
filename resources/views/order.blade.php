<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">My Orders</h1>
    <style>
        table{
            border-collapse: collapse;
        }
        td,th{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
    <div class="table">
        <table>
            <thead>
                <h3>Engine Service</h3>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Bike No</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gets as $get)
                <tr>
                    <td>
                        {{$get->id}}
                    </td>
                    <td>
                        {{$get->name}}
                    </td>
                    <td>
                        {{$get->phone}}
                    </td>
                    <td>
                        {{$get->bno}}
                    </td>
                    <td>
                        {{$get->cin}}
                    </td>
                    <td>
                        {{$get->cout}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
    <div class="table">
        <table>
            <thead>
                <h3>Oil Service</h3>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Bike No</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gets as $get)
                <tr>
                    <td>
                        {{$get->id}}
                    </td>
                    <td>
                        {{$get->name}}
                    </td>
                    <td>
                        {{$get->phone}}
                    </td>
                    <td>
                        {{$get->bno}}
                    </td>
                    <td>
                        {{$get->cin}}
                    </td>
                    <td>
                        {{$get->cout}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="table">
        <table>
            <thead>
                <h3>General Service</h3>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone No</th>
                    <th>Bike No</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gets as $gc)
                <tr>
                    <td>
                        {{$gc->id}}
                    </td>
                    <td>
                        {{$gc->name}}
                    </td>
                    <td>
                        {{$gc->phone}}
                    </td>
                    <td>
                        {{$gc->bno}}
                    </td>
                    <td>
                        {{$gc->cin}}
                    </td>
                    <td>
                        {{$gc->cout}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
</body>

</html>