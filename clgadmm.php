<html>
 
<head>
        <title> COLLEGE ADMISSION FORM </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
    </head>


    <body  bgcolor="lightskyblue" class="body1" >
       
  
        <link rel="stylesheet" href ="samm.css">
        <fieldset  align="center;">
            <div class="img7">
            <img class="image" src="citlogo.png" >
            </div>
            <div class="heading">
            <h1 ><b>COIMBATORE INSITUTE OF TECHNOLOGY</b></h1>
            <h3>Avinashi road, civil aerodrome post, coimbatore 641014 </h3>
               </div>
            <style> h1 {
                text-align: center;
                position: relative;
            }
                h3{text-align: center;
                    position: relative;
                     }</style>
                </fieldset> 
       
  <fieldset align="center;" >
      <legend><b>STUDENT DETAILS:</b></legend>
    <form method ="post" action ="st.php">     <table class="tab1">
        <tr>
            <td>
          Student name:
            </td>
            <td>
                <input type="text" name="firstname" placeholder="firstname" id="ip0"> 
                <input type="text" name="lastname" placeholder="lastname" id="ip0">
            </td>
        </tr>
        <tr>
            <td>
                Gender:
            </td>
            <td>
                <input type ="radio" name="gender">Male
                <input type = "radio" name ="gender">Female
            </td>
        </tr>
        <tr>
            <td >
               Guardian name:

            </td>
            <td>
                <input type="text" placeholder="parentname" name="guardianname" id="ip1"; >
            </td>
        </tr>
        <tr>
            <td>
               Guardian occupation:

            </td>
            <td>
                <input type="text" placeholder="work" name="guardianoccupation" id="ip2";>
            </td>
        </tr>
        <tr>
            <td>
               Date.of.Birth:

            </td>
            <td>
                <input type="text" placeholder="D.O.B"  name="dob" id="ip3";>
            </td>
        </tr>
        <tr id="ip4">
            <td>
               Permanent address:

            </td>
            <td >
                <input type="text" placeholder="address" name="address" id="ip4">
                

                <SELECT name="state" >
                    <option value="state"> state</option>
                    <option value="TAMIL NADU"> TAMILNADU</option>
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
                </SELECT>
                
                <input type="text" placeholder="city" name="city" id="ip4">
                
                <input type="number" placeholder="pincode" name="pincode" id="ip4">
                </td> 
        </tr>
        
        <tr>
            <td>
               
               Phone number :

            </td>
            <td>
                <select name="concode">
                    <option>+91</option>
                    <option>+86</option>
                    <option>+44</option>
                    <option>+1</option>
                </select>
                <input type="phone" placeholder="phone no" name="phoneno" id="ip5">
            </td>
        </tr>
        <tr>
            <td>
               SSLC mark:

            </td>
            <td>
                <input type="number" placeholder="mark" name="sslcmark" id="ip6">
            </td>
        </tr>
        <tr>
            <td>
               HSC mark:

            </td>
            <td>
                <input type="number" placeholder="mark" name="hscmark"  id="ip7">
            </td>
        </tr>
        <tr>
            <td>
               HSC Cut-Off:

            </td>
            <td>
                <input type="number" placeholder="Cut-Off"  name="cutoff" id="ip8">
                
                
            </td>
        </tr>
        <tr><td>
        Opinion:
        </td>

            <td>
                
                <textarea name="opinion" class="txt1" ROWS="08" cols="39">
                </textarea>
            </td>
        </tr>
        <tr >
            <td>
        
            </td>
            <th colspan="3">
                <input type="submit" formaction="st.php" id="ip9">
            </th>
        </tr>
    </td>
</tr>
</fieldset>
    </table>
</form>
    </body>
    
</html>