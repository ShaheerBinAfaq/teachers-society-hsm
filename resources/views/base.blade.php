<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Pakistan Teachers Co-operative Housing Society Ltd.</title>
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> -->
  <style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
textarea {
    box-shadow: none;
    resize: none;
    outline: none;
}
</style>
</head>
<body>
  <div class="container">
    @yield('main')
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>