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
    Types:
    <p style="margin-left: 10px;">
        @foreach($request['types'] as $type)
            {{ $type ." | "}}
        @endforeach
    </p>
</div>

<div style="margin-top: 10px;">
    Comments:
    <p style="margin-left: 10px;">
        {{$request['comment']}}
    </p>
</div>