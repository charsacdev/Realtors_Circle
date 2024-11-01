@extends('admin.dashboardheader') 
    @section('title', 'Contact Us Details')
    @section('content-dashboard')
        @livewire('admin.contact-us-details', ['message_id' => $message_id])
    @endsection