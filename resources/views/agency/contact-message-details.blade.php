@extends('agency.dashboardheader') 
  @section('content-dashboard')
    @livewire('agency.contact-message-details', ['message_id' => $message_id]);
  @endsection