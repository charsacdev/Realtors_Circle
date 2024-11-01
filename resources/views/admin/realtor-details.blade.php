@extends('admin.dashboardheader') 
    @section('title', 'Realtor Details')
    @section('content-dashboard')
        @livewire('admin.realtor-details', ['slug' => $slug])
    @endsection