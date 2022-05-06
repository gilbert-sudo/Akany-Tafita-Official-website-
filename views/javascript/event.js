
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
 imgRow.innerHTML = "<img id='blah' style='display:block;' src='"+src+"'  width='100px' height='100px' /><div><span class='btn btn-file btn-success'><span class='fileupload-new'>Select image</span><input type='file' class='img'  id='blah"+no+"' onchange='showPreview(event);'></span></div>"
 console.log('you can edit it');

}
var sendRequest = async (endPoint) => {
  const request = await fetch(endPoint);
  const data = await request.json();
  console.log(data);
  return data;
}
function save_row(no, sendRequest)
{
  sendRequest("index.php?controller=events&task=update").then(data =>{ console.log(data);}).catch(err =>{console.log(err);});
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
 function showPreview(event){
    if(event.target.files.length > 0){
    
      var file = event.target.files[0];
      var fileName =file.name;
      var src = URL.createObjectURL(file);
      var preview =document.getElementById("blah");
      preview.src = src;
      preview.style.display = "block";
      var change = $('#selectImg');
      change.innerHTML = "change";
     
    }
  }
//   fetch()=var sendRequest = (endPoint)=>{
//     return new Promise((resolve, reject)=>{ 
//       const request = new XMLHttpRequest();
//   request.addEventListener(readystatechange, ()=>{
//     if(request.readyState === 4 && request.status === 200){
//       const data = JSON.parse(request.responseText);
//       console.log(data);
//       resolve(data);
//     }
//     else
//     {
//       console.log("error");
//       reject(Error("error"));
//     }
//   })
//   request.open('GET', endPoint, true);
//   request.send();
// }
//     )
 
// }
// sendRequest('http://localhost:3000/events').then(data =>{ console.log(data);}).catch(err =>{console.log(err);});

