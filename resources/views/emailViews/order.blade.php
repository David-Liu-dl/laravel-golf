
<div>
    Name: {{$request['name']}}
</div>

<div>
    E-mail: {{$request['email']}}
</div>

<div>
    Phone: {{$request['phone']}}
</div>

<div>
    Hand: {{$request['hand']}}
</div>

<div>
    <p>Booked slots:</p>
    @foreach(json_decode($request['selected_blocks'],true)['slots'] as $slot)
            <p style="margin-left: 10%;">{{ \Carbon\Carbon::parse($slot) -> format('Y-m-d H:i:s') .
             " to " . \Carbon\Carbon::parse($slot) ->addHour() -> format('H:i:s')}}</p>
    @endforeach
</div>
