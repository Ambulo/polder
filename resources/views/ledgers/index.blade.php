<!DOCTYPE html>
<html>
<head>
	<title>Vista Index</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
        body { padding-top:50px; } /* add some padding to the top of our site */
    </style>
</head>
<body>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>PO Number</td>
                <td>TX Number</td>
                <td>Description</td>
                <td>Amount</td>
                <td>Relieved?</td>
            </tr>
        </thead>
        <tbody>
        @foreach($ledgers as $ledger => $value)
            <tr>
                <td>{{ $value->poNum }}</td>
                <td>{{ $value->txNum }}</td>
                <td>{{ $value->desc }}</td>
                <td>{{ $value->amt }}</td>
                <td>{{ $value->relieved }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>