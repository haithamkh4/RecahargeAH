<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config.php';
error_reporting(0);

session_start();

 

#30 days

if (isset($_POST['30d'])){ 

  $customer_name=$_POST['cust_name'];
  $date=date("Y/m/d");
  $time = date('h:i');

  $price=$_POST['30d_price'];
  $value=$_POST['30d_value'];
  $selectedAction = $_POST['30d_selection'];  
  $selectedFrom = $_POST['from_selection']; 
  $fprice=(int) str_replace(',', '', $price);
  $fvalue=(int) str_replace(',', '', $value);
  $revenue=($fprice + 510000)-$fvalue ;

  $checkSql = "SELECT * FROM customers WHERE cust_name = '$customer_name'";
  $checkResult = mysqli_query($conn, $checkSql);

  

  if (mysqli_num_rows($checkResult) > 0) {
      // If the customer exists, update the existing record's price
     $updateSql = "UPDATE customers SET price = price + '$fprice' WHERE cust_name = '$customer_name'";
      $updateResult = mysqli_query($conn, $updateSql);
  } else {
      // If the customer does not exist, insert a new record
      $insertSql = "INSERT INTO customers (cust_name, price, recharge_date, recharge_time) VALUES ('$customer_name', '$fprice', '$date', '$time')";
      $insertResult = mysqli_query($conn, $insertSql);}

    //set profit
     $sql="UPDATE dashboard SET profit= profit +'$revenue'";
     $result=mysqli_query($conn,$sql);

  if ($selectedAction ==="1") {
      
    $sql="UPDATE admins SET mtc_credits=mtc_credits + 6 WHERE admin_name='haitham'";
    $result=mysqli_query($conn,$sql);
  

  } elseif ($selectedAction ==="2") {
    
    $sql="UPDATE admins SET mtc_credits=mtc_credits + 6 WHERE admin_name='abbas'";
    $result=mysqli_query($conn,$sql);

  }


  if ($from_selection ==="1") {
    $sql="UPDATE apps SET balance=balance - '$fvalue' WHERE app_name='sharejli'";
    $result=mysqli_query($conn,$sql);

  } elseif ($from_selection ==="2") {
    
    $sql="UPDATE apps SET balance=balance - '$fvalue' WHERE app_name='wish'";
    $result=mysqli_query($conn,$sql);

  } elseif ($from_selection ==="3") {
    
    $sql="UPDATE apps SET balance=balance - '$fvalue' WHERE app_name='iPocket'";
    $result=mysqli_query($conn,$sql);}






  
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

<div class=" rounded-botom" style="height: 50px; background-color: #009FB4; display: flex; align-items: center; padding-left: 10px;">
        <a href="main.php" style="text-decoration: none; color: white;">
            <i class="fas fa-chevron-left ms-2" style="font-size: 20px; margin-right: 10px;"></i>
            
        </a>
    </div>


<!--image-->
<div class="mt-5 text-center">
        
        <img class="rounded-4 shadow border " src="img/touch/30d.jpg" style="height:150px; width:250px">
        
 </div>

 <hr class="ms-4 me-4 mt-5" style="border: 0.5px solid grey ;">


 <div class="container ">
        

     <form method="POST" class="ms-5 mt-4">
           
                <!-- To Input -->
                
                    <div class="input-group shadow-sm" style="width: 200px;">
                        <div class="input-group-prepend">
                            <span style="background-color:#6ec2d6; color:white ;" class="input-group-text rounded-0 rounded-start" id="to-addon">To</span>
                        </div>
                        <input type="text" name="cust_name" id="cust_name" class="form-control"  placeholder="" aria-label="Recipient" aria-describedby="to-addon" required>
                    </div>
                   
                        <div class="col mt-0 ms-5">
                            <div id="autocomplete-suggestions" class="list-group mt-2"></div>
                        </div>
              
                
            

            <!-- From Input -->
            
            <div class="input-group mt-2  shadow-sm " style="width: 165px;" >
        <label class="input-group-text" for="inputGroupSelect01" style="background-color:#6ec2d6; color:white ;">From</label>
        <select class="form-select" id="inputGroupSelect01"  name="from_selection" required>
        <option value="" selected disabled></option>
          <option value="1">Sharejli</option>
          <option value="2">Wish</option>
          <option value="3">iPocket</option>
          
          
  
        </select>
      </div>

        <!-- dollars Input -->
               
        <div class="input-group mt-2  shadow-sm " style="width: 205px;" >
        <label class="input-group-text" for="inputGroupSelect01" style="background-color:#6ec2d6; color:white ;">Dollars To</label>
        <select class="form-select" id="inputGroupSelect01"  name="30d_selection" required>
        <option value="" selected disabled></option>
          <option value="1">Haitham</option>
          <option value="2">Abbas</option>

          </select>
      </div>

            <!-- Price Input -->
            
            <div class=" mt-2 input-group flex-nowrap  shadow-sm" style="width: 160px;">
        <span class="input-group-text" id="addon-wrapping" style="background-color:#6ec2d6; color:white ;">Price</span>
        <input type="text" oninput="formatNumber(this)" id="30d"   name="30d_price" class="form-control" placeholder="280,000" value="280,000" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>

        <!-- Value Input -->
            
        <div class=" mt-2 input-group flex-nowrap  shadow-sm" style="width: 185px;">
        <span class="input-group-text" id="addon-wrapping" style="background-color:#6ec2d6; color:white ;">Card Value</span>
        <input type="text" oninput="formatNumber(this)" id="credit_price"   name="30d_value" class="form-control" placeholder="100,000" value="" aria-label="Username" aria-describedby="addon-wrapping" required>
        </div>

        
               
<!-- submit -->
<div class="d-grid gap-2 col-6 mx-auto mt-5   shadow-sm" >
        <button type="submit" name="30d" class="btn"  style="background-color:#009FB4;color:white">Confirm</button>
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
        document.getElementById('30d_price').value = formattedPrice;

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