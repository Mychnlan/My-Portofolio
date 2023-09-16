<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head> 
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">My Website</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login')}}">Sign IN</a>
              </li>
            </ul>
            <div class="form-check form-switch ms-auto">
              <input class="form-check-input" type="checkbox" id="dark-mode-toggle">
              <label class="form-check-label" for="dark-mode-toggle">Dark Mode</label>
            </div>
          </div>
        </div>
      </nav>
      <main>
        @yield('content')
      </main>
      
 
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    // check the current state of the toggle and update the page
    if (localStorage.getItem('dark-mode') === 'on') {
      $('html').addClass('dark');
      $('main').addClass('dark');
      $('#dark-mode-toggle').prop('checked', true);
    } else {
      $('html').removeClass('dark');
      $('#dark-mode-toggle').prop('checked', false);
      $('main').removeClass('dark');
    }
    
    // update the localStorage value when the toggle is clicked
    $('#dark-mode-toggle').click(function() {
      if ($(this).prop('checked') === true) {
        localStorage.setItem('dark-mode', 'on');
        $('html').addClass('dark');
        $('main').addClass('dark');
      } else {
        localStorage.setItem('dark-mode', 'off');
        $('html').removeClass('dark');
        $('main').removeClass('dark');
      }
    });
  });
</script>

</html>