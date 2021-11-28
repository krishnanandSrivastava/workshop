function validate(){
	let p1=document.getElementById("pass").value;
	let p2=document.getElementById("cpass").value;
	if(p1!=""&&p2!=""){
		if(p1!=p2){
		alert("Password mismatch");
		}
		else{
		alert("Password matched");
		}
	}
	else{
		alert("Enter both Password");
	}
}
function f1(){
	var lm=document.getElementById("lname").value;
	if(!isNaN(lm)){
		alert("last name cannot be digit");
		document.getElementById("lname").value="";
		document.getElementById("lname").focus();
	}
}
function f2(){
	var mno=document.getElementById("mno");
	var no=parseInt(mno.value);
	 if(mno.value!=""){
		 if(isNaN(mno.value)){
		alert("Mno shuold be no");
		}
		else if(mno.value.length!=10){
			alert("enter 10 digits only");
		}
	 }
	 else{
		 alert("Enter Mno");
	 }
}
function f3(){
	var em=document.getElementById("email").value;
	if(em!=""){
		if(em.includes("@")&&em.includes(".")){
			if(em.indexOf('.')<em.indexOf('@')){
				alert("Not Valid Email@");
			}
		}
		else{alert("Not Valid Email")}
	
	}
	else{
		alert("enter email");
	}
}
function f4(){
	var city =document.getElementById("city").value;
	if(city==""){alert("Select City")}
	var add=document.getElementById("txtarea").value;
	if(add==""){alert("Enter address")}
	else{
		if(add.length>200){alert("address should be < 200 char")}
	}
}
function f5(){
	var gen = document.getElementsByName("gen");
	var gc=0;
	for (var i=0;i<gen.length;i++){
		console.log(gen[i].checked);
		if(gen[i].checked)
			gc++;
	}
	console.log(gc);
	if(gc==0){alert("Select Gender")}
}
function f6(){
	var hob = document.getElementsByName("hob");
	var gc=0;
	for (var i=0;i<hob.length;i++){
		console.log(hob[i].checked);
		if(hob[i].checked)
			gc++;
	}
	console.log(gc);
	if(gc==0){alert("Select hobbies")}
}
function f7(){
	var ph = document.getElementById("photo").value;
	if(ph==""){alert("Select photo")}
	var i=ph.indexOf('.');
	var sub=ph.substring(i+1);
	console.log(sub);
	if(sub!="png"&&sub!="jpeg")
		alert("select image only");
}
function f8(){
	validate();
	f1();f2();f3();f4();f5();f6();f7();
}