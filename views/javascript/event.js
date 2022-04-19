function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";
	
 var title=document.getElementById("title_row"+no);
 var date=document.getElementById("date_row"+no);
 var time=document.getElementById("time_row"+no);
 var desc = document.getElementById("desc_row"+no);
 var image = document.getElementById("image_row"+no);
	
 var title=title.innerHTML;
 var date=date.innerHTML;
 var time=time.innerHTML;
 var desc=desc.innerHTML;
	
 title.innerHTML="<input type='text' id='title_row"+no+"' value='"+title+"'>";
 date.innerHTML="<input type='date' id='date_row"+no+"' value='"+date+"'>";
 time.innerHTML="<input type='time' id='time_row"+no+"' value='"+time+"'>";
desc.innerHTML="<input type='text' id='desc_row"+no+"' value='"+desc+"'>";
var input = '<input type="file" id ='input"+no+"' onchange='readURL(this, no)' value='change' >';

image.appendChild(input);
}

function save_row(no)
{
 var title_val=document.getElementById("title_row"+no).value;
 var date_val=document.getElementById("date_row"+no).value;
 var time_val=document.getElementById("time_row"+no).value;
 var desc_val=document.getElementById("desc_row"+no).value;
 var image_val=document.getElementById("image_row"+no).value;
 document.getElementById("name_row"+no).innerHTML=name_val;
 document.getElementById("country_row"+no).innerHTML=country_val;
 document.getElementById("age_row"+no).innerHTML=age_val;

 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var add_title=document.getElementById("new_title").value;
 var add_date=document.getElementById("new_date").value;
 var add_time=document.getElementById("new_time").value;
 var add_desc=document.getElementById("new_desc").value;
	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='name_row"+table_len+"'>"+new_name+"</td><td id='country_row"+table_len+"'>"+new_country+"</td><td id='age_row"+table_len+"'>"+new_age+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_name").value="";
 document.getElementById("new_country").value="";
 document.getElementById("new_age").value="";
}
function readURL(input, no) {
    if (input.files && input.files[0]) {
    
      var reader = new FileReader();
      reader.onload = function (e) { 
        document.querySelector("#img"+no"").setAttribute("src",e.target.result);
      };

      reader.readAsDataURL(input.files[0]); 
    }
  }