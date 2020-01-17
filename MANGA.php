<?php

set_time_limit(0);
 $nameManga="one-piece";
 $firstChapiter=1;
 $lastChapiter;
 $firstEpisode=2;
 $lastEpisode=3;
 $table;
 $zip = new ZipArchive();
 $j=0;
 for($k=$firstEpisode;$k<=$lastEpisode;$k++)
 {
 $lien="https://www.mangapanda.com/".$nameManga."/".$k;
 $strResult = implode("",file($lien));

 $lastChapiter=explode(' ',substr($strResult,strpos ($strResult,'</select> of '))); 
 $lastChapiter = str_replace("src=","",$lastChapiter[2]); 
 $lastChapiter= str_replace('</div>','',$lastChapiter);
 $lastChapiter= str_replace('<div','',$lastChapiter);
 $lastChapiter= str_replace("\n",'',$lastChapiter);
  for($i=$firstChapiter;$i<=$lastChapiter;$i++)
  {

   $lien2="https://www.mangapanda.com/".$nameManga."/".$k."/".$i;

  $strResult2 = implode("",file($lien2));
 if(isset($strResult2)){

     $url=explode(' ',substr($strResult2,strpos ($strResult2,'id="img'))); 
      }
  $url1 = str_replace("src=","",$url[5]); 
  $url1 = str_replace('"','',$url1);
   $table[$j]=$url1;

$j++;
     }

?>