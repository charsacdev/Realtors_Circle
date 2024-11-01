@extends('homepages.accountheader') 
  @section('title', 'Verify Email')
  @section('authContent')
      @livewire('email-verification')
  @endsection