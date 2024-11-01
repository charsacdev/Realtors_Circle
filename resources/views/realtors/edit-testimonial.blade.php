@extends('realtors.dashboard-header') 
  @section('title', 'Update Testimonial')
  @section('content-dashboard')
    @livewire('realtors.edit-testimonial', ['testimonial_id' => $testimonial_id])
  @endsection