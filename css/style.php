<style>

html{
	scroll-behavior: smooth;
	 
}

html, body {
    max-width: 100%;
    overflow-x: hidden;
    
}

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	 font-family: 'Roboto Condensed', sans-serif;
}

.row{
	margin-left: 0!important;
	margin-right: 0!important;
}

.navbar-style{
	background-color: #2f2626!important;

}
.navbar-style a{
	color: white;
   
} 


.dropdown-menu{
	background-color: #2f2626!important;
}

/*main header*/
.main_header{
	height: 350px;
	width: 100%;

}
.rightside h1{
	font-size: 3rem;
}

.corona-rotate img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0% { transform: rotate(0); }
	100% {transform: rotate(360deg);}
}


.leftside img{ 
	animation: heartbeat 5s linear infinite;
}
 @keyframes heartbeat{

 	0% {transform: scale(.75);}
 	20% {transform: scale(1);}
 	40% {transform: scale(.75);}
 	60% {transform: scale(1);}
 	80% {transform: scale(.75);}
 	100% {transform: scale(1);}
 }

.parallax{
	/*background-image: linear-gradient(to right, red , yellow);
	background-size: cover;
	background-attachment: fixed;  
	height: 500px;*/
	background-color: #ee5522;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 2000 1500'%3E%3Cdefs%3E%3CradialGradient id='a' gradientUnits='objectBoundingBox'%3E%3Cstop offset='0' stop-color='%23FB3'/%3E%3Cstop offset='1' stop-color='%23ee5522'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='0' y1='750' x2='1550' y2='750'%3E%3Cstop offset='0' stop-color='%23f7882b'/%3E%3Cstop offset='1' stop-color='%23ee5522'/%3E%3C/linearGradient%3E%3Cpath id='s' fill='url(%23b)' d='M1549.2 51.6c-5.4 99.1-20.2 197.6-44.2 293.6c-24.1 96-57.4 189.4-99.3 278.6c-41.9 89.2-92.4 174.1-150.3 253.3c-58 79.2-123.4 152.6-195.1 219c-71.7 66.4-149.6 125.8-232.2 177.2c-82.7 51.4-170.1 94.7-260.7 129.1c-90.6 34.4-184.4 60-279.5 76.3C192.6 1495 96.1 1502 0 1500c96.1-2.1 191.8-13.3 285.4-33.6c93.6-20.2 185-49.5 272.5-87.2c87.6-37.7 171.3-83.8 249.6-137.3c78.4-53.5 151.5-114.5 217.9-181.7c66.5-67.2 126.4-140.7 178.6-218.9c52.3-78.3 96.9-161.4 133-247.9c36.1-86.5 63.8-176.2 82.6-267.6c18.8-91.4 28.6-184.4 29.6-277.4c0.3-27.6 23.2-48.7 50.8-48.4s49.5 21.8 49.2 49.5c0 0.7 0 1.3-0.1 2L1549.2 51.6z'/%3E%3Cg id='g'%3E%3Cuse href='%23s' transform='scale(0.12) rotate(60)'/%3E%3Cuse href='%23s' transform='scale(0.2) rotate(10)'/%3E%3Cuse href='%23s' transform='scale(0.25) rotate(40)'/%3E%3Cuse href='%23s' transform='scale(0.3) rotate(-20)'/%3E%3Cuse href='%23s' transform='scale(0.4) rotate(-30)'/%3E%3Cuse href='%23s' transform='scale(0.5) rotate(20)'/%3E%3Cuse href='%23s' transform='scale(0.6) rotate(60)'/%3E%3Cuse href='%23s' transform='scale(0.7) rotate(10)'/%3E%3Cuse href='%23s' transform='scale(0.835) rotate(-40)'/%3E%3Cuse href='%23s' transform='scale(0.9) rotate(40)'/%3E%3Cuse href='%23s' transform='scale(1.05) rotate(25)'/%3E%3Cuse href='%23s' transform='scale(1.2) rotate(8)'/%3E%3Cuse href='%23s' transform='scale(1.333) rotate(-60)'/%3E%3Cuse href='%23s' transform='scale(1.45) rotate(-30)'/%3E%3Cuse href='%23s' transform='scale(1.6) rotate(10)'/%3E%3C/g%3E%3C/defs%3E%3Cg transform='rotate(0 0 0)'%3E%3Cg transform='rotate(0 0 0)'%3E%3Ccircle fill='url(%23a)' r='3000'/%3E%3Cg opacity='0.5'%3E%3Ccircle fill='url(%23a)' r='2000'/%3E%3Ccircle fill='url(%23a)' r='1800'/%3E%3Ccircle fill='url(%23a)' r='1700'/%3E%3Ccircle fill='url(%23a)' r='1651'/%3E%3Ccircle fill='url(%23a)' r='1450'/%3E%3Ccircle fill='url(%23a)' r='1250'/%3E%3Ccircle fill='url(%23a)' r='1175'/%3E%3Ccircle fill='url(%23a)' r='900'/%3E%3Ccircle fill='url(%23a)' r='750'/%3E%3Ccircle fill='url(%23a)' r='500'/%3E%3Ccircle fill='url(%23a)' r='380'/%3E%3Ccircle fill='url(%23a)' r='250'/%3E%3C/g%3E%3Cg transform='rotate(0 0 0)'%3E%3Cuse href='%23g' transform='rotate(10)'/%3E%3Cuse href='%23g' transform='rotate(120)'/%3E%3Cuse href='%23g' transform='rotate(240)'/%3E%3C/g%3E%3Ccircle fill-opacity='0.1' fill='url(%23a)' r='3000'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") !important;
background-attachment: fixed;
background-size: cover;
}
.parallax_sec{
	background-color: #000000; 
}
/*corona update*/
.corona_update{
	margin: 0 0 30px 0;
}

