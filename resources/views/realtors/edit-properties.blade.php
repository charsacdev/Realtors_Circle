@extends('realtors.dashboard-header')
  @section('title', 'Update property')
  @section('content-dashboard')
    @livewire('realtors.editproperty', ['property_id' => $property_id])
  @endsection

