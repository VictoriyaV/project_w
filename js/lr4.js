var today = new Date();
 
 
var SEP = new Date("September 1, 2016");
 
var time = (SEP.getTime() - today.getTime());
 
 
var e_days = time / 86400000;
 var days = Math.floor(e_days);
  
var  ned = Math.floor(days/7);
 
alert("До 1 сенября осталось "+ned+" недель");


 