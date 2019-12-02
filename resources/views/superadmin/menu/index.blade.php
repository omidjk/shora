@extends('layouts.app')


    @section('contents')
        {!! Menu::render() !!}
    @endsection


    @push('scripts')
        {!! Menu::scripts() !!}
    @endpush
