<?php include('./includes/header.php')?>
<?php include('Generator.php');?>
<?php
  // session_start();
  $generator_card = new CardGenerator();
  $card_number = $generator_card->generateNumber(4); //Starts at 4
  $cvv = $generator_card->getCVV();
  $date_exp = $generator_card->getDate();
?>
<div class="m-0 row col-12 col-sm-12 col-md-12 container-fluid d-flex justify-content-center align-items-center" style="height:100vh">
  <div class="col-12 col-sm-12 col-md-6 col-lg-12 col-xl-6 p-4 border d-flex justify-content-center align-items-center" style="min-height:260px; height:260px;">
    <form action="" method="POST">
      <h2 class="text-center">Credit Card Generator</h2>
      <div class="w-100 d-flex justify-content-center align-items-center">
        <button type="submit" name="generate-visa" class="btn btn-success">Generate</button>
      </div>
    </form> 
  </div>
  <div class="px-4 col-12 col-sm-12 col-md-6" style="min-height:260px; height:260px; overflow-y:auto;">
    <div class="table-responsive">
      <table class="table table-sm text-center">
          <thead>
            <tr>
              <th>Card Number</th>
              <th>CVV</th>
              <th>Expiration Date</th>
            </tr>
          </thead>
        <tbody style="overflow-y: auto;overflow-x: hidden;height:260px;">
          <tr>
            <td>45353829604044248</td>
            <td>332</td>
            <td>1/2025</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php include('./includes/footer.php')?>