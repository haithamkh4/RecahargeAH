<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';
error_reporting(0);

session_start();

 



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['credit_confirm'])){

    $price=$_POST['credit_price'];
    $customer_name=$_POST['cust_name'];
    $date=date("Y/m/d");
    $time = date('h:i');

  $selectedAction = $_POST['credit_select'];  
  $credits=$_POST['credits'];
  $value=$credits*85000;
  $credit_price=$credits*100000;
  $revenue=$credit_price-$value;
  $fprice=(int) str_replace(',', '', $price);

  $checkSql = "SELECT * FROM customers WHERE cust_name = '$customer_name'";
  $checkResult = mysqli_query($conn, $checkSql);

  

  if (mysqli_num_rows($checkResult) > 0) {
      // If the customer exists, update the existing record's price
     $updateSql = "UPDATE customers SET price = price + '$fprice' WHERE cust_name = '$customer_name'";
      $updateResult = mysqli_query($conn, $updateSql);
  } else {
      // If the customer does not exist, insert a new record
      $insertSql = "INSERT INTO customers (cust_name, price, recharge_date, recharge_time) VALUES ('$customer_name', '$fprice', '$date', '$time')";
      $insertResult = mysqli_query($conn, $insertSql);

      
  } 
  

  $sql="UPDATE dashboard SET curr_total=old_total+'$revenue'";
  $result=mysqli_query($conn,$sql);

  $sql="UPDATE dashboard SET profit=profit+$revenue";
  $result=mysqli_query($conn,$sql);

  

        
      if ($selectedAction ==="1") {
        if ($credits > 3){
        $number=$credits/3;
        $transfer=ceil($number);
       
        $sql="UPDATE admins SET mtc_credits=mtc_credits-('$credits'+($transfer*0.16)) WHERE admin_name='haitham'";
        $result=mysqli_query($conn,$sql);
        }
        else{
          $sql="UPDATE admins SET mtc_credits=mtc_credits-('$credits'+0.16) WHERE admin_name='haitham'";
          $result=mysqli_query($conn,$sql);
        }
    
      } elseif ($selectedAction ==="3") {
        
        $sql="UPDATE apps SET balance=balance-('$credits'*85000) WHERE app_name='iPocket'";
        $result=mysqli_query($conn,$sql);

      }elseif($selectedAction === "2") {
        if ($credits % 3 == 0) {
            $sql = "UPDATE apps SET balance = balance - ('$credits' * 91666.6) WHERE app_name = 'wish'";
            $result=mysqli_query($conn,$sql);
        } else {
            $sql = "UPDATE apps SET balance = balance - ('$credits' * 105000) WHERE app_name = 'wish'";
            $result=mysqli_query($conn,$sql);
        }}
        elseif($selectedAction ==="4") {
        
          if ($credits > 3){
            $number=$credits/3;
            $transfer=ceil($number);
              echo $transfer;
            $sql="UPDATE admins SET mtc_credits=mtc_credits-('$credits'+($transfer*0.16)) WHERE admin_name='abbas'";
            $result=mysqli_query($conn,$sql);
            }
            else{
              $sql="UPDATE admins SET mtc_credits=mtc_credits-('$credits'+0.16) WHERE admin_name='abbas'";
              $result=mysqli_query($conn,$sql);
            }
      
        }
    
       
        

        $transactionSuccessful = true;


      }


?>

<html>
  <head>
      
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store" />


       <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">



  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<style>

    .ui-autocomplete {
        display: none !important;
    }


   
</style>




</head>
  

<body>

<div class=" rounded-botom" style="height: 50px; background-color: #4AB12D; display: flex; align-items: center; padding-left: 10px;">
        <a href="main.php" style="text-decoration: none; color: white;">
            <i class="fas fa-chevron-left ms-2" style="font-size: 20px; margin-right: 10px;"></i>
            
        </a>
    </div>


