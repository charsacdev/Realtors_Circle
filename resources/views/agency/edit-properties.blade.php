@extends('agency.dashboardheader') 
  @section('title', 'Edit Property')
  @section('content-dashboard')
    @livewire('agency.edit-property', ['property_id' => $property_id])
  @endsection

