<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('parts/header')
    <br>
    <br>
    <br>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
           body {
                    font-family: 'Arial', sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f4f4f4;
                }

                .container {
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 20px;
                }

                .dashboard {
                    background-color: #fff;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    border-radius: 8px;
                    overflow: hidden;
                }

                .dashboard-header {
                    background-color: #800336;
                    color: #fff;
                    padding: 20px;
                    text-align: center;
                }

                .dashboard-content {
                    padding: 20px;
                }

                .dashboard-table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                }

                .dashboard-table th, .dashboard-table td {
                    padding: 15px;
                    text-align: left;
                    border: 1px solid #ddd;
                }

                .dashboard-table th {
                    background-color: #3490dc;
                    color: #fff;
                    border-bottom: 2px solid #fff;
                }

                .dashboard-table tbody tr:hover {
                    background-color: #f5f5f5;
                }
                td, th {
                    width: 150px;
                    text-align: center;
                    border: 1px solid black;
                    padding: 5px;
                }
        </style>
    </head>
    <body>
        <livewire:dashboard />
    </body>
</html>
