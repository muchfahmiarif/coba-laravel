    {{-- Navbar Starts --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="/">Coba Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{($active === 'home' ? 'active' : '')}}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{($active === 'about' ? 'active' : '')}}" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{($active === 'posts' ? 'active' : '')}}" href="/posts">Blog</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    {{-- Navbar Ends --}}