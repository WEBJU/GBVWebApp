<!-- Bootstrap core JavaScript

================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<hr>
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="assets/images/logo.jpeg" alt="" style="width:100px; height:100px;">
      </div>
      <div class="col-md-4">

        <p><span>  <i class="fas fa-venus-mars fa-2x"></i></span>Gender Based Violence</p>
      </div>
      <div class="col-md-4">
            <p>Copyrights &copy;2021</p>
      </div>

    </div>
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase.js"></script>
<script src="https://kit.fontawesome.com/4683fdb7d0.js" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDn65j0fZ-l2JfLXqTDWjaeR-Kgl4xR1h4",
  authDomain: "emergency-8d61f.firebaseapp.com",
  databaseURL: "https://emergency-8d61f-default-rtdb.firebaseio.com",
  projectId: "emergency-8d61f",
  storageBucket: "emergency-8d61f.appspot.com",
  messagingSenderId: "925699669232",
  appId: "1:925699669232:web:4bd9d021b0e2e3ff639635",
  measurementId: "G-HE8TXH2TB5"
};
  firebase.initializeApp(firebaseConfig);

  var database=firebase.database();
  var lastIndex=0;
//get data
  firebase.database().ref('ViolenceReports/').on('value',function(snapshot){
    var value=snapshot.val();
    var htmls=[];
    $.each(value,function(index,value){
      if (value) {
        htmls.push('<tr>\<td>'+value.user_id+'</td>\
        <td>'+value.type+'</td>\
          <td>'+value.description+'</td>\
          <td>'+value.location+'</td>\
          <td>'+value.phone+'</td>\
        </tr>');
      }
      lastIndex=index;
    });
    $("#tbody").html(htmls);
  });
  // add data
  $('#assignTeam').on('click',function(){
      var values=$("#assignTeamGBV").serializeArray();
      var team=values[0].value;
      var type=values[1].value;
      var start_date=values[2].value;
      var end_date=values[3].value;
      var userId=lastIndex+1;
      console.log(values);

      firebase.database().ref('AssignedTeam/').push().set({
        team:team,
        type:type,
        start_date:start_date,
        end_date:end_date,
      });
      lastIndex=userId;
      alert("Team assigned successfully!!")
      $('#assignTeamGBV input').val('');
      // $('#assignTeamGBV ').val('Select');
  });
</script>
<script type="text/javascript">
// $(document).ready(function(){
  console.log("Hi there");
  function loginUser(){
    var email=$("#email").val();
    var password=$("#password").val();

    firebase.auth().signInWithEmailAndPassword(email, password)
      .then((userCredential) => {
        // Signed in
        var url='/view';
        var user = userCredential.user;
        // var message="<div class='success'>Loggedin successfully!!</div>"
        // $("#message").html(message);
        alert("Login success.Clikc ok to continue!!");
        window.location.href=url;

      })
      .catch((error) => {

        // var message="<div class='error'>Username or password incorrect!!</div>"
        // $("#message").html(message);
        alert("Username or password incorrect!!");
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorMessage);
      });
  }
// });

// function populateReports(){
//   // var d=document.getElementById("#type");
//   //
//   // var selectedOption=d.options[d.selectedIndex].text;
//   // firebase.database.ref("ViolenceReports").orderByChild("type");
// }
</script>
</body>
</html>
