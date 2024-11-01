@extends('homepages.accountheader') 
  @section('authContent')
     @livewire('account-new-password', ['token' => $token])
  @endsection

