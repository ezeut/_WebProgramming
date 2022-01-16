<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="default.css"/>
        <style>
            table{float: left; width: 500px; margin-left: 100px; margin-bottom: 30px;}
            td{border-bottom: 1px; height: 30px;}
            form{text-align: left;}
            #wrap{
                overflow-x: auto;
                overflow-y: auto;
                white-space: nowrap;
                height: auto;
                background-color: white;
            }
            #r_stamp{text-align: center;}
            #w_stamp{font-size: 13px; margin-left: 30px; margin-top: 30px;}
            textarea {
                font-size: 13px;
                padding: 10px;
                line-height: 1.5;
                border-radius: 5px;
                border: 1px solid #ccc;
                box-shadow: 1px 1px 1px #999;    
            }            
        </style>
        <title>stamp</title>
    </head>
    <body onload="printClock() ,printDate()" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <header id="header">
           <a href="index.html"><p>It's me, Ji Eun</p></a>
        </header>
            <nav id="navi">
                <div class="profile">
                    <a href="index.html"><img src="images/profile_icon/icon.PNG" width="200" height="200"></a>
                </div>
                <div class="title">
                    <h1 class="maintitle"><a href="index.html">지은</a></h1>
                    <h2 class="subtitle">
                        <a href="https://www.instagram.com/ffdd50_/"><img src="images/profile_icon/insta.png" width="30px" height="30px"></a>
                        <a href="https://www.facebook.com/l23584654/"><img src="images/profile_icon/fb.png" width="30px" height="30px"></a>
                        <a href="mailto:jg3012@sookmyung.ac.kr"><img src="images/profile_icon/mail.png" width="30px" height="30px"></a>
                    </h2>
                </div>
                <div>
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="info.html"><span class="menu-title">Info</span></a>
                        </li></br>
                        <li class="menu-item">
                            <a href="work.html"><span class="menu-title">My Work</span></a>
                        </li></br>
                        <li class="menu-item">
                            <a href="favorite.html"><span class="menu-title">My Favorite</span></a>
                        </li></br>
                        <li class="menu-item">
                            <a href="stamp.php"><span class="menu-title">Stamp</span></a>
                        </li></br>
                    </ul>
                    </br>
                    <div class="today">
                        <ul>
                            <h4>current time</h4></br>
                            <li><div id = "clock"></div></li>
                            </br><h4>today</h4></br>
                            <li><div id = "tdate"></div></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="wrap"> 
                <div id="w_stamp">
                    <form method="POST" name="wstamp" action="w_stamp.php">
                        <h4>방명록 작성하기</h4> <br/>
                        <textarea rows="10" cols="70" name="scontent" autocomplete="off" required ></textarea></br>
                        이름: &nbsp;&nbsp;&nbsp;<input type="text" name="sname" size="10" autocomplete="off" required>  &nbsp;&nbsp;
                        비밀번호: <input type="password" name="pw" size="15" autocomplete="off" required></br>
                        E-mail: <input type="email" name="email" size="38" autocomplete="off" required>
                        <input type="button" onclick="con_stamp()" value="작성">
                    </form>
                </div>
                </br></br>
                <hr>
                </br>
                <div id="r_stamp">
                    <?php include "r_stamp.php";
                    ?><br>
                </div>
            </div>
            <footer id="main-footer">
                <p><a href="#">Copyright ⓒ 2021 Ji Eun Yi. All rights reserved.</a></p>
                <address>Contact webmaster for more information. 010-3124-1680</address>
            </footer>
            <script>

                function printClock() {                
                    var clock = document.getElementById("clock");           
                    var currentDate = new Date();
                
                    var currentHours = zeros(currentDate.getHours(),2); 
                    var currentMinute = zeros(currentDate.getMinutes() ,2);
                    var currentSeconds =  zeros(currentDate.getSeconds(),2);

                    clock.innerHTML = currentHours+":"+currentMinute+":"+currentSeconds;
                    setTimeout("printClock()",1000);
                }

                function printDate(){
                    var tdate = document.getElementById("tdate");
                    var currentDate = new Date();
                    var calendar = currentDate.getFullYear() + ". " + (currentDate.getMonth()+1) + ". " + currentDate.getDate() + ". ";
                    tdate.innerHTML = calendar;
                }
                
                function zeros(num, digit){
                    var zero = '';
                    num = num.toString();
                    if(num.length < digit){
                        for(i = 0; i < digit - num.length; i++){
                            zero+='0';
                        }
                    }
                    return zero + num;
                }
                function con_stamp(){
                    const con = confirm("방명록을 작성하시겠습니까?");
                        if(con==true){
                            document.wstamp.submit();
                        }
                        else{
                            alert("취소되었습니다.");
                        }
                }
                document.oncontextmenu = function(e){
                alert ("우클릭 이용은 불가능합니다.");
                return false;
            }
            </script>
    </body>
</html>