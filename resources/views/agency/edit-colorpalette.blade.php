@extends('agency.dashboardheader') 
  @section('title', 'Update Color palettes')
  @section('content-dashboard')
    @livewire('agency.edit-colorpalette', ['palette_id' => $palette_id])
  @endsection

