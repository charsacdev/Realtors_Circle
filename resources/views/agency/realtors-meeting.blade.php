@extends('agency.dashboardheader') 
  @section('title', 'Realtor Schedule Meeting')
  @section('content-dashboard')
    @livewire('agency.realtors-schedule-meeting', ['realtor_id' => $realtor_id])
  @endsection

