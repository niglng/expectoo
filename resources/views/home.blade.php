 @extends('layouts.app')

 @section('content')
 <div class="container">
    <a href="{{ route('dashBoard') }}">Statistics Page</a><br/><br/>
     <table style="width: 80%">
         <caption colspan="2">List of Characters</caption>
         <thead>
             <tr>
                 <th style="width:30%; text-align:left"><b>Picture</b></th>
                 <th style="width:50%; text-align:left" scope="col"><b>Name</b></th>
                 <th style="width:20%; text-align:left" scope="col"><b>Status</b></th>
             </tr>
         </thead>
         <tbody>
             @foreach ($characters as $item)
             <tr>
                 <td>
                     <a href="{{ route('actorDetail', $item['id']) }}">
                         <img src="{{$item['image']}}" height="100px" width="100px" alt="{{$item['name']}}" id="myImg{{$item['id']}}">
                     </a>
                 </td>
                 <td>{{$item['name']}}</td>
                 <td>{{$item['status']}}</td>
             </tr>
             @endforeach
         </tbody>
     </table>
     <br />
     <div class="pagination">
         <a href="#">&laquo;</a>
         @for ($i = 1; $i < $characters->lastPage(); $i++)
             <a href="{{ $curPage == $i ? '#' : route('nextpage', $i) }}" class="{{ $curPage == $i ? 'active' : '' }}">{{ $i }}</a>
             @endfor
             <a href="#">&raquo;</a>
     </div>
 </div>
 @endsection
