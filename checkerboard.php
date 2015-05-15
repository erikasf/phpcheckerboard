1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
<!DOCTYPE html>
    <html>
<meta charset = "utf-8">
<title>checkerboard<title>
     
<head>
 
<style type="text/css">
*{
 
padding: 0;
margin: 0;
 
}
 
table, td{
    border-collapse: collapse;}
 
.black{
background-color: black;
width: 50px;
height: 50px;
 
}
 
 
 
.red{
background-color: red;
width: 50px;d
height: 50px;
 
}
   
    <body>
        <table>
            <tbody>
                    <?php
                    for($x=1; $x<=8; $x++){
                            echo "<tr>";
                    for($y=1; $y<=4; $y++){
                                echo "<td></td>";
 
                    if($x % 2 == 0){
                            echo '<td class="black"></td>';
                            echo '<td class="red"></td>';
                                }
                    else{
                            echo '<td class="red"></td>';
                            echo '<td class="black"></td>';
                                }
                            }
                            echo "</tr>";
                    }
                            ?>
            </tbody>
        </table>              
    </body>                       
</html>
