@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>All Teams</h1>
        @if(count($allTeams) > 0)
            <div class="well col-md-6" style="margin: 0px auto;">
                <table class="table table-striped table-bordered table-hover bg-primary">
                    <thead>
                        <tr>
                            <th>Logo</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Short Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allTeams as $team)
                            <tr>
                                <td><img src="{{$team['TeamIconUrl']}}" width="100px"></td>
                                <td>{{$team['TeamId']}}</td>
                                <td>{{$team['TeamName']}}</td>
                                <td>{{$team['ShortName']}}</td>
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