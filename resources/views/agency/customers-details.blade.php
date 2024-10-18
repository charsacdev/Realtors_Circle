@extends('agency.dashboardheader') 
  @section('content-dashboard')
    @section('title', 'Customer Details')
    @livewire('agency.customers-details', ['customer_id' => $customer_id])
  @endsection

