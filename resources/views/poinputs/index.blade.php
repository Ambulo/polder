<!DOCTYPE html>
<html>
<head>
	<title>Visma Index</title>
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
            <td>PO#</td>
            <td>PO Date</td>
            <td>Company</td>
            <td>Transaction#</td>
            <td>Orig. Amount</td>
            <td>Adj. Amount</td>
            <td>Unrel. Amount</td>
            <td>Number of Ledger Records</td>
            <td>Fully Relieved?</td>
        </tr>
    </thead>
    <tbody>
    @foreach($poinputs as $poinput => $value)
        <tr>
            <td><a href="{{ URL::to('poinputs/' . $value->id) }}"> {{ $value->id }} </a></td>
            <td>{{ $value->poDate }}</td>
            <td>{{ $value->desc }}</td>
            <td>{{ $value->transNum }}</td>
            <td>{{ $value->origAmt }}</td>
            <td>{{ $value->adjAmt }}</td>
            <td>{{ $value->unrelAmt }}</td>
            <td>{{ $value->ledgers->count() }}</td>
            <td>{{ $value->fullRel }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>