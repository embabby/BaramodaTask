@include('surveys.header')

<meta name="csrf-token" content="{{ csrf_token() }}">

@section('sidebar')
  @include('surveys.sidebar')
@show
<div class="content-wrapper">
@include('errors')
@include('message')
@yield('body')
</div>
<script src="{{asset("plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
@include('surveys.footer')
@section('scrips')
 
  @include('surveys.scripts')
  @yield('page_scripts')
@show
</body>
</html>

