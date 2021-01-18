<?php 

//------ Q1 
// $str="hello work";

// echo (strtoupper($str));
// echo "<br/>";
// echo (strtolower($str));
// echo "<br/>";
// echo (ucfirst($str));
// echo "<br/>";
// echo (ucwords($str));
// echo "<br/>";

//------Q2
// $str= '082307';
// $arr = str_split($str, 2);
// // print_r ($arr);
// $str_r='';

// $last=count($arr);
// for ($x = 0; $x <= $last-1; $x++) {
//     if ($x==$last-1){
//         $str_r.=$arr[$x];
//     }
//     else{
//         $str_r.=$arr[$x].':';
//     }
// }
// // echo($str_r);

//// or  echo chunk_split($str,2,":");

//------ Q3

// $subject = "The quick brown fox jumps over the lazy dog.";

// $pattern = '/dog/i';
// preg_match($pattern,$subject, $matches, PREG_OFFSET_CAPTURE);

// echo((count($matches))?"true":"false");

//------Q4

// $link= 'www.example.com/public_html/index.php';

// $arr = explode('/',$link);
// echo ($arr[count($arr)-1]);

//-----Q5
// $link=  'Orange@example.com';

// $pattern = '/^.+@/';
// preg_match($pattern, $link, $matches, PREG_OFFSET_CAPTURE);
// $name=$matches[0][0];

// echo(substr($name,0,strlen($name)-1));

//----Q6 

// $link=  'Orange@example.jo' ;


// $pattern = '/\.\w{1,4}($|\?)/';
// preg_match($pattern, $link, $matches, PREG_OFFSET_CAPTURE);
// $name=$matches[0][0];

// echo(substr($name,1,strlen($name)));


//----Q7

// function password_generate($chars) 
// {
//   $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
//   return substr(str_shuffle($data), 0, $chars);
// }
//   echo password_generate(7)."\n";

//----Q8

// $str =  'the quick brown fox jumps over the lazy dog.';
// echo preg_replace('/the/', 'that', $str, 1);

//----Q9
// $str1 = 'football';
// $str2 = 'footboll';

// $str_pos = strspn($str1 ^ $str2, "\0");
// printf('First difference between two strings at position %d: "%s" vs "%s"',
// $str_pos, $str1[$str_pos], $str2[$str_pos]);
// printf("\n");

//---Q10
// $str="Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
// $arr=explode("\n",$str);
// var_dump($arr);

//-----Q11
// $cha = 'z';
// $next_cha = ++$cha; 
// if (strlen($next_cha) > 1) 
// {
//  $next_cha = $next_cha[0];
//  }
// echo $next_cha."\n";

//------Q12
// $link=  'Orange@example.jo' ;

// $arr = explode('@',$link);
// echo ($arr[count($arr)-1]);

//---------Q13
// $original_string = 'The brown fox';
// $string_to_insert ='quick';
// $insert_pos = 4;
// $new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
// echo $new_string."\n";

//--------Q14
// $str="The quick brown fox' Expected Output.";
// $a=explode(' ',$str);

// echo $a[0];

//---------Q15

// $str =  '000041234143034';
// echo ($str+1);


//---------Q16

// $str =  'The quick brown fox jumps over the lazy dog' ;
// echo preg_replace('/fox/', '', $str);

//---------Q17

// $str=  'The quick brown fox jumps over the lazy dog' ;

// echo preg_replace('/\//', '', $str);

//---------Q18
// $str='http://www.example.com/5478631';
// $pattern="/\d+$/";

// preg_match($pattern,$str,$matches, PREG_OFFSET_CAPTURE);

// echo($matches[0][0]);

//---------Q19

// $str='"\1+2/32:2-3/43';
// $pattern="/\W/";

// echo(preg_replace($pattern,'',$str));
//---------Q20

// $str= 'The quick brown fox jumps over the lazy dog';
// $pattern="/^(\w+\s+){5}/";

// preg_match($pattern,$str,$matches, PREG_OFFSET_CAPTURE);

// echo($matches[0][0]);




//---------Q21


// $str='2,543.12' ;
// $pattern="/\,/";

// echo(preg_replace($pattern,'',$str));




//---------Q22

// $a = range("A","z");
// // Show the character one after another
// foreach($a as $char)
//     echo $char."<br>";















































?>