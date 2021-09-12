@include('inc.header')
  <section id="assign" style="margin-top:150px; margin-bottom:50px;">
    <div class="container">

      <div class="assign-form">
          <h5 style="text-align:center">Assign Team for GBV</h5>
        <form id="assignTeamGBV"  method="post">
            <label for="">Team Assigned</label>
            <select class="form-team" name="team" id="team">
              <option>Select Team</option>
              <option>DV Team</option>
              <option>SV Team</option>
              <option>IPV Team violence</option>
            </select>
            <label for="">GBV Type</label>
            <select class="form-team" name="team" id="type" onchange="populateReports()">
              <option>Select Type</option>
              <option>Domestic violence (DV)</option>
              <option>Intimate partner violence</option>
              <option>Domestic violence</option>
              <option>Sexual violence</option>
              <option>Indirect (structural) violence</option>
            </select>
            {{-- <label for="">Team Number</label>
            <input class="form-team" type="text" name="" value=""> --}}
            <label for="">Start Date</label>
            <input class="form-team" type="date" name="team" value="" id="start_date">
            <label for="">End Date</label>
            <input class="form-team" type="date" name="team" value="" id="end_date">
            <button type="button" class="login" id="assignTeam" name="button">Assign Now</button>
        </form>
      </div>
    </div>
  </section>

@include('inc.footer')
