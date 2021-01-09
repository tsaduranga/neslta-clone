<html lang="en"><head>
    <base href="https://nastla.com/">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <title>Calculator</title>

    <style>
        body {
            padding-top: 10px;
            font-family: "Open Sans", "sans-serif";
            font-size: 13px;
        }

        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        label {
            margin-top: 7px;
            font-weight: normal;
        }

        ul {
            margin-bottom: 0px;
        }

        table {
            margin-bottom: 0px !important;
        }

        .table th
        {
            background: #0a2640;
            color: #fff;
            padding: 8px 10px
        }

        .table td {
            vertical-align: middle;
            padding: 4px 10px
        }


    </style>

</head>
<body data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed="">

<div class="container">
    <div class="row">
        <div class="col-sm-12">

                        <form class="form" method="post">
                            @csrf

                        <ul class="list-group">
                            <li class="list-group-item list-group-item-primary"><b>Calculator - {{ $package['name']}}</b></li>
                            <table class="table table-bordered">

                                <tbody>

                                <tr>
                                    <td width="50%">
                                        <label>Deposit Amount ($)

                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" name="amount" class="form-control form-control-sm input-sm" value="" required="">
                                    </td>
                                </tr>
                                                                                                <tr>
                                    <td>
                                        <label>Total Return</label>
                                    </td>
                                    <td>
                                       <span class="text-danger">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Net Profit</label>
                                    </td>
                                    <td>
                                        <span class="text-danger">--</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button class="btn btn-success btn-sm btn-block">Calculate</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </ul>

                    </form>

        </div>
    </div>
</div>




</body></html>
