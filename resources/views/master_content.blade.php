<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflect Engineer</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
</head>
<body class="content-body">
@include('layout.head_content')

    <div id="sidebar" class="shadow">
    <ul class="list-unstyled components">
            <li>
                <a href="test2">Dashboard</a>
            </li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" class="dropdown-toggle">Product</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Add Product</a>
                    </li>
                    <li>
                        <a href="#">Add Category</a>
                    </li>
                    <li>
                        <a href="#">View Product</a>
                    </li>
                </ul>
            </li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" class="dropdown-toggle">Report</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Product Sold</a>
                    </li>
                    <li>
                        <a href="#">Gross and Net Profit</a>
                    </li>
                    <li>
                        <a href="#">Sales Chart</a>
                    </li>
                </ul>
            </li>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" class="dropdown-toggle">Tables</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Tables 1</a>
                    </li>
                    <li>
                        <a href="#">Tables 2</a>
                    </li>
                    <li>
                        <a href="#">Tables 3</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="page">
        <div class="main">
            <div>
            @yield('content')
            </div>
        </div>
    </div>

    
<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/popper.js') }}"></script>
<script src="{{ url('js/bootstrap.js') }}"></script>
</body>
</html>