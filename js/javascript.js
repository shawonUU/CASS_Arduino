//*** #f5f5f5; ***

function code_heighliter(){
var myheading = document.getElementById("code");
	var stng = myheading.textContent;
	
	var lnt = stng.length;
	var code="",cst="";
	var hs=0,mp=0,sq=0,dq=0,ds=0,ss=0,nm=0,ns=0;
	stng.replace(String.fromCharCode(160)," ");
	for(var i=0; i<lnt; i++){
		if(stng[i].charCodeAt(0) == 160){ chaR = ' ';}
		else chaR = stng[i];
		
	    if(dq==0&&ds==0&&ss==0&&chaR=='#'){hs=1;}
	    if(ds==0&&ss==0&&chaR=='"'){dq++;}
	    if(ds==0&&ss==0&&chaR=='\''){sq++;}
	    if(chaR=='/'&&stng[i+1]=='/'){ds=1;}
	    if(chaR=='/'&&stng[i+1]=='*'){ss=1;}
	    if((chaR=='0'||chaR=='1'||chaR=='2'||chaR=='3'||chaR=='4'||chaR=='5'||
	    	chaR=='6'||chaR=='7'||chaR=='8'||chaR=='9'||nm>0)&&sq==0&&dq==0&&ds==0&&ss==0){nm++;}
	    if(hs==1){
	      if(chaR==' '){code += "<code class='headerfile'>"+cst+"</code>";code += "<code>"+String.fromCharCode(32)+"</code>";cst="";}
	      else if(chaR=='\n'){code += "<code class='headerfile'>"+cst+"</code>";cst="";code += "<br/>";hs=0;}
	      else if(chaR=='\t'){code += "<code class='headerfile'>"+cst+"</code>";cst="";code += "\t";}
	      else{cst += chaR;}
	      if(i==lnt-1){code += "<code class='headerfile'>"+cst+"</code>";cst="";}
	    }
	    else if(sq!=0){
	    	if(chaR==' '){code += "<code class='char'>"+cst+"</code>";code += "<code>"+String.fromCharCode(32)+"</code>";cst="";}
	        else if(chaR=='\n'){code += "<code class='char'>"+cst+"</code>";cst="";code += "<br/>";}
	        else if(chaR=='\t'){code += "<code class='char'>"+cst+"</code>";cst="";code += "\t";}
	        else{cst += chaR;}

	        if(chaR=='\''||i==lnt-1){code += "<code class='char'>"+cst+"</code>";cst="";}
	        if(sq==2){sq=0;}
	    }
	    else if(dq!=0){
	    	if(chaR==' '){code += "<code class='string'>"+cst+"</code>";code += "<code>"+String.fromCharCode(32)+"</code>";cst="";}
	        else if(chaR=='\n'){code += "<code class='string'>"+cst+"</code>";cst="";code += "<br/>";}
	        else if(chaR=='\t'){code += "<code class='string'>"+cst+"</code>";cst="";code += "\t";}
	        else{cst += chaR;}

	        if(chaR=='"'||i==lnt-1){code += "<code class='string'>"+cst+"</code>";cst="";}
	        if(dq==2){dq=0;}
	    }
	    else if(ds==1){
			if(chaR==' '){code += "<code class='comment'>"+cst+"</code>";code += "<code>"+String.fromCharCode(32)+"</code>";cst="";}
			else if(chaR=='\n'){code += "<code class='comment'>"+cst+"</code>";cst="";code += "<br/>";ds=0;}
			else if(chaR=='\t'){code += "<code class='comment'>"+cst+"</code>";cst="";code += "\t";}
			else{cst += chaR;}
			if(i==lnt-1){code += "<code class='comment'>"+cst+"</code>";cst="";}
	    }
	    else if(ss==1){
	    	if(chaR==' '){code += "<code class='comment'>"+cst+"</code>";code += "<code>"+String.fromCharCode(32)+"</code>";cst="";}
	        else if(chaR=='\n'){code += "<code class='comment'>"+cst+"</code>";cst="";code += "<br/>";}
	        else if(chaR=='\t'){code += "<code class='comment'>"+cst+"</code>";cst="";code += "\t";}
	        else {cst += chaR;}
	        if(chaR=='/'&&stng[i-1]=='*'){code += "<code class='comment'>"+cst+"</code>";cst="";ss=0;}
	        if(i==lnt-1){code += "<code class='comment'>"+cst+"</code>";cst="";}
	    }
	    else if(nm>0){
	        if(nm==1&&cst!=""){ns = 1;}
	    	if(!(chaR=='0'||chaR=='1'||chaR=='2'||chaR=='3'||chaR=='4'||chaR=='5'||
	    	chaR=='6'||chaR=='7'||chaR=='8'||chaR=='9')&&chaR!='.'){
	    	    if(ns==0){code += "<code class='value'>"+cst+"</code>";}
	    	    else{code += proces(cst);}
	    	    cst="";nm=0;ns=0;i--;
	    	}
	    	else {cst += chaR;}
	    	if(i==lnt-1){code += "<code class='value'>"+cst+"</code>";cst="";}
	    }
	    else{

	       if(chaR=='&'&&stng[i+1]=='l'&&stng[i+2]=='t'&&stng[i+3]==';'){
	       	 code += proces(cst)+"<code class='other'>&lt;</code>"; i += 3;cst="";
	       }
	       else if(chaR=='&'&&stng[i+1]=='g'&&stng[i+2]=='t'&&stng[i+3]==';'){
	       	 code += proces(cst)+"<code class='other'>&gt;</code>"; i += 3;cst="";
	       }
	       else if(chaR=='&'&&stng[i+1]=='a'&&stng[i+2]=='m'&&stng[i+3]=='p'&&stng[i+4]==';'){
	       	 code += proces(cst)+"<code class='other'>&amp;</code>"; i += 4;cst="";
	       }
	       else if(
	       	 chaR==','||chaR=='.'||chaR=='='||
	         chaR=='('||chaR==')'||chaR==';'||
	       	 chaR=='$'||chaR==':'||chaR=='%'||
	       	 chaR=='['||chaR==']'||chaR=='#'||
	       	 chaR=='?'||chaR=='+'||chaR=='&'||
	       	 chaR=='{'||chaR=='}'||chaR=='"'||
	       	 chaR=='^'||chaR=='!'||chaR=='*'||
	       	 chaR=='/'||chaR=='|'||chaR=='-'||
	       	 chaR=='\\'||chaR=='~'||chaR=='−'||
	       	 chaR=='\''
	       	){code += proces(cst)+"<code class='other'>"+chaR+"</code>"; cst="";}
	       	else if(chaR==' '){code += proces(cst)+"<code>"+"\xa0"+"</code>";cst="";}
	        else if(chaR=='\n'){code += proces(cst)+"<br/>";cst="";}
	        else if(chaR=='\t'){code += proces(cst)+"\t";cst="";}
	        else{cst += chaR;}
	        if(i==lnt-1){code += proces(cst);cst="";}
	    }
	}
	myheading.innerHTML = code;
}
function proces(prm){
	 if(
	 	prm=="auto"||prm=="double"||prm=="struct"||
	 	prm=="break"||prm=="else"||prm=="long"||
	 	prm=="switch"||prm=="case"||prm=="enum"||
	 	prm=="register"||prm=="typrdef"||prm=="char"||
	 	prm=="extern"||prm=="return"||prm=="union"||
	 	prm=="continue"||prm=="for"||prm=="signed"||
	 	prm=="void"||prm=="do"||prm=="if"||
	 	prm=="static"||prm=="while"||prm=="default"||
	 	prm=="goto"||prm=="sizeof"||prm=="volatile"||
	 	prm=="const"||prm=="float"||prm=="short"||
	 	prm=="unsigned"||prm=="int"||prm=="using"||
	 	prm=="namespace"||prm=="goto"||prm=="else if"
	 ){prm = "<code class='keyword'>"+prm+"</code>";}
	 else if(
	 	prm=="main"||prm=="scanf"||prm=="printf"||prm=="std"||
		prm=="vector"||prm=="pair"||prm=="push_back"||prm=="clear"||
		prm=="size"||prm=="begin"||prm=="end"||prm=="pop"||prm=="first"||
		prm=="second"||prm=="top"||prm=="string"
	 ){prm = "<code class='buildin'>"+prm+"</code>";}
	 else{prm = "<code class='nocolor'>"+prm+"</code>";}
	return prm;
}