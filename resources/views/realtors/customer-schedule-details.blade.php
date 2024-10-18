@extends('realtors.dashboard-header') 
  @section('title', 'Schedule')
  @section('content-dashboard')
    @livewire('realtors.customer-schedule-details', ['schedule_id' => $schedule_id])
  @endsection

