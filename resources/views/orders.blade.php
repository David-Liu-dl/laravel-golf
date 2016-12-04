
<style>
    .title{
        width: 100%;
        text-align: center;
    }
    table{
        border: 1px solid #000;
    }
</style>

<div class="title">Order Status - {{ $today }}</div><br/><br/>
<table>
    <tr>
        <td width="50%">Time</td>
        <td width="50%">Total Orders</td>
    </tr>
    <tr>
        <td>Past One Month</td>
        <td>{{$former_order['month']}}</td>
    </tr>
    <tr>
        <td>Past 7 Days</td>
        <td>{{$former_order['7days']}}</td>
    </tr>
    <tr>
        <td>Yesterday</td>
        <td>{{$orders->count()}}</td>
    </tr>
</table><br/><br/>
<p>Please find the order list in the attachment!</p>

