function datesInterval(begin, end, test){
	//*console.log(begin.getTime());
const isBetween =test> begin && test <end ;
return isBetween;
}
consol.log(
datesInterval(
new Date (1999, 05,30),
new Date (1999, 06,30),

)
);
