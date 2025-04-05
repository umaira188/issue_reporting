@extends('layouts.app')

@section('content')
    <h2>Division Complaints</h2>

    @foreach($complaints as $complaint)
        <div>
            <strong>{{ $complaint->issue_id }}</strong> - {{ ucfirst($complaint->category) }} - {{ ucfirst($complaint->status) }}
            <p>{{ $complaint->details }}</p>
            <hr>
        </div>
    @endforeach
@endsection
