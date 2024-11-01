@extends('agency.dashboardheader') 
  @section('title', 'Realtors Application')
  @section('content-dashboard')
    @livewire('agency.realtors-application', ['application_id' => $application_id]);
  @endsection