<!--image-->
<div class="mt-5 text-center">
        
        <img class="rounded-4 shadow  " src="img/touch/7.58.png" style="height:150px; width:250px">
        
 </div>

 <hr class="ms-4 me-4 mt-5" style="border: 0.5px solid grey ;">


 <div class="container ">
        

     <form method="POST" class="ms-5 mt-4">
           
                <!-- To Input -->
                
                    <div class="input-group shadow-sm" style="width: 180px;">
                        <div class="input-group-prepend">
                            <span style="background-color:#8EDC68; color:white ;" class="input-group-text rounded-0 rounded-start" id="to-addon">To</span>
                        </div>
                        <input type="text" name="cust_name" id="cust_name" class="form-control"  placeholder="" aria-label="Recipient" aria-describedby="to-addon" required>
                    </div>
                   
                        <div class="col mt-0 ms-5">
                            <div id="autocomplete-suggestions" class="list-group mt-2"></div>
                        </div>
                
                
            

            <!-- From Input -->
            
            <div class="input-group mt-2  shadow-sm " style="width: 175px;" >
        <label class="input-group-text" for="inputGroupSelect01" style="background-color:#8EDC68; color:white ;">From</label>
        <select class="form-select" id="inputGroupSelect01"  name="credit_select" required>
        <option value="" selected disabled></option>
          <option value="1">Sharejli</option>
          <option value="2">Wish</option>
          <option value="3">iPocket</option>
          
          
  
        </select>
      </div>

            <!-- Price Input -->
            
            <div class=" mt-2 input-group flex-nowrap  shadow-sm" style="width: 160px;">
        <span class="input-group-text" id="addon-wrapping" style="background-color:#8EDC68; color:white ;">Price</span>
        <input type="text" oninput="formatNumber(this)" id="credit_price"   name="credit_price" class="form-control" placeholder="" value="" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>

         <!-- Value Input -->
            
         <div class=" mt-2 input-group flex-nowrap  shadow-sm" style="width: 160px;">
        <span class="input-group-text" id="addon-wrapping" style="background-color:#8EDC68; color:white ;">Value</span>
        <input type="text" oninput="formatNumber(this)" id="credit_price"   name="credit_price" class="form-control" placeholder="" value="" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>

        
               
<!-- submit -->
<div class="d-grid gap-2 col-6 mx-auto mt-5   shadow-sm" >
        <button type="submit" name="credit_confirm" class="btn"  style="background-color:#4AB12D;color:white">Confirm</button>
      </div>


     <!-- Success Message Container -->
<div id="success-message" class="alert alert-success fade show mt-3 ms-4" role="alert" style="display: none; width:fit-content">
  <i class="bi bi-check-circle-fill"></i> Data Added successfully!
</div>




                
     </form>
                </div>
                


<script>
        function formatNumber(input) {
            // Remove existing commas and non-numeric characters
            let value = input.value.replace(/[^0-9]/g, '');

            // Format the number with commas
            value = Number(value).toLocaleString();

            // Set the formatted value back to the input field
            input.value = value;
        }
    </script>

<script>
    function updatePrice() {
        // Get the value entered by the user in the 'items' input
        var itemsValue = document.getElementById('credits').value;

        // Calculate the price (assuming price is twice the number of items)
        var priceValue = itemsValue * 100000;

        // Format the price with commas
        var formattedPrice = new Intl.NumberFormat().format(priceValue);

        // Update the 'price' input with the formatted value
        document.getElementById('credit_price').value = formattedPrice;

        // Set the numeric value in a hidden input field
        document.getElementById('numeric_price').value = priceValue;
    }
</script>
    





<script>
$(document).ready(function () {
    $("#cust_name").autocomplete({
        source: function (request, response) {
            $.ajax({
                url: "autocomplete.php", // URL to fetch autocomplete suggestions
                dataType: "json",
                data: {
                    term: request.term,
                },
                
                success: function (data) {
    var suggestionsContainer = $("#autocomplete-suggestions");
    suggestionsContainer.empty(); // Clear previous suggestions

    // Display suggestions in a list with reduced width
    $.each(data, function (index, item) {
        suggestionsContainer.append('<a href="#" class="list-group-item list-group-item-action suggestion-item" style="max-width: 140px;height: 40px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">' + item + '</a>');
    });

    // Attach a click event handler to each suggestion item
    $(".suggestion-item").on("click", function () {
        // Populate the input field and close the suggestions list
        $("#cust_name").val($(this).text());
        suggestionsContainer.empty(); // Clear suggestions list
    });

    response(data);
},

            });
        },
        minLength: 1, // Minimum characters before triggering autocomplete
        select: function (event, ui) {
    $("#cust_name").val(ui.item.label);
    $("#autocomplete-suggestions").empty();

    // Additional logic for handling both cases
    // Check if the selected item is from   suggestions or a new entry
    if (ui.item.value) {
        // Existing suggestion selected, perform any additional actions
    } else {
        // New entry, submit the form or perform any necessary actions
        // Example: $("#yourFormId").submit();
    }

    return false;
},
    // Disable the default messages
    messages: {
            noResults: '',
            results: function () {},
        },


        response: function (event, ui) {
            // Prevent the suggestion list from being displayed
            event.preventDefault();
        },
      
    });
    $("#cust_name").on("blur", function (event) {
        // Check if the clicked element is part of the suggestion list
        if (!$(event.relatedTarget).hasClass("suggestion-item")) {
            $("#autocomplete-suggestions").empty();
        }
    });
});


</script>

<script>
  <?php if (isset($transactionSuccessful) && $transactionSuccessful): ?>
    // Show the success message
    $("#success-message").fadeIn().delay(2000).fadeOut();
  <?php endif; ?>
</script>





</body>
</html>