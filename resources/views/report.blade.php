@extends('layouts.app')

@section('content')
<!-- page content -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<section class="s-story">
  <div class="row section-header has-bottom-sep" data-aos="fade-up">
        <div class="col-full">
            <h1 class="display-2">
              Attendance Report
            </h1>
        </div>
  </div> <!-- end section-header -->
  <div class="row services-list block-1-2 block-tab-full">
      <table id="dtReport"></table>
   </div> <!-- end services-list -->
</section>

@endsection
