@extends('agency.dashboardheader') 
  @section('title', 'Message Inquiry')
  @section('content-dashboard')
    @livewire('agency.message-inquiry', ['inquiry_id' => $inquiry_id])
  @endsection

