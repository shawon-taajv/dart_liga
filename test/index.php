<?php
/**
 * Created by PhpStorm.
 * User: Shawon
 * Date: 2/11/2022
 * Time: 2:57 PM
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Form Validation with Vanilla JavaScript</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="text-center mt-4 mb-2">PHP Form Validation with Vanilla JavaScript</h2>

    <span id="message"></span>
    <form id="sample_form">
        <div class="card">
            <div class="card-header">Sample Form</div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control form_data" />
                    <span id="name_error" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>E-mail <span class="text-danger">*</span></label>
                    <input type="text" name="email" id="email" class="form-control form_data" />
                    <span id="email_error" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Comment <span class="text-danger">*</span></label>
                    <textarea name="comment" id="comment" cols="40" rows="5" class="form-control form_data"></textarea>
                    <span id="comment_error" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label>Gender <span class="text-danger">*</span></label>
                    <select name="gender" id="gender" class="form-control form_data">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <span id="gender_error" class="text-danger"></span>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" name="submit" id="submit" class="btn btn-primary" onclick="save_data('form_data'); return false;">Save</button>
            </div>
        </div>
    </form>
    <br />
    <br />
</div>
<script>

    function save_data(classname)
    {
        var form_element = document.getElementsByClassName(classname);
        var form_data = new FormData();
        for(var count = 0; count < form_element.length; count++)
        {
            form_data.append(form_element[count].name, form_element[count].value);
        }
        var url = 'process_data.php';
        getRequest(
            url, // URL for the PHP file
            form_data,
            drawOutput,  // handle successful request
            drawError,   // handle error
        );
    }
    var response = "";
    function getRequest(url, data, success, error) {
        var req = false;
        try{
            // most browsers
            req = new XMLHttpRequest();
        } catch (e){
            // IE
            try{
                req = new ActiveXObject("Msxml2.XMLHTTP");
            } catch(e) {
                // try an older version
                try{
                    req = new ActiveXObject("Microsoft.XMLHTTP");
                } catch(e) {
                    return false;
                }
            }
        }
        if (!req) return false;
        if (typeof success != 'function') success = function () {};
        if (typeof error!= 'function') error = function () {};
        req.onreadystatechange = function(){
            if(req.readyState == 4) {
                response = req.responseText;
                return req.status === 200 ?
                   success(req.responseText) : error(req.status);
            }
        }
        req.open("POST", url, true);
        req.send(data);
        return req;
    }
    function drawOutput() {
        console.log("Success");
        var rArray = responseArray(response);
        console.log(rArray[1]);
    }
    function drawError() {
        console.log("Failed");
    }
    function responseArray(response) {
        var mArray = response.split(",");
        var responseArray = [];
        for (var i = 0; i < mArray.length; i++) {
            responseArray[i] = mArray[i].substring(mArray[i].lastIndexOf(":\"") + 2,mArray[i].lastIndexOf("\""));
        }
        return responseArray;
    }

</script>
</body>
</html>

