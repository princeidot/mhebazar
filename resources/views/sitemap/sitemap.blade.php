<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
  <?php $start_url_base = "https://www.mhebazar.in/";
  $start_url = "https://www.mhebazar.in/";
  ?>
  <url>
    <loc>{{$start_url}}</loc>
 
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
</url>
 @foreach ($equipment as $post)
 @php
 $name=str_replace(' (BOPT)','',$post->name);
 @endphp
        <url>
            <loc>{{$start_url_base}}{{strtolower(preg_replace('/-+/','-',preg_replace('/[^A-Za-z0-9\-]/','-',$name)))}}</loc>
         
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach

        <url>
            <loc>{{$start_url_base}}used-mhe</loc>
         
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>

         <url>
            <loc>{{$start_url_base}}spare-parts</loc>
         
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
        <url>
            <loc>{{$start_url_base}}blog</loc>
         
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
        <url>
            <loc>{{$start_url_base}}blog.xml</loc>
         
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
        
   @foreach ($equipment as $post)
   @php
 $name=str_replace(' (BOPT)','',$post->name);
 @endphp
 
  <url>
            <loc>{{$start_url_base}}{{strtolower(preg_replace('/-+/','-',preg_replace('/[^A-Za-z0-9\-]/','-',$name)))}}.xml</loc>
            
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
   
        @endforeach
</urlset>