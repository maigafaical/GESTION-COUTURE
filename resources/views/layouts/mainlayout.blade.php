<!DOCTYPE html>
<html lang="en">
<head>
    @include('require.css')
</head>
<body>
     @include('require.topbar')

    <section class="contenair-fluid">
        <div class="row">
            <div class="col-lg-2 bg-primary" style="height: 80%">
                
                @include('require.sidebar')
            </div>
            <div class="col-lg-10 text-center mb-5">
                @yield('content')
            </div>
        
        </div>
     </section>

     @include('require.js')
    </body>
</html>