@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title', __('Contacts'))

@section('description', config('custom.main_description'))

@section('content')

@endsection
