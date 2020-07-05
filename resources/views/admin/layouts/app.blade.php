<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Autochase">
  <meta name="author" content="Ellison Corp">
  <title>{{ config('app.name') }} | admin</title>
  <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/png">
  <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/gh/tonsky/FiraCode@4/distr/fira_code.css') }}}}">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
  <!--CSS Vex -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/vex/vex.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/css/vex/vex-theme-plain.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/select2/dist/css/select2.min.css') }}">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/argon.css?v=1.1.0') }}" type="text/css">
  <!-- toastr notification library -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/toastr.css') }}" type="text/css">
  <link type="text/css" href="{{ ('landing/assets/css/vue-select.css') }}" rel="stylesheet">


  <link href="{{ asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css') }}" rel="stylesheet">



  <style>
    #login-card{
      /*background: rgba(0, 0, 0, 0.4);*/
      background-color: transparent !important;
      border: none;

    }

    /* @font-face { font-family: Proximanova; src: url('{{ asset('fonts/Proxima Nova Extra Condensed Light.otf') }}'); } 
   @font-face { font-family: Proximanova; font-weight: bold; src: url('{{ asset('fonts/') }}');} */

      body,html,p,h1,h2,h3,h4,h5,h6,span,li,ul,button,a,code{
        font-family: 'Fira Code', monospace; !important;
        font-size: 0.9rem !important;
        font-weight: 500 !important;
      }

     /*  body,html,p,h1,h2,h3,h4,h5,h6,span,li,ul,button,a,code{
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;
        font-size: 0.9rem !important;
        font-weight: normal !important;
      }*/

      .large{
        font-size: 1.3rem !important;
      }

      .height-200{
        max-height: 200px;
        margin-bottom: 0.5em;
      }

      .whitespace-wrap{
        white-space: normal !important;
      }
      
  </style>
</head>

<body>

  <main id="app">
      @yield('content')
  </main>  

  <!-- Core -->        
  <script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('landing/assets/js/moment.js') }}"></script>
  <script type="text/javascript" src="{{ asset('https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  {{--  <script src="{{ asset('admin/assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>  --}}
  <script src="{{ asset('admin/assets/vendor/select2/dist/js/select2.min.js') }}"></script>
  <!-- Argon JS and other addons-->
  
  <script src="{{ asset('admin/assets/js/argon.js?v=1.1.0') }}" ></script>
   <script src="{{ asset('admin/assets/js/vue.js') }}"></script>
   <script src="{{ asset('landing/assets/js/vue-select.js') }}"></script>
  <script src="{{ asset('admin/assets/js/demo.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/axios.js') }}"></script>
  <script src="{{ asset('admin/assets/js/moment.js') }}"></script>
  <script src="{{ asset('admin/assets/js/vue-moment.js') }}"></script>
  <script src="{{ asset('admin/assets/js/toastr.js') }}"></script><!--for notifications -->
  <script src="{{ asset('admin/assets/js/sweetalert.js') }}"></script><!--for notifications -->
  <script src="{{ asset('admin/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/vue-truncate.js') }}"></script>
       <!--  notification JS
  ============================================ -->
  <script src="{{ asset('admin/assets/js/notification/bootstrap-growl.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/notification/notification-active.js') }}"></script>
  <script src="{{ asset('admin/assets/js/vue-pagination.js') }}" ></script>
  <!-- Vex -->
  <script src="{{ asset('admin/assets/js/vex/vex.combined.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/popper.js') }}"></script>
  <script src="{{ asset('admin/assets/js/summernote.js') }}"></script>
  {{--  <script src="{{ asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js') }}"></script>  --}}
  <script>
    const base_url = "{{ url('/') }}";
    vex.defaultOptions.className = 'vex-theme-plain'
    axios.defaults.baseURL = base_url;
    axios.defaults.headers.common['X-CSRF-TOKEN'] = "{{ csrf_token() }}";
    axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
  </script>
  @yield('script')
</body>
</html>