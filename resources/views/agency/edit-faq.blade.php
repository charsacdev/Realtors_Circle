@extends('agency.dashboardheader') 
  @section('title', 'Update FAQ')
  @section('content-dashboard')
    @livewire('agency.edit-faq', ['faq_id' => $faq_id])
  @endsection