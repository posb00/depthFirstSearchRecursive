<?php


function DepthFirstSearch($root)
{
   if($root == null) return [];

   $left = DepthFirstSearch($root->left);
   $rigth = DepthFirstSearch($root->rigth);

   return [$root->val, ...$left, ...$rigth];
   
}





?>