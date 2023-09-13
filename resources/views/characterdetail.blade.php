@extends('layouts.app')

@section('content')
<table style="width: 80%">
    <caption colspan="2"><a href="{{ url()->previous() }}" class="btn btn-primary">Return to List</a></caption>
    <tbody>
        <tr>
            <td style="width:30%; text-align:center"><img src="{{$character['image']}}" height="400px" width="400px" alt="{{$character['name']}}"></td>
            <td style="width:50%; text-align:left">
                <span><b>Name:</b> {{$character['name']}} </span><br />
                <span><b>Specie:</b> {{$character['species']}} </span><br />
                <span><b>Date Created:</b> {{ \Carbon\Carbon::parse($character['created'])->format('d M Y')}} </span><br />
                <span><b>Status:</b> {{$character['status']}} </span><br />
                <span><b>Gender:</b> {{$character['gender']}} </span><br />
                <span><b>Location:</b> {{$character['location']['name']}} </span><br />
                <span><b>Episode featured:</b> {{ count($character['episode']) }} </span><br />                
            </td>
        </tr>
    </tbody>
</table>
<br />
@endsection
