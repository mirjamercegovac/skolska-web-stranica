var date = new Date();

function RenderDate(){
date.setDate(1);

var day=date.getDay();

var endDate= new Date( date.getUTCFullYear(), date.getMonth()+1, 0).getDate();

var prevDate=new Date(date.getUTCFullYear(), date.getMonth(), 0).getDate();

var today =new Date();
console.log(today);
var months=[
  "Siječanj", 
  "Veljača", 
  "Ožujak", 
  "Travanj", 
  "Svibanj", 
  "Lipanj", 
  "Srpanj", 
  "Kolovoz", 
  "Rujan", 
  "Listopad", 
  "Studeni",
  "Prosinac"
];

document.getElementById("date_str").innerHTML=date.getFullYear();
document.getElementById("month").innerHTML=months[date.getMonth()];

var colls= "";

for(x=day; x>1; x--){
  colls +="<div class='prev_date'>" + (prevDate-x+1) + "</div>";
}

for(i=1; i<=endDate; i++){
  if(i==today.getDate() && date.getMonth()==today.getMonth()){
    colls += "<div class='today'>" + i + "</div>";
  }else{
    colls += "<div>" + i + "</div>";
  }
}

document.getElementsByClassName("days")[0].innerHTML=colls;


}




function moveDate(para){
  if(para=='prev'){
    date.setMonth(date.getMonth()-1);
  }else if(para=='next'){
    date.setMonth(date.getMonth()+1);
  }
  RenderDate();
}
