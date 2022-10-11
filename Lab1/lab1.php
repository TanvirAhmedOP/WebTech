<html>
    <head>
        <title>Donor Information</title>
</head>
<body>
<h1><p style="color:red;">Donor Information</h1></p>
     <form action="../control/process.php" method="POST">
       <table>
       <tr><td>First Name:</td> 
       <td> <input type="text"  name="fname"></td></tr>
       <tr><td>Last Name:</td> 
       <td> <input type="text"  name="fname2"></td></tr>
       <tr><td>Company:</td> 
       <td> <input type="text"  name="Company"></td></tr>
       <tr><td>Address 1:</td> 
       <td> <input type="text"  name="adr1"></td></tr>
       <tr><td>Last Address 2:</td> 
       <td> <input type="text"  name="adr2"></td></tr>
       <tr><td>City:</td> 
       <td> <input type="text"  name="City"></td></tr>

 <tr><td><label for="State">State:</label>

    <select name="State" id="State">

    <option value="Dhaka">Dhaka</option>
    <option value="CTG">CTG</option>
    <option value="RAJ">RAJ</option>
    <option value="SYLHET">SYLHET</option>
    </select></td></tr>
    <tr><td>Zip Code:</td> 
       <td> <input type="text"  name="Zip"></td></tr>


    <tr><td><label for="Country">Country:</label>

    <select name="Country" id="Country">
    <option value="Bangladesh">Bangladesh</option></td></tr>
    
    </select>

    <tr><td>Phone:</td> 
       <td> <input type="number"  name="phone"></td></tr>
       
       <tr><td>Fax:</td> 
       <td> <input type="number"  name="fax"></td></tr>

       <tr><td>Email:</td> 
       <td> <input type="text"  name="male"></td></tr>
       

       
       <tr><td>Donation Amount:</td>
       <td><input type="radio" name="prog" value="None">None 
       <input type="radio" name="prog" value="$50">$50 
       <input type="radio" name="prog" value="$75">$75
       <input type="radio" name="prog" value="$100">$100
       <input type="radio" name="prog" value="$250">$250
       <input type="radio" name="prog" value="Other">Other</td></tr>

       <tr><td>Other Amount$:</td> 
       <td> <input type="number"  name="Amount"></td></tr>
        
       <tr><td>Recurring Donation:
       <input type="checkbox" id="dn" name="dn" value="yes">
<label for="dn"> I am interested in giving on a regular basis</label></tr></td>
       
      



<tr><td>I would like to make :</td>
       <td><input type="radio" name="prog" value="None">None 
       <input type="radio" name="prog" value="$50">$50 </td></tr>





       

       
       <tr><td><input type="submit" value="Submit">
        <input type="submit" value="Reset"></td></tr>
</table>
</form>
</body>
</html>