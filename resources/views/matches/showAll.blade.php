@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>All Matches</h1>
        @if(count($allMatches) > 0)
            <div class="well col-md-10" style="margin: 0px auto;color: white;">
                <table class="table table-striped table-hover bg-primary">
                    <thead>
                        <tr>
                            <th>League Name</th>
                            <th>Logo</th>
                            <th>Team 1</th>
                            <th>Result</th>
                            <th>Team 2</th>
                            <th>Logo</th>
                            <th>Finished</th>
                            <th>City</th>
                            <th>Stadium</th>
                            <th>More info</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allMatches as $match)
                            <tr>
                                <td>{{$match['LeagueName']}}</td>
                                <td><img src="{{$match['Team1']['TeamIconUrl']}}" width="50px"></td>
                                <td>{{$match['Team1']['TeamName']}}</td>
                                <td>
                                    @if($match['MatchResults'] > 0)
                                        @foreach ($match['MatchResults'] as $item)
                                            {{$item['PointsTeam1']}}
                                            :
                                            {{$item['PointsTeam2']}}
                                            @break
                                        @endforeach
                                    @else
                                        No result
                                    @endif
                                </td>
                                <td>{{$match['Team2']['TeamName']}}</td>
                                <td><img src="{{$match['Team2']['TeamIconUrl']}}" width="50px"></td>
                                <td>
                                    @if($match['MatchIsFinished'])
                                        Finished!
                                    @else
                                        Not Finished!
                                    @endif
                                </td>
                                <td>{{$match['Location']['LocationCity']}}</td>
                                <td>{{$match['Location']['LocationStadium']}}</td>
                                <td><a href="matches/{{$match['MatchID']}}" style="color: white;">Get info</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>No matches found</p>
        @endif
    </div>
@endsection