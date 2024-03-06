<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
  <?php $start_url_base = "https://www.mhebazar.in/blog/";
  $start_url = "https://www.mhebazar.in/";
  ?>
 
   
    @foreach ($blogs as $ablog)
        <url>
            <loc>{{$start_url_base}}{{$ablog->blog_url}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($ablog->updated_at)) }}</lastmod>            
            <priority>1.0</priority>
    </url>
    @endforeach
   
  

  
  
  

</urlset>