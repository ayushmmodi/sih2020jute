<?php include("php\millworker_reg.php") ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FiberCops</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


  </head>
  <body>

  <section class="text-gray-700 body-font" style="backgroung:white;" >
  <div class="container px-5 py-24 mx-auto">
    <div>
    <!--<div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">      -->





         <form class="w-full max-w-lg" style="" action="mill_worker_reg.php" method="POST">


            <h1 style="font-weight: bolder;">Jute Mill Workers Registration</h3><br><br>


                <h3 style="font-weight: bolder;">Personal Details</h3><br><br>



  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name" >
        First Name
      </label>
      <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder=""  name="firstname" required>
    </div>
    <?php   
    if(in_array("YOUR FIRST NAME MUST BE IN CHARACTERS",$error))
    {
      echo '<span style="color:red;">FIRST NAME MUST BE IN CHARACTERS</span>';

    }
    ?>



    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Last Name
      </label>
      <input name="lastname" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="" required>
    </div>
  </div>
  <?php   if(in_array("YOUR LAST NAME MUST BE IN CHARACTERS",$error))
    {
      echo '<span style="color:red;">YOUR LAST NAME MUST BE IN CHARACTERS</span>';

    }
    ?>
  

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Email 
      </label><p class="text-red-500 text-xs italic">(optional)</p>
      <input name="email" class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="email" placeholder="xyz@abc.com" name="email">
    </div>
  </div>
  <?php   
   if(in_array("YOUR EMAIL IS NOT VALID",$error))
    {
      echo '<span style="color:red;">YOUR EMAIL IS NOT VALID</span>';

    }
    if(in_array("EMAIL ALREADY EXIST!",$error))
    {
            echo '<span style="color:red;">EMAIL ALREADY EXIST</span>';

    }
    ?>


  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Contact Number
      </label>
      <input type="text" class="appearance-none block w-full bg-white-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name"  placeholder="" name="contactnumber" required>
    </div>
  </div>
     <?php   
     if(in_array("YOUR NO MUST BE IN NUMBERS",$error))
    {
      echo '<span style="color:red;">YOUR NO MUST BE IN NUMBERS</span>';

    }
    ?>






     <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Age
      </label>
      <input name="age" class="appearance-none block w-full bg-white-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" maxlength="3" placeholder="" required >
    </div>



    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        gender
      </label>
      <div class="inline-block relative w-64">
  <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="gender" required>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>
    </div>
  </div>

     <div class="flex flex-wrap -mx-3 mb-6">
       <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Identity Card
      </label>
      <div class="inline-block relative w-64">
  <select id="idcard" onchange = "ShowHideDiv()" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="idcard" required>
    <option value="adhar">Adhar Card</option>
   <!-- <option value="pan">PAN Card</option>-->
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>
</div>
    </div>
</div>

 <div id="adharcard" class="flex flex-wrap -mx-3 mb-6" >
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Adhar Card
      </label>
      <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="" name="adhar" minlength="12" maxlength="12">
    </div>
</div>

<?php 
  if(in_array("NOT VALID ADHAR NUMBER",$error))
    {
      echo '<span style="color:red;">NOT VALID ADHAR NUMBER</span>';

    }
    if(in_array("YOUR ADHAR NUMBER IS NOT  OF CORRECT LENGTH",$error))
    {
      echo '<span style="color:red";>YOUR ADHAR NUMBER IS NOT OF CORRECT LENGTH</span>';

    }
?>



 <!-- <div id="pancard" class="flex flex-wrap -mx-3 mb-6" style="display: none;">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        PAN Card
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="" name="pan" minlength="10" maxlength="10">
    </div>

</div>
<?php   
//if(in_array("NOT VALID PAN NUMBER",$error))
    {
  //    echo '<span style="color:red;">NOT VALID PAN NUMBER</span>';

    }
    ?> -->




<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Religion
      </label>
      <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="" name="religion" required>
    </div>



    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Caste
      </label>
      <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="" name="caste">
    </div>
  </div>



<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Qualifications
      </label>
      <textarea rows="2" cols="60" class="resize border rounded focus:outline-none focus:shadow-outline" name="qualification" required></textarea>
    </div>
</div>

<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Address
      </label>
      <textarea rows="5" cols="60" class="resize border rounded focus:outline-none focus:shadow-outline" name="address" minlength="20" required></textarea>
    </div>
</div>

  <div class="flex flex-wrap -mx-3 mb-2">
    

    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
        State
      </label>
      <div class="relative">
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="state" required>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Puducherry">Puducherry</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="West Bengal">West Bengal</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
      </div>
    </div>
  
  <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
       CITY/TALUKA 
      </label>
      <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="" name="city" required>
    </div>
  </div>
  <?php   if(in_array("ENTER CITY IN CHARACTERS",$error))
    {
      echo '<span style="color:red";>ENTER CITY IN CHARACTERS</span>';

    }
    ?>




    



    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0"><BR> 
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
        Pincode
      </label>
      <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210" name="pincode" minlength="6" maxlength="6" required>
    </div>
  </div><br><br>
  <?php   if(in_array("ENTER VALID PINCODE",$error))
    {
      echo '<span style="color:red";>"ENTER VALID PINCODE"</span>';

    }
    ?>



  <h3 style="font-weight: bolder;">Income Details</h3><br><br>





   
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Organization Name
      </label>
      <input type="text" name="organisationname"  class="appearance-none block w-full bg-white-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password"  placeholder="xyz company" required>
    </div>
  </div>

 <?php   if(in_array("ENTER VALID PINCODE",$error))
    {
      echo '<span style="color:red";>"ENTER VALID PINCODE"</span>';

    }
    ?>



    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Organization Contact Number
      </label>
      <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" maxlength="10" placeholder="" name="organisationnumber" required>
    </div>
  </div>

 <?php   if(in_array("ENTER VALID CONTACT NUMBER",$error))
    {
      echo '<span style="color:red";>ENTER VALID CONTACT NUMBER</span>';

    }
    ?>


  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Organization Address
      </label>
      <textarea rows="5" cols="60" class="resize border rounded focus:outline-none focus:shadow-outline" name="organisationaddress" minlength="20" required></textarea>
    </div>
</div>


    <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Gross Monthly Income
      </label>
      <input class="appearance-none block w-full bg-white-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" placeholder="" name="income" required>
    </div>


  </div> 
   <div class="flex flex-wrap -mx-3 mb-6" style="">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0" style="">
      <span class="text-gray-700" style="">Salary Recieved</span>
      <div class="mt-2">
        <label class="inline-flex items-center">
        <input name="salary_recieved" type="radio" class="form-radio"  value="Yes">
        <span class="ml-2">Yes</span>
      </label>
      <label class="inline-flex items-center ml-6">
        <input name="salary_recieved" type="radio" class="form-radio"  value="No">
        <span class="ml-2">No</span>
      </label>
    </div>
  </div>
</div>

<br><br>

    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="register">
        Register
      </button>
<?php  
if(in_array("SUCCESFULLY ADDED TO DATABASE",$error))
{
        echo '<span style="color:green";>SUCCESFULLY ADDED TO DATABSE</span>';

}
?>



  






</form>






    </div>
  </div>

</section>

  </body>
</html>
