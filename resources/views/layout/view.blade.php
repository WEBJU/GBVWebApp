@include('inc.header')

<section id="reports">
  <div class="container" style="margin-top:200px;">
    <h4 style="margin-bottom:20px;">Home > Dashboard</h4>
    <div class="search">
      {{-- <i class="fas fa-search icon"></i> --}}
      <input type="text" class="search-input" name="search" value="" placeholder="Search user">

    </div>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <div class="card ">
          {{-- <img src="assets/images/ic_love.jpeg" alt="" class="img"> --}}
          <i class="fas fa-hospital-alt fa-5x text-info"></i>
          <a href="#">Response Center</a>

        </div>

      </div>
      <div class="col-md-4">
        <div class="card">
          <i class="fas fa-calculator fa-5x text-info"></i>
          <a href="/assign">Dispatch</a>

        </div>

      </div>
      <div class="col-md-4">
        <div class="card">
          <i class="fas fa-users fa-5x text-info"></i>
          <a href="#">Manage Users</a>

        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <i class="fas fa-book fa-5x text-info"></i>
          <a href="/reports">Reports</a>

        </div>

      </div>
      <div class="col-md-4">
        <div class="card">
          <i class="fas fa-cogs fa-5x text-info"></i>
          <a href="#">Settings</a>

        </div>

      </div>
      <div class="col-md-4">
        <div class="card">
        <i class="far fa-user-circle fa-5x text-info"></i>
          <a href="#">Profile</a>

        </div>

      </div>
    </div>
  </div>
</section>

@include('inc.footer')
