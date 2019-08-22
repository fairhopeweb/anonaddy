@extends('layouts.app')

@section('content')
    <div class="container py-8">
        @include('shared.status')

        <usernames :initial-usernames="{{json_encode($usernames)}}" :username-count="{{config('anonaddy.additional_username_limit')}}" />
    </div>
@endsection