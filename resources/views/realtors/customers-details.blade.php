@extends('realtors.dashboard-header')
  @section('title', 'Customer Details')
  @section('content-dashboard')
    @livewire('realtors.customer-details', ['customer_id' => $customer_id])
  @endsection

