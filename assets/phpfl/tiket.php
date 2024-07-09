<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ticket Order Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/tiket2.css">

</head>
<body>

  <div class="container">
    <form id="ticketForm" class="ticket-form" method="post" action="../php/process_form.php">

      <div class="form-group">
        <label for="numberOfPeople">Jumlah Pemesan :</label>
        <input type="number" class="form-control" id="numberOfPeople" name="numberOfPeople" min="1" value="1" onchange="generateFields(this.value)">
      </div>
      
      <div id="ticketFields">
        <!-- Fields will be dynamically generated here -->
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary">Book Now</button>
        <br>
        <a href="tour.php" class="btn btn-secondary mt-2">Back</a>
      </div>

    </form>
  </div>

  <script src="../js/tiket.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
