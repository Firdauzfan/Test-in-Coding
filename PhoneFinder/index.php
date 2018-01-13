<!DOCTYPE html>
<html lang="en-us">
<head>

<title>Phone Finder Website</title>

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script src="js/jquery-1.11.3-jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>


<?php
 	$url = 'data.json'; 
	$data = file_get_contents($url); 
	$data_decode = json_decode($data);

?>

</head>
<body>

<h2 style="margin-left:10px;">Phone Finder Website</h2>

<div align="center">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search Phone" style="background:url('img/searhicon.png') no-repeat -8px 9px; background-size:30px 30px;background-position: right;">
</div>

<div class="container-fluid">
<div class="modal-body row">
  <div class="col-md-6" align="right">

  <div class="multiselect" align="left">
    <div class="selectBox styled-select blue semi-square" onclick="showCheckboxes()">
      <select>
        <option>Years</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes" class="filters">
    <h4 id="tahun_h" style="margin-left:5px;">All Years</h4>
    <?php

    $tahun= array();
                                                                                                                                                                                                      
	usort($data_decode, function($a, $b) { 
	    return $a->release_year > $b->release_year ? -1 : 1; 
	});                                                                                                                                                         
	
  	foreach ($data_decode as $data_decoder) {
  	
  		if (!in_array($data_decoder->release_year, $tahun)) {
  			array_push($tahun, $data_decoder->release_year);
  			
  			echo "<label for='$data_decoder->release_year'>
        <input class='genre' type='checkbox' id='$data_decoder->release_year' name='tahun_keluar[]' value='$data_decoder->release_year'/>$data_decoder->release_year</label>";
  		
  		}
  		 	
  	}
 
  ?>  
    </div>
  </div>

  </div>

  <div class="col-md-6" align="left">

  <div class="multiselect" align="left">
    <div class="selectBox styled-select blue semi-square" onclick="showCheckboxes2()">
      <select>
        <option>Brands</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes2" class="filters" > 
    <h4 id="brand_h" style="margin-left:5px;">All Brands</h4>
       <?php

    $brands= array();
                                                                                                                                                                                                                                                                                                                                                            
  	foreach ($data_decode as $data_decoder) {
  		
  		if (!in_array($data_decoder->brand, $brands)) {
  			array_push($brands, $data_decoder->brand);
  			echo "<label for='$data_decoder->brand'>
        <input type='checkbox' class='brand' id='$data_decoder->brand' name='brand_keluar[]' value='$data_decoder->brand'/>$data_decoder->brand</label>";
  		}
  		
  	}
  ?>  
    </div>
  </div>

  </div>
</div>
</div>

<div class="boxeded" align="center">
<ul id="myUL">
<div class="booksList in fade">

<?php
	
  	foreach ($data_decode as $data_decoded) {
  		echo "<a class='inactiveLink'>";
      echo '<div class="boxed blItem genre brand" data-tag="'.$data_decoded->release_year.','.$data_decoded->brand.'">';
  		echo "<h2>".$data_decoded->name."</h2>";
  		echo "<p align='justify'>".$data_decoded->description."</p>";
  		echo "<h4 align='left'>".$data_decoded->brand."</h4>";
  		echo "<h4 align='left'>".$data_decoded->release_year."</h4>";
      echo "</div>";
      echo "</a>";
  	}
  	
  ?> 
  
</div>
</ul>
</div>

<script>
	function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("a");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h2")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}

</script>

<script type="text/javascript">

    var vals = [];
 $(document).ready(function () {

     var $checkes = $('input:checkbox[name="tahun_keluar[]"]').change(function () {
         vals = $checkes.filter(':checked').map(function () {
             return this.value;
         }).get();
          document.getElementById("tahun_h").innerHTML ="Filtered: " + vals;
     });
 });
   

  $(document).ready(function(){       
    $('.genre').on('change', function(){
        var genreList = [];

        $('#checkboxes :input:checked').each(function(){
            var genre = $(this).val();
            genreList.push(genre);
        });

        if(genreList.length == 0)
            $('.blItem').fadeIn();
        else {
            $('.blItem').each(function(){
                var item = $(this).attr('data-tag');
                var items = item.split(',');

                $(this).hide();
                for (var i=0;i<items.length;i++) {
                    if(jQuery.inArray(items[i],genreList) > -1)
                        $(this).fadeIn('slow');
                }
            });
        }   
    });
});
</script>

<script type="text/javascript">

    var vals = [];
 $(document).ready(function () {

     var $checkes = $('input:checkbox[name="brand_keluar[]"]').change(function () {
         vals = $checkes.filter(':checked').map(function () {
             return this.value;
         }).get();
          document.getElementById("brand_h").innerHTML ="Filtered: " + vals;
     });
 });

$(document).ready(function(){
    $('.brand').on('change', function(){
        var genreList = [];

        $('#checkboxes2 :input:checked').each(function(){
            var genre = $(this).val();
            genreList.push(genre);
        });

        if(genreList.length == 0)
            $('.blItem').fadeIn();
        else {
            $('.blItem').each(function(){
                var item = $(this).attr('data-tag');
                var items = item.split(',');

                $(this).hide();
                for (var i=0;i<items.length;i++) {
                    if(jQuery.inArray(items[i],genreList) > -1)
                        $(this).fadeIn('slow');
                }
            });
        }   
    });
});
</script>

<script>
var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

var expanded2 = false;

function showCheckboxes2() {
  var checkboxes2 = document.getElementById("checkboxes2");
  if (!expanded2) {
    checkboxes2.style.display = "block";
    expanded2 = true;
  } else {
    checkboxes2.style.display = "none";
    expanded2 = false;
  }
}
</script>

</body>
   
</html>
