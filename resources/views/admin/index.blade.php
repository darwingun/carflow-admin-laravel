@extends('layouts.admin')

@section('content')
    <!-- @App Content -->
    <!-- =================================================== -->
    <div>
        @include('_partials.sidebar')
      <!-- #Main ============================ -->
      <div class="page-container">
        <!-- ### $Topbar ### -->

        @include('_partials.topbar')
        <!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
          </div>
        </main>

        <!-- ### $App Screen Footer ### -->
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
          <span>Copyright © 2018 Car Flow. All rights reserved.</span>
        </footer>
      </div>
    </div>
@endsection