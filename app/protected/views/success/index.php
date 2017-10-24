<html>
<head>
    <title>信息提示页面</title>
    <META content="text/html; charset=utf-8" http-equiv=Content-Type>
    <style type=text/css>
        td,form,select,input,textarea,body {
            font-family: 宋体; font-size: 12px; letter-spacing: 2px; line-height: 150%; font-color: #000000
        }
        a {
            color: #666666; font-size: 10.5pt; text-decoration: none
        }
        a:hover {
            color: #666666; font-size: 10.5pt; text-decoration: none
        }
        .proccess {
            background: #ffffff; border-bottom: 1px solid; border-left: 1px solid; border-right: 1px solid; border-top: 1px solid; height: 8px; margin: 3px; width: 8px
        }
    </style>
    <script>
        var index = 5;
        function changeNum() {
            document.getElementById('changeNum').innerHTML=index;
            index--;
            if(index<1){
                location="<?php echo $jumpUrl?>";
            }else{
                setTimeout('changeNum()',1000);
            }
        }
    </script>
</head>
<body onload="changeNum()"
      style="OVERFLOW: hidden; OVERFLOW-Y: hidden">
<div align=center>
    <table align=center height="70%" valign="middle">
        <tbody>
        <tr>
            <td align=middle><p></p>
                <!-- Displaytext-->
                <FONT class=fontbig> <img src="<?php echo ROOT?>/images/booklogo.jpg" /><span style="font-size: 20px"><?php echo $message?></span>
                    <!--End Displaytext-->
                    <P style="font-size: 16px">等待<span id="changeNum"></span>秒自动跳转,若没跳转,请点击<a href="<?php echo $jumpUrl?>" style="color:red">跳转</a></P>
                    <div align=center>
                        <form method=post name=proccess>
                            <script language=javascript>
                                for(i=0;i<30;i++)document.write("<input class=proccess>")
                            </script>
                        </form>
                    </div>
                </font></td>
        </tr></tbody></table>
    <div align=center>
        <script language=JavaScript>
            var p=0,j=0;
            //var c=new Array("lightskyblue","white")
            setInterval('proccess()',140)
            function proccess(){
                document.forms.proccess.elements[p].style.background="lightskyblue";
                p++;
                /*if(p==30){p=0;j=1-j;}*/
            }
        </script>
    </div>
</div>
</body>
</html>