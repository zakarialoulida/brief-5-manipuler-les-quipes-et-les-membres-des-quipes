const buttontab1=document.getElementById("buton1")
const buttontab2=document.getElementById("buton2")
const buttontab3=document.getElementById("buton3")
const deleted=document.getElementById("delete")
const tableau1=document.getElementById("table1")
const tableau2=document.getElementById("table2")
const tableau3=document.getElementById("table3")

document.getElementById('buton1').addEventListener("click",() =>{
    document.getElementById('table1').classList.remove("hidden");
    document.getElementById('table2').classList.add("hidden");
    document.getElementById('table3').classList.add("hidden");
})
document.getElementById('buton2').addEventListener("click",() =>{
    document.getElementById('table2').classList.remove("hidden");
    document.getElementById('table1').classList.add("hidden");
    document.getElementById('table3').classList.add("hidden");

})
document.getElementById('buton3').addEventListener("click",() =>{
    document.getElementById('table3').classList.remove("hidden");
    document.getElementById('table2').classList.add("hidden");
    document.getElementById('table1').classList.add("hidden");
})
deleted.addEventListener("click",()=>{
    window.location.replace("index.php");
    document.getElementById('table3').classList.remove("hidden");
    document.getElementById('table2').classList.add("hidden");
    document.getElementById('table1').classList.add("hidden");
})