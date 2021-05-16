function Semester()
{
var semesterSelecttag = document.querySelector("#inputSemester");
var periodSelecttag = document.querySelector("#inputPeriod");

periodSelecttag.innerHTML = "";

if(semesterSelecttag.value != "")
{
    switch(semesterSelecttag.value)
    {
        case "s1" : p = 1; break;
        case "s2" : p = 3; break;
        default: break;

    }
    for(var i=p; i<(p+2); i++)
    {
        optionTag = document.createElement("option");
        attribute = document.createAttribute("value");
        attribute.value = "P" + 1;
        optionTag.setAttributeNode(attribute);
        optionTag.innerHTML = "P" + i;
        periodSelecttag.appendChild(optionTag);
    }
}
else
{
    for(var i=0; i <5; i++)
    {
        optionTag = document.createElement("option");
        attribute = document.createAttribute("value");

        if(i == 0)
        {
            attribute.value = "";
            attribute.innerHTML = "";
        }
        else
        {
            attribute.value = "P" + i;
            optionTag.innerHTML = "P" + i;
        }

        optionTag.setAttributeNode(attribute);
        periodSelecttag.appendChild(optionTag);
    }
}

console.log(semesterSelecttag);
// alert(semesterSelecttag);


}