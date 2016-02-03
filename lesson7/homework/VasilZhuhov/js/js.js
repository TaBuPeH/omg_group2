function MyFunction()
{
   var number = document.getElementById("number").value;
   if((number>100) && (number<999))
   {
    var a=Math.floor(number/100);
    var b=Math.floor(number/10%10);
    var c=Math.floor(number%10);
    var sbor=a+b+c;

     if(sbor==13)
        {
          alert("FUCK YES sbora ot cifrite e 13");
        }
     else
        {
         alert("Nop ne");
        }
    }
   else
    {
    alert("Mnogo e gadno kato ne mozhesh da chetesh");
    }
}
