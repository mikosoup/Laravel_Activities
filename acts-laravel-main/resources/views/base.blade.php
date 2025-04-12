<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 
    <style>
#for {
    width: 320px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f8f8f8;
    color: #333;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


h2 {
    text-align: center;
    text-transform: uppercase;
    margin-bottom: 15px;
    color: #222;
}

div {
    margin-bottom: 12px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #444;
}

input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    color: #333;
}

input:focus {
    outline: none;
    border-color: #888;
}

#button {
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}
#butt {
    width: 50%;
    padding: 8px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}
#butt:hover {
    background-color: #ff0000;
}
#but {
    width: 50%;
    padding: 8px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}
#but:hover {
    background-color: #3cff00;
}

#button:hover {
    background-color: #555;
}

.text-danger {
    color: red;
    font-size: 12px;
}


table {
    width: 70%; /* Adjust as needed */
    margin: 20px auto; /* Centers the table horizontally */
    border-collapse: collapse;
}
table {
    margin-top: 50px;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: center;
}

th {
    background-color: #f4f4f4;
}

    </style>
</head>
<body>
    @yield('content')

</body>
</html>