<?php
   parse_str(file_get_contents('http://www.youtube.com/get_video_info?video_id=WwVZBfMlNPA'), $video_data);
   $streams = $video_data['url_encoded_fmt_stream_map'];
   $streams = explode(',',$streams);
   $counter = 1;
   
    foreach ($streams as $streamdata) {
  printf("Stream %d:<br/>----------------<br/><br/>", $counter);
  
  parse_str($streamdata,$streamdata);
  
  foreach ($streamdata as $key => $value) {
    if ($key == "url") {
      $value = urldecode($value);
      ?>
      <strong><?php echo $key;?>:</strong> <a href='<?php echo $value; ?>' download='downloadfilename'>Download Video</a><br/>
  <?php echo "<br/><br/>";echo "<br/><br/>";
      } else {
      printf("<strong>%s:</strong> %s<br/>", $key, $value);
    }
  }
  $counter = $counter+1;
  printf("<br/><br/>");
}
