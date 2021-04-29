<?php include('./includes/header.php')?>

<?php require('Generator.php');?>
<?php
  $generator_card = new Generator2();
  $response_card = $generator_card->single(4);
  $cvv = $generator_card->getCVV();
  $date_exp = $generator_card->getDate();
?>
<div class="container">
  <div class="container p-4">
    <div class="col-md-12 p-4 w-100">
      <form action="index.php" method="GET">
        <h1 class="text-center">Credit Card Generator</h1>
        <div class="w-100 d-flex justify-content-center align-items-center">
          <button type="submit" name="generate-visa" class="btn btn-success">Generate</button>
        </div>
        <div id="generatedValues" class="mt-3 col-xs-12 col-sm-12 col-sm-offset-12 col-md-16 col-md-offset-0 text-center">
          <h3>Resulting Credit Card Details:</h3>
          <div class="well">
            <div class="row">
              <div class="col-xs-6"><b>Card number:</b>
              </div>
              <div class="col-xs-6">
                <div><?php echo $response_card?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6"><b>CVV:</b>
              </div>
              <div class="col-xs-6">
                <div id="inputiRandomCVV"><?php echo $cvv?></div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6"><b>Exp:</b>
              </div>
              <div class="col-xs-6">
                <div id="inputiRandomExp"><?php echo $date_exp?></div>
              </div>
            </div>
          </div>
        </div>
      </form> 
    </div>
  </div>
</div>
<?php include('./includes/footer.php')?>