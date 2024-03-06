<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
  <?php $start_url_base = "https://www.mhebazar.in/";
  $start_url = "https://www.mhebazar.in/";
  ?>
    <url>
        <loc>{{ $start_url }}</loc>

        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ $start_url_base }}{{str_replace(' ','-', $category)}}</loc>
       
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
  @if(!$subcategory == null && !$equipment->id == 9)
  @foreach ($subcategory as $post)
        <url>
            <loc>{{ $start_url_base }}{{str_replace(' ','-', $category)}}/{{ strtolower(str_replace('-bopt-', '', preg_replace('/-+/', '-', preg_replace('/[^A-Za-z0-9\-]/', '-', $post->title)))) }}-{{$post->id}}</loc>
           
            <changefreq>daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
@endif
               @foreach ($product as $cate)
                @php
                                                            if (!$cate->subcategory == null) {
                                                                $urlcategory = strtolower(str_replace(' ', '-', str_replace(array( '(', ')' ),'',$cate->subcategory->title)));
                                                            } else {
                                                                $urlcategory = strtolower(str_replace(' ', '-', $cate->category->name));
                                                            }
                                                            if ($cate->vendor == null) {
                                                                $vname = 'mhe-bazar';
                                                            } else {
                                                                $vname = strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->userData->brandname)));
                                                            }
                                                            if (!$cate->capacity == null) {
                                                                 $urltitle = $vname.'-'.strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', rtrim($cate->title)))) . '-' . strtolower(str_replace(' ', '-',rtrim($cate->capacity))).'-' .strtolower(str_replace(' ', '-',rtrim($cate->model))) . '-' . $cate->id;
                                                            } else {
                                                                $urltitle = $vname . '-' . strtolower(str_replace(' ', '-', preg_replace('/[^A-Za-z0-9 ]/', '', $cate->title))) . '-' . strtolower(str_replace(' ', '-', $cate->model)) . '-' . $cate->id;
                                                            }
                                                            @endphp
            <url>
                @if($cate->old == null)
                    <loc>{{ $start_url_base }}{{$urlcategory}}/{{$urltitle}}</loc>
                @else
                <loc>{{ $start_url_base }}used-mhe/{{$urlcategory}}/{{$urltitle}}</loc>
                @endif
                    <changefreq>daily</changefreq>
                    <priority>1.0</priority>
                </url>
                @endforeach





</urlset>
