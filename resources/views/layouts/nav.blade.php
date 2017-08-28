<div class="blog-masthead">
  <div class="container">
    <nav class="nav">
      <a class="nav-link active" href="#">Home</a>
      <a class="nav-link" href="#">New features</a>
      <a class="nav-link" href="#">Press</a>
      <a class="nav-link" href="#">New hires</a>
      <a class="nav-link" href="#">About</a>
      <a class="nav-link ml-auto" href="#">
        @if(auth()->check())
        {{auth()->user()->name}}
        @endif
      </a>
        @if(auth()->check())
        <a class="nav-link" href="/logout">Logout</a>
        @else
        <a class="nav-link" href="/login">Login</a>
        @endif
    </nav>
  </div>
</div>
