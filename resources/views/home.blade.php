<!DOCTYPE html>
<html>
<head>
   <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <div id="app">
    <v-app>
       <app-home></app-home>
    </v-app>
  </div>

  {{--  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>  --}}
  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    new Vue({ el: '#app' })
  </script>
</body>
</html>
