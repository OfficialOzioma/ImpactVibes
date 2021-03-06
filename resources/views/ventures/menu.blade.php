
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <span class="navbar-brand" href="#">Ventures Deal</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{route('ventures.create')}}">
            <i class="fas fa-plus"></i>  Add your start-up details
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="{{route('ventures.index')}}">
            <i class="fas fa-eye"></i>  View your start-up details
            </a>
        </li>

      </ul>
    </div>
  </nav>

