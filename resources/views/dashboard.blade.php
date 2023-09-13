@extends('layouts.app')

@section('content')
{{-- 'bestThree' => $this->getHighestAppearance($characters),
'' => $this->groupByStatus($characters),
'' => $this->locationWithHumans($characters),
'' => $this->mostMale($characters),
'' => $this->originList($characters),
 --}}


<table style="width: 80%">
    <caption colspan="2">The top 3 characters that appeared in the most episodes</caption>
    <tbody>
        <tr>
            @forelse($bestThree as $key => $value)
            <td>
                <img src="{{$value['image']}}" height="100px" width="100px" alt="{{$value['name']}}">
                <div><span><b>Name: </b>{{  $value['name'] }}</span></div>
                <div><span><b>Episode(s) in: {{  $value['episode'] }}</span></div>
            </td>
            @empty
            <td><div>None for now</div></td>
            @endforelse
        </tr>
    </tbody>
</table>
<br />


<table style="width: 80%">
    <caption colspan="2">The Status that is assigned to the most characters <h4>{{ $statusMost }}</h4></caption>
</table>
<br />

<table style="width: 80%">
    <caption colspan="2">The Location with the most characters of the species “human”</caption>
    <tbody>
        <tr>
            <td style="text-align:center">
              <div><span><h4>{{ $location["name"] }}</h4> appeared <b>{{ $location["counts"] }}</b></span></div>
            </td>
        </tr>
    </tbody>
</table>
<br />

<table style="width: 80%">
    <caption colspan="2">The species with the most male characters</caption>
    <tbody>
        <tr>
            <td style="text-align:center">
              <div><span><h4>{{ $mostMale["name"] }}</h4> appeared <b>{{ $mostMale["counts"] }}</b></span></div>
            </td>
        </tr>
    </tbody>
</table>
<br />


<table style="width: 80%">
    <caption colspan="2">A List with all unique origin names [total number of unique origin = {{ count($originDisplay) }}]</caption>
    <tbody>
        <thead>
            <tr>
                <th style="width:30%; text-align:left"><b>Origin Name</b></th>
                <th style="width:50%; text-align:left" scope="col"><b>Species</b></th>
            </tr>
        </thead>
        @foreach($originDisplay as $key => $origin)
        <tr>
            <td style="width:30%; text-align:center"><span>{{$origin['name']}} [{{ $origin['speciesCount'] }}]</span></td>
            <td style="width:50%; text-align:left">
                @foreach($origin['species'] as $key => $value)
                <span>{{$value['name']}} [{{$value['count']}} ] </span><br />
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br />
@endsection