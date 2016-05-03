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


<?php /*
function GetName($parent)
{
  if(is_dir($parent))
  {
  echo "string";

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
              echo '<li>' . '<img src="' . $absolutePath . '" />' .'</li>';  
          }
        }
      }
    }
  }
}

$path    = content_url('/uploads/');
echo '<ul class="bxslider">';
GetName('../../../uploads');
echo '</ul>';

echo $path;
*/
?>