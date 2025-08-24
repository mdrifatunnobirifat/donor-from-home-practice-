<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
        <link rel="stylesheet" href="../regcss/registration.css">
    </head>
    <body>
        
        <div class="form-container">

        <h1>Registration Form</h1>
        <form>
            

            <label>Student Name</label><br>
            <div class="name-fields">
            <input type=""text" id="student_name" name="student_name" placeholder="First Name">
            <input type=""text" id="student_name" name="student_name" placeholder="Last Name"><br><br>
            </div>

           

            <label>Date of Birth</label><br>
            <input type ="date" id ="dob" name="dob" placeholder="MM/DD/YEAR"><br><br>

            <label>Gender</label><br>
            
            <input type="radio" id="male" name="gender" value="male">
            <label> male</label>
            <input type="radio" id="female" name ="gender" value="female">
            <label>Female</label><br><br>
            

            <label>Address</label><br>
            <input type="text" id="address" name="address" placeholder="Street Address"><br><br>
            <input type="text" id="city" name="city" placeholder="City">
            <input type="text" id="Region" name="Region" placeholder="Region">
            <input type ="text" id="postal_code" name="postal_code" placeholder="Postal Code/zip code">
            <select id="country" name="country">
                <option value="Bangladesh">Bangladesh</option>
                <option value="India">India</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Nepal">Nepal</option>
            <select><br><br>

            <label>Academic info</label><br>
            <div class="Gpa-fields">
            <input type="text" id="ssc_gpa" name="ssc_gpa" placeholder="Enter SSC GPA">
            <input type="text" id="Hsc_gpa" name="Hsc_gpa" placeholder="Enter Hsc GPA"><br><br>
            </div>







            <label>Email</label><br>
            <input type="email" id="email">
            <label>Phone Number</label><br>
            <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number"><br><br>
            <label>program</label><br>
            <select id="program" name="program">
                <option value="BBA">BBA</option>
                <option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="English">English</option>
                <option value="Economics">Economics</option>
            </select><br><br>
            <label>Degree</label><br>
            <select id="degree" name="degree">
                <option value="Bachelors">Bachelors</option>
                <option value="Masters">Masters</option>
                <option value="PhD">PhD</option>
            </select><br><br>

            <button type="submit">Registration</button><br><br>
            <button type="reset">Reset</button><br><br>
            <a href="../../login/login.html">Already have an account? Login here</a>
        </form>
        </div>
       
        
    </body>
</html>