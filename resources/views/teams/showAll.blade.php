@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>All Teams</h1>
        @if(count($allTeams) > 0)
            <div class="well col-md-6" style="margin: 0px auto;color: white;">
                <table class="table table-striped table-bordered table-hover bg-primary">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Name</th>
                            <th>Short Name</th>
                            <th>Statistics</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allTeams as $team)
                            <tr>
                                <td><img src="{{$team['TeamIconUrl']}}" width="100px"></td>
                                <td>{{$team['TeamName']}}</td>
                                <td>{{$team['ShortName']}}</td>
                                <td><a href="teams/{{$team['TeamId']}}" style="color: white;">Get info</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>No teams found</p>
        @endif
    </div>
@endsection