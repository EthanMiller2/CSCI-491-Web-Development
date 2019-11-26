<?php
  $name = sanitizeString($_POST['name']);

  $bandName = sanitizeString($_POST['bandName']);

  $date = sanitizeString($_POST['date']);

  $startTime = sanitizeString($_POST['startTime']);

  $endTime = sanitizeString($_POST['endTime']);

  $link = sanitizeString($_POST['ticketLink']);

  $email_subject = "New Event Form submission";

  $returnEmail = $_POST['email'];

  $email_body = "You have received a new message from the user $name.\n".
                            "Reply:  $returnEmail \n".
                            "Band Name:  $bandName\n".
                            "Date:  $date\n".
                            "Time:  $startTime - $endTime\n".
                            "Ticket Link: $link\n"
    if (isset($_POST['name'])) {

    $result = queryMysql("INSERT INTO members VALUES('$name', '$bandName', );
    }

?>

<?php
  if($_POST) {
    mail("baseballfreak07@gmail.com",$email_subject, $email_body, "From: Bozonemusic@gmail.com");
}
?>

<!DOCTYPE html>
<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Click to Notify Us of an Upcoming Event
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">An email will be sent to us with the info you input and we will add your event to the calendar!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form name="eventRequest" method="post" action ="calender.php" >
                <div class="modal-body">
                  <form name="bandRequest" method="post" action ="featured.php" >
                    <div class="form-group">
                      <label for="exampleFormControlInput2">Name</label>
                      <input name="name" class="form-control" id="exampleFormControlInput1" placeholder="John Doe">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1"> Band Name</label>
                      <input name="bandName" class="form-control" id="exampleFormControlInput1" placeholder="Michael Jackson">
                    </div>
                    <div class="form-group"
                      <label for="exampleFormControlInput2">Event Date</label>
                      <input name="date"class="form-control" id="exampleFormControlInput2" placeholder="11/11/11">
                    </div>
                     <div class="form-group">
                      <label for="exampleFormControlInput3">Start Time</label>
                      <input name="startTime" class="form-control" id="exampleFormControlInput3" placeholder="12:00am">
                    </div>
                     <div class="form-group">
                      <label for="exampleFormControlInput4">End Time</label>
                      <input name="endTime" class="form-control" id="exampleFormControlInput4" placeholder="2:00am">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput5">Link to Ticket</label>
                      <input name="ticketLink" class="form-control" id="exampleFormControlInput5" placeholder="provide url">
                    </div>
                    <input type="submit">
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>