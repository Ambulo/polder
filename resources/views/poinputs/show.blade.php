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

<a href="{{ URL::previous() }}"><button type="button" class="btn btn-primary">Back</button></a>

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
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $poinput->id }}</td>
            <td>{{ $poinput->poDate }}</td>
            <td>{{ $poinput->desc }}</td>
            <td>{{ $poinput->transNum }}</td>
            <td>{{ $poinput->origAmt }}</td>
            <td>{{ $poinput->adjAmt }}</td>
            <td>{{ $poinput->unrelAmt }}</td>
        </tr>
    </tbody>
</table>
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
        <?php $total=0 ?>
        @foreach($ledgers as $ledger => $value)
            <tr>
                <td>{{ $value->poNum }}</td>
                <td>{{ $value->txNum }}</td>
                <td>{{ $value->desc }}</td>
                <td>{{ $value->amt }}</td>
                <?php $total = $total + $value->amt; ?>
                <td>{{ $value->relieved }}</td>
            </tr>
        @endforeach
            <tr>
                <td>TOTAL</td>
                <td></td>
                <td></td>
                <td>{{ $total }}</td>
                <td></td>
            </tr>
        </tbody>
    </table>

</body>
</html>