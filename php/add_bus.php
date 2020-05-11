 <html>
    <head>
    <link rel="stylesheet" type="text/css" href="\assessment2\style.css">
    <script src="javascript/bus.js"></script>
    </head>
        <body>
            <form  method="POST" id="busform" name="busform" onsubmit="return false">
                <div class="input-group">
                    <label>BUS ID:</label>
                    <input type="text" id="bus_id" name="bus_id" >
                </div>
                <div class="input-group">
                    <label>BUS NUMBER:</label>
                    <input type="text" id="bus_name" name="bus_name" >
                </div>
                <div class="input-group">
                    <label>BUS TYPE:</label>
                    <input type="text" id="bus_type" name="bus_type" >
                </div>
                <div class="input-group">
                    <label> TOTAL SEATS:</label>
                    <input type="text" id="bus_seats" name="bus_seats" >
                </div>
                <div class="input-group">
                    <label>ROUTE:</label>
                    <select id="route" name="route">
                        <option>select</option>
                        <?php
                        include("connection.php");
                        while($row=mysqli_fetch_array($result))
                        {
                            $stoppage=$row['stoppage_name'];
                            echo"<option>$stoppage<br></option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="input-group">
                    <button type="submit" name="submit" value="submit" onclick="validate_bus()">SUBMIT</button>
                </div>
                <a href="\assessment2\employee.html">BACK</a>
            </form>
    
        </body>
    </html>