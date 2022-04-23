function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
 var titleRow=document.getElementById("title_row"+no);
 var dateRow=document.getElementById("date_row"+no);
 var timeRow=document.getElementById("time_row"+no);
 var descRow=document.getElementById("desc_row"+no);
 var imgRow= document.getElementById('img_row'+no);
 var title=titleRow.innerHTML;
 var date=dateRow.innerHTML;
 var time=timeRow.innerHTML;
 var desc=descRow.innerHTML;
 var src = document.getElementById("event_img"+no+"").src;
 titleRow.innerHTML="<input type='text' id='edit_title"+no+"' value='"+title+"'>";
 dateRow.innerHTML="<input type='text' id='edit_date"+no+"' value='"+date+"'>";
 timeRow.innerHTML="<input type='time' id='edit_time"+no+"' value='"+time+"'>";
 descRow.innerHTML="<input type='text' id='edit_desc"+no+"' value='"+desc+"'>";
 imgRow.innerHTML = "<img id='blah' style='display:block;' src='"+src+"'  width='100px' height='100px' /><div><span class='btn btn-file btn-success'><span class='fileupload-new'>Select image</span><input type='file' class='img'  id='imgInp' onchange='showPreview(event);'></span></div>"
 console.log('you can edit it');
}

function save_row(no)
{
 var titleNew=document.getElementById("edit_title"+no).value;
 var dateNew=document.getElementById("edit_date"+no).value;
 var timeNew=document.getElementById("edit_time"+no).value;
 var descNew=document.getElementById("edit_desc"+no).value;
 var srcNew = document.getElementById("blah").src;
 document.getElementById("title_row"+no).innerHTML=titleNew;
 document.getElementById("date_row"+no).innerHTML=dateNew;
 document.getElementById("time_row"+no).innerHTML=timeNew;
 document.getElementById("desc_row"+no).innerHTML=descNew;
 document.getElementById("img_row"+no).innerHTML= "<img id='event_img"+no+"' src='"+srcNew+"' width='100px' height='100px'>"
 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
} 

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var newTitle=document.getElementById("new_title").value;
 var newDate=document.getElementById("new_date").value;
 var newTime=document.getElementById("new_time").value;
 var newDesc=document.getElementById("new_desc").value;
 var newImgSrc= document.getElementById('blah').src;
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='title_row"+table_len+"'>"+newTitle+"</td><td id='date_row"+table_len+"'>"+newDate+"</td><td id='time_row"+table_len+"'>"+newTime+"</td><td id='desc_row"+table_len+"'>"+newDesc+"</td><td id='img_row"+table_len+"'><img src='"+newImgSrc+"' id='event_img"+table_len+"' width='100px' height='100px'></td><td ><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'><input type='button' id='save_button"+table_len+"'  value='Save' class='save' style='display:none;' onclick='save_row("+table_len+")'><input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";
newTitle = " " ;
newDate =" " ;
newTime = " ";
newDesc = " ";
newImgSrc = " #";
}                                                        
 function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("blah");
      preview.src = src;
      preview.style.display = "block";
    }
  }
