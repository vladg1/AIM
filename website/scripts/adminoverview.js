var status = "less";

function toggleText()
{
    var text="&nbsp&nbsp&nbsp<b>Enrolled Students</b>: 234 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Potential Students</b>: 224"

    if (status == "less") {
        document.getElementById("textArea").innerHTML=text;
        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea").innerHTML = "";
        status = "less"
    }
}


function toggleText2()
{
    var text="<b>New Students:</b> 122&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Droped-Out Students</b>: 15&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Total Students</b>: 899"
    if (status == "less") {
        document.getElementById("textArea2").innerHTML=text;

        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea2").innerHTML = "";

        status = "less"
    }
}

function toggleText3()
{
    var text="<b>New Students:</b> 89&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Droped-Out Students</b>: 11&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Total Students</b>: 786"
    
    if (status == "less") {
        document.getElementById("textArea3").innerHTML=text;

        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea3").innerHTML = "";

        status = "less"
    }
}
