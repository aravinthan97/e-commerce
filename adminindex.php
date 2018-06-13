<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <?php include 'includes/apiLink.php'; ?>
      <?php include 'includes/admin_nav.php'; ?>
  </head>
  <body>
    <?php
      include_once "includes/DB.php";

       $query="SELECT * FROM company where Admin_ID= '{$_SESSION['AdminID']}'";

    //   $query = "SELECT * FROM company ORDER BY ID DESC";
       $result = mysqli_query($conn, $query);
       while($row = mysqli_fetch_array($result))
       {
            echo '
                 <tr>
                      <td>
                           <h2>'.($row['CompanyName']).'</h2>
                           <img src="data:image/jpeg;base64,'.base64_encode($row['Logo'] ).'" height="200" width="200" class="img-thumnail" />
                           <input type="button" name="SELECT" style="margin-top:5px;" class="btn btn-info"
                                  value="SELECT" />
                      </td>
                 </tr>
            ';
       }

          ?>




  </body>
</html>
<script>
$(document).ready(function(){
     $('#insert').click(function(){
          var image_name = $('#image').val();
          if(image_name == '')
          {
               alert("Please Select Image");
               return false;
          }
          else
          {
               var extension = $('#image').val().split('.').pop().toLowerCase();
               if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
               {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
               }
          }
     });
});
</script>
