@extends('layout.masterLayout')

@section('page')

@verbatim
<div id="app">{{  message }}</div>
@endverbatim
    @include('pages.home') 
@endsection

@section('title')
    Home
@endsection

@push('scripts')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>


<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>@endpush