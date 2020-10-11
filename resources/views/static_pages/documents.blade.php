@extends('layouts.' . (config('view.theme') ?? 'app') )

@section('title', __('Documents'))

@section('description', config('custom.main_description'))

@section('content')

@endsection
