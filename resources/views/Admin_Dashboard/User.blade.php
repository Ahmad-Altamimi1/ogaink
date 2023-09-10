<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        /* Reset some default browser styles */
        html,
        body,
        h1 {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        header {
            background-color: #4CC790;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        main {
            margin: 20px;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        button {
            background-color: #FF9F29;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #3c9ee5;
            color: #fff;
        }
    </style>
</head>

<body>
    <header>
        <h1> Manage Your User</h1>
    </header>
    <main>
        <div class="container">
            <div class="user-form">
                <label for="userName">First Name</label>
                <input type="text" id="FirstName" name="FirstName">
                <label for="userName">Last Name</label>
                <input type="text" id="LastName" name="LastName">
                <label for="userEmail">Email</label>
                <input type="text" id="userEmail" name="userEmail">
                <label for="userPassword">Password</label>
                <input type="text" id="userPassword" name="userPassword">
                <label for="userImage">Image</label>
                <input type="file" id="userImage" name="userImage">
                <button class="btn btn-warning">Add User</button>
            </div>
        </div>
        <div class="container">
            <table class="table table-hover">
                <thead style="background-color: #3c9ee5"> 
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Image</th>
<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Users as $User)
                    <tr>
                        <td>{{ $User['id'] }}</td>
                        <td>{{ $User['FirstName'] }}</td>
                        <td>{{ $User['LastName'] }}</td>
                        <td>{{ $User['userEmail'] }}</td>
                        <td>{{ $User['userPassword'] }}</td>
                        <td>
                            <div>
                                @if ($User->UserImage)
                                    <img src="{{ asset('images/Users/' . $User->UserImage) }}"
                                        alt="{{ $User->UserFirstName }}" width="200" height="200">
                                @endif
                            </div>
                        </td>
                        @endforeach
                        
                        <td><button style="margin-right:5px" class="btn btn-primary">Edit</button><button
                                class="btn btn-danger">Delete</button></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
