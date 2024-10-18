@extends('agency.dashboardheader') 
  @section('content-dashboard')
    @livewire('agency.realtor-profile-details', ['realtor_id' => $realtor_id])
  @endsection