.corona_update h3{
	color: #ff7675;
	font-size: 3rem;
}

.corona_update{
	font-size: 2rem;
	text-align: center;
}


/*about section*/
/*.sub_section{
	background-color: #fbfafd; 
}*/
/*/////footer///*/

.footer_style{
     background-color: #2f2626 !important;
     
}



.footer_style h1{
	font-size: 25px;
	font-weight: bold;
	text-align: center;
}
.footer_style p{
	font-size: 18px;
	color: #999;
	line-height: 25px;
}

.footer_style h2{
	color: #fff;
	font-family: Poppins;
	text-transform: uppercase;
}

.footer_style h2:before{
content: '|';
color: #c65309;
padding-right: 10px; 
}
.segment-two ul{
	margin: 0;
	padding: 0;
	list-style: none;
}
.segment-two ul li{
	border-bottom: 1px solid rgba(255,255,255,0.3);
	line-height:  40px;
}

.segment-two ul li a{
	color: #999;
	text-decoration: none; 
}
.footer_style a{
	background: #494848;
	width: 40px;
	height: 40px;
	display: inline-block;
	border-radius: 50%;
}

.footer_style a i{
 font-size: 20px;
 color: #fff;
 padding: 10px 12px;

}

#form_box {
    position: relative;
    height: 35px;
    top: 7px;
    left: 20px; 
}

#subscribe_email {
    border: solid 1px #CCC;
    height: 24px;
    width: 250px;
    font-size: 15px;
    color: #0000000;
    padding-left: 5px;
}

#subscribe_submit {
    position: relative;
    border: solid 1px #ee5522;
    height: 25px;
    width: 115px;
    color: #000000;
    background-color: #ee5522;
}


/*/////table/////*/
/*
tr{
	background-color: green; 
	text-align: center;
	padding: 10px;
    font-size: 20px;
    justify-content: center; 
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); 
}*/
table{
	border-color: black; 
}
tr{
	font-size:20px;
	
	}
.tbhdcolor{
	background-color: #000000; 
}	


/*/////top btn///*/
#myBtn{
	display: none;
	position: fixed;
	bottom:30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px; 
}
 
#myBtn:hover {
	background: #606060;
} 



/*/////responsive////*/

@media only screen and (max-width: 780px){
	.main_header{ height: 700px; text-align: center; }
    
	.main_header h1{
		text-align: center;
		padding: 0;
		width: 100%;
		font-size: 2em;
	}
	.count_style{
		display: inline !important;
	}
	.count_style p{
		text-align: center;
	}
	.about_res{
		margin-left: 0 !important;
	}

}


/*/////team/////*/

</style>