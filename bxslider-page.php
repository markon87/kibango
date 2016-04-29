<!-- <ul class="bxslider">
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_01.jpg'?>" /></li>
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_02.jpg'?>" /></li>
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_03.jpg'?>" /></li>
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_04.jpg'?>" /></li>
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_05.jpg'?>" /></li>
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_06.jpg'?>" /></li>
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_07.jpg'?>" /></li>
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_08.jpg'?>" /></li>
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_09.jpg'?>" /></li>
  <li><img src="<?php //echo content_url().'/uploads/2016/04/cover_10.jpg'?>" /></li>
</ul> -->


<ul class="bxslider">
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_01.jpg'?>" /></li>
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_02.jpg'?>" /></li>
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_03.jpg'?>" /></li>
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_04.jpg'?>" /></li>
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_05.jpg'?>" /></li>
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_06.jpg'?>" /></li>
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_07.jpg'?>" /></li>
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_08.jpg'?>" /></li>
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_09.jpg'?>" /></li>
  <li><img src="<?php echo content_url().'/uploads/2016/04/cover_10.jpg'?>" /></li>
</ul>

<?php
function GetName($parent)
{
  if(is_dir($parent))
  {
    $list = scandir($parent);
    foreach($list as $el)
    {

      if($el != '.' && $el != '..')
      {
        $absolutePath = $parent . '/' .$el;
        if(is_dir($absolutePath))
        {
          GetName($absolutePath);
        }
        else
        {
          if (strpos($el, 'cover_') !== false) 
          {
              echo '<li>' . $absolutePath  .'</li>';  
          }
        }
      }
    }
  }
}

$path    = './images';
echo '<ul>';
GetName($path);
echo '</ul>';

?>