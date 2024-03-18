<html lang="en">

<head>
    <meta http-equiv="content-language" content="en-us">
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Home IoT
    </title>
    <link rel="stylesheet" href="../css/mystyles.css">
</head>

<body>
    <div style="text-align:right;">Welcome <?php echo $_GET["name"];?></div>
    <h1 id="page-title">
        My Home Controls
    </h1>
    <div class="my-forms">
        <form name="RoomCtrlFrm" method="POST" action="homeIoT.html">
            <label>Room Name: </label>
            <input type="text" name="tfRoomName"/>
            <br>
            Door:
            <input type="radio" name="rbDoor" value="o" id="rb-door-open"/><label for="rb-door-open">Open</label>
            <input type="radio" name="rbDoor" value="c" id="rb-door-close"/><label for="rb-door-close">Close</label>
            <br>
            <label for="select-heater-time">Turn on Heater</label>
            <select id="select-heater-time" name="selectHeaterTime">
                <option value="0">Keep Off</option>
                <option value="-1">Keep ON</option>
                <option value="15">15 min</option>
                <option value="39">30 min</option>
                <option value="45">45 min</option>
                <option value="60">60 min</option>
            </select>
            <br>
            <input type="checkbox" id="light1" name="cbLight1"/>
            <label for="light1">light 1</label>
            <input type="checkbox" id="light2" name="cbLight2"/>
            <label for="light2">light 2</label>
            <br>
            <input type="button" value="Submit" onclick="SumbitRoomControlFrm()">
            <input type="button" value="Reset" onclick="ResetRoomControlFrm()">
        </form>
    </div>

    <script>
        function SumbitRoomControlFrm(){
            /*
            var mForm=document.querySelector("form[name='signup-form']");
        var fn=mForm.elements["firstname"].value;
        var ln=mForm.elements["lastname"].value;
        var email=mForm.elements["email"].value;
        var pass=mForm.elements["pass"].value;
        var confPass=mForm.elements["confirmPassword"].value;
        var sex=mForm.elements["sex"].value;
        var ageGroup=mForm.elements["ageGroup"].value;
        var language=mForm.elements["language"].value;
        var captcha=mForm.elements["cbcaptcha"].checked;*/

            let mForm=document.querySelector("form[name='RoomCtrlFrm']"); //returns an html element
            let roomName=mForm.elements["tfRoomName"].value;
            let door=mForm.elements["rbDoor"].value;
            let heaterTime=mForm.elements["selectHeaterTime"].value;
            let light1=mForm.elements["cbLight1"].checked;
            let light2=mForm.elements["cbLight2"].checked;
            
            //i can do the validation here            
            if (roomName=="")
                alert("You must enter a room name.")
            else
                mForm.submit();
        }

        function ResetRoomControlFrm(){
            let mForm=document.querySelector("form[name='RoomCtrlFrm']"); //returns an html element
            mForm.elements["tfRoomName"].value="";
            mForm.elements["rbDoor"].value="o";
            mForm.elements["selectHeaterTime"].value="0";
            mForm.elements["cbLight1"].checked=false;
            mForm.elements["cbLight2"].checked=false;
        }
    </script>
</body>

</html>