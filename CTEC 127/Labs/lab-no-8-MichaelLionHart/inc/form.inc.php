<div class="container">
    <div class="jumbotron py-5">
        <h1 class="display-3 mb-4">Temperature Converter</h1>
        <p class="lead">CTEC 127 - PHP with SQL 1</p>
        <hr class="my-4">
        <p>Enter a temperature and a unit type and find the converted temperature!</p>​
    </div> <!-- end of jumbotron --> 

    <div class="content2">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label for="temp">Temperature</label>
                <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo $_POST['originaltemp'];?>" name="originaltemp" size="7" maxlength="7" id="temp" class="form-control mb-3">
            </div>
            <div class="col-6">
            <label for="originalunit">Original Unit</label>
                <select name="originalunit" class="form-control" id="originalunit">
                    <option value="--Select--"<?php if($originalUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                    <option value="celsius"<?php if($originalUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                    <option value="farenheit"<?php if($originalUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                    <option value="kelvin"<?php if($originalUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                </select>
            </div>
            </div> <!-- end first row -->
            <div class="row">
                <div class="col-6">
                    <label for="convertedtemp">Converted Temperature</label>
                    <input type="text" value="<?php if (isset($_POST['originaltemp'])) echo round($convertedTemp, 1);?>" 
                    name="convertedtemp" size="7" maxlength="7" id="convertedtemp" class="form-control" disabled>
                </div>
            <div class="col-6">
                <label for="conversionunit">Converted Unit</label>
                <select name="conversionunit" class="form-control" id="conversionunit">
                    <option value="--Select--"<?php if($conversionUnit == "--Select--") echo ' selected="selected"';?>>--Select--</option>
                    <option value="celsius"<?php if($conversionUnit == "celsius") echo ' selected="selected"';?>>Celsius</option>
                    <option value="farenheit"<?php if($conversionUnit == "farenheit") echo ' selected="selected"';?>>Farenheit</option>
                    <option value="kelvin"<?php if($conversionUnit == "kelvin") echo ' selected="selected"';?>>Kelvin</option>
                </select>
            </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12">
                <input type="submit" value="Convert" class="btn btn-danger" id="submit"/>   
                </div>
            </div>
    ​
        </form>

        
        
        
    </div> <!-- end of content2 -->
        <div class="row">
            <div class="col-6">
            <table class="table table-bordered table-dark my-4">
            <thead>
            <tr>
                <th>From</th>
                <th>To Fahrenheit</th>
                <th>To Celcius</th>
                <th>To Kelvin</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Fahrenheit (F)</td>
                <td>F</td>
                <td>(F – 32) * 5/9</td>
                <td>(F – 32) * 5/9 + 273.15</td>
            </tr>
            <tr>
                <td>Celsius (C or o)</td>
                <td>(C * 9/5) + 32</td>
                <td>C</td>
                <td>C + 273.15</td>
            </tr>
            <tr>
                <td>Kelvin (K)</td>
                <td>(K – 273.15) * 9/5 + 32</td>
                <td>K – 273.15</td>
                <td>K</td>
            </tr>
            </tbody>
            </table>
            </div>
    
            <div class="col-6">
            <table class="table table-bordered table-dark info my-4">
            <thead>
            <tr>
                <th>Temperature Facts</th>
            </tr>
            <tr>
                <td>The hottest temperature ever recorded on Earth is 57.8 °C (136 °F), recorded in Al 'Aziziyah, Libya on September 13, 1922.</td>
            </tr>
            <tr>
                <td>The coldest temperature ever recorded on Earth is −89.2 °C (−128.6 °F), recorded at Vostok Station, Antarctica on July 21, 1983.</td>
            </tr>
            <tr>
                <td>The highest temperature ever recorded in the USA is 56.7 °C (134 °F), recorded in Death Valley, California on July 10, 1913.</td>
            </tr>
    
            </tbody>
            </table>
            </div>
        </div>
        
</div> <!-- end of container -->