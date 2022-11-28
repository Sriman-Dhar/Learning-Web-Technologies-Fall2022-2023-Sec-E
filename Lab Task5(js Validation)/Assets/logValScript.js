function addEmployeeValidation()
{
    var validjsPosition = document.getElementById("empPid").value;
    var validjsFname    = document.getElementById("empFid").value;
    var validjsLname    = document.getElementById("empLid").value;
    var validjsDob      = document.getElementById("empDBid").value;
    var validjsAge      = document.getElementById("empAid").value;
    var validjsGen      = document.getElementById("empGid").value;
    var validjsAdd      = document.getElementById("empAid").value;
    var validjsPho      = document.getElementById("empPHid").value;
    var validjsMail     = document.getElementById("empMaiid").value;
    var validjsPass     = document.getElementById("empPassid").value;


    if(validjsPosition=="" || validjsFname=="" || validjsLname=="" || validjsDob=="" || validjsAge=="" || validjsGen=="" || validjsAdd=="" || validjsPho=="" || validjsMail=="" || validjsPass==""){

        document.getElementById("PosAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("FirstAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("LastAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("DobAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("AgeAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("AddAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("PhoneAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("MailAlert").innerHTML= "*Empty Field Detected!!";
        document.getElementById("PassAlert").innerHTML= "*Empty Field Detected!!";

        return false;
        //alert("All Informations Must be Filled Out!");
    }

}